<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Mews\Purifier\Facades\Purifier;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('title')->paginate(30);
        return view('admin.pages.index', compact('pages'));
    }

    public function edit(Page $page)
    {
        $sectionDefinitions = $this->getSectionDefinitions($page->slug);
        // Hardcoded defaults take precedence; fall back to defaults extracted
        // directly from the blade template so every textarea shows the actual
        // text the public site renders, even for auto-discovered pages.
        $hardcodedDefaults = $this->getSectionDefaults($page->slug);
        $bladeDefaults     = $this->extractBladeDefaults($page->slug);
        $sectionDefaults   = array_merge($bladeDefaults, $hardcodedDefaults);

        $linkPages = Page::where('is_active', true)
            ->orderBy('title')
            ->get(['slug', 'title'])
            ->map(fn ($p) => ['url' => '/' . ltrim($p->slug, '/'), 'label' => $p->title ?: $p->slug])
            ->values();

        $linkPosts = \App\Models\BlogPost::published()
            ->orderBy('title')
            ->get(['slug', 'title'])
            ->map(fn ($p) => ['url' => '/blog/' . $p->slug, 'label' => $p->title])
            ->values();

        return view('admin.pages.edit', compact(
            'page', 'sectionDefinitions', 'sectionDefaults', 'linkPages', 'linkPosts'
        ));
    }

    public function update(Request $request, Page $page)
    {
        // Quick active/inactive toggle from the page header button
        if ($request->boolean('_toggle_active')) {
            $page->update(['is_active' => $request->boolean('is_active')]);
            $status = $page->is_active ? 'Page activated.' : 'Page deactivated — it will return 404 to visitors.';
            return redirect()->route('admin.pages.edit', $page)->with('success', $status);
        }

        $validated = $request->validate([
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable|max:1000',
            'meta_keywords' => 'nullable|max:500',
            'canonical_url' => 'nullable|url|max:500',
            'sections' => 'nullable|array',
            'content_blocks' => 'nullable|array',
            'content_blocks.*.heading' => 'nullable|string|max:500',
            'content_blocks.*.heading_level' => 'nullable|in:h2,h3',
            'content_blocks.*.content' => 'nullable|string|max:100000',
            'content_blocks.*.image_position' => 'nullable|in:left,right',
            'content_blocks.*.image_alt' => 'nullable|string|max:255',
            'content_blocks.*.image_file' => 'nullable|image|max:2048',
        ]);

        // Per-section validation rules derived from field definitions so each
        // textarea/text/html/toggle has a sensible max length.
        $definitions = $this->getSectionDefinitions($page->slug);
        $sectionRules = [];
        foreach ($definitions as $key => $def) {
            $sectionRules["sections.$key"] = match ($def['type'] ?? 'text') {
                'toggle'   => 'nullable|in:0,1',
                'text'     => 'nullable|string|max:5000',
                'textarea' => 'nullable|string|max:20000',
                'html'     => 'nullable|string|max:100000',
                default    => 'nullable|string|max:20000',
            };
        }
        if (!empty($sectionRules)) {
            $request->validate($sectionRules);
        }

        // Merge submitted sections into existing — only keep non-empty values
        // so that empty fields don't overwrite previously saved content.
        // Toggle fields ("0") must pass through since "0" is valid and non-empty.
        $incoming = $request->input('sections', []);
        $incoming = array_filter($incoming, fn($v) => $v !== '' && $v !== null);

        // HTML sanitization — strips <script>, on*= handlers, javascript:
        // URLs, iframes, embeds. Toggles bypass (they're plain "0"/"1").
        foreach ($incoming as $key => $value) {
            $type = $definitions[$key]['type'] ?? 'text';
            if ($type === 'toggle' || !is_string($value)) {
                continue;
            }
            $incoming[$key] = Purifier::clean($value, 'page-content');
        }

        $sections = array_merge($page->sections ?? [], $incoming);

        $blocks = $this->parseContentBlocks($request, $page);

        $page->update([
            'meta_title' => $validated['meta_title'],
            'meta_description' => $validated['meta_description'],
            'meta_keywords' => $validated['meta_keywords'],
            'noindex' => $request->boolean('noindex'),
            'canonical_url' => $validated['canonical_url'],
            'sections' => $sections,
            'content_blocks' => $blocks,
        ]);

        return redirect()->route('admin.pages.edit', $page)->with('success', 'Page updated successfully.');
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|regex:/^[a-z0-9][a-z0-9-]*$/|unique:pages,slug',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:1000',
            'meta_keywords' => 'nullable|string|max:500',
            'content_blocks' => 'nullable|array',
            'content_blocks.*.heading' => 'nullable|string|max:500',
            'content_blocks.*.heading_level' => 'nullable|in:h2,h3',
            'content_blocks.*.content' => 'nullable|string|max:100000',
            'content_blocks.*.image_position' => 'nullable|in:left,right',
            'content_blocks.*.image_alt' => 'nullable|string|max:255',
            'content_blocks.*.image_file' => 'nullable|image|max:2048',
        ], [
            'slug.regex' => 'Slug must be lowercase, start with a letter or number, and contain only letters, numbers, and hyphens.',
            'slug.unique' => 'A page with this slug already exists.',
        ]);

        // Create the page first so we have an ID for the image upload path.
        $page = Page::create([
            'slug' => $validated['slug'],
            'title' => $validated['title'],
            'meta_title' => $validated['meta_title'] ?? null,
            'meta_description' => $validated['meta_description'] ?? null,
            'meta_keywords' => $validated['meta_keywords'] ?? null,
            'sections' => [],
            'is_active' => true,
        ]);

        $blocks = $this->parseContentBlocks($request, $page);
        if (!empty($blocks)) {
            $page->update(['content_blocks' => $blocks]);
        }

        return redirect()->route('admin.pages.edit', $page)->with('success', 'Page created. You can now add content sections.');
    }

    /**
     * Parse content blocks from the request, handle image uploads, and return
     * an ordered array ready to persist into the page's content_blocks column.
     *
     * Form contract: blocks are keyed by client-generated IDs in
     * content_blocks[<id>][...]. A hidden _block_order field carries the
     * comma-separated IDs in their current visual order (drag-and-drop result).
     * Files arrive at content_blocks.<id>.image_file. Existing image URLs
     * arrive in content_blocks.<id>.image_url and are kept unless replaced or
     * explicitly removed via content_blocks.<id>._image_removed=1.
     */
    private function parseContentBlocks(Request $request, Page $page): array
    {
        $rawOrder  = $request->input('_block_order', '');
        $rawBlocks = $request->input('content_blocks', []);
        $orderIds  = array_filter(array_map('trim', explode(',', $rawOrder)));
        if (empty($orderIds)) {
            $orderIds = array_keys($rawBlocks);
        }

        $result = [];
        foreach ($orderIds as $id) {
            if (!isset($rawBlocks[$id])) {
                continue;
            }
            $b = $rawBlocks[$id];

            // Image: priority is (1) new uploaded file, (2) removal flag, (3) existing URL.
            $imageUrl = null;
            $uploaded = $request->file("content_blocks.$id.image_file");
            if ($uploaded && $uploaded->isValid()) {
                $dir = public_path('uploads/blocks/' . $page->id);
                if (!is_dir($dir)) {
                    @mkdir($dir, 0755, true);
                }
                $ext = strtolower($uploaded->getClientOriginalExtension() ?: 'jpg');
                $filename = 'blk_' . time() . '_' . bin2hex(random_bytes(4)) . '.' . $ext;
                $uploaded->move($dir, $filename);
                $imageUrl = '/uploads/blocks/' . $page->id . '/' . $filename;
            } elseif (!empty($b['_image_removed'])) {
                $imageUrl = null;
            } elseif (!empty($b['image_url'])) {
                $imageUrl = $b['image_url'];
            }

            $heading = trim($b['heading'] ?? '');
            $content = $b['content'] ?? '';
            if ($content !== '') {
                $content = Purifier::clean($content, 'page-content');
            }

            // Skip blocks that have no meaningful content at all
            if ($heading === '' && trim(strip_tags($content)) === '' && !$imageUrl) {
                continue;
            }

            $result[] = [
                'id'             => $id,
                'heading'        => $heading,
                'heading_level'  => in_array($b['heading_level'] ?? '', ['h2', 'h3'], true) ? $b['heading_level'] : 'h2',
                'content'        => $content,
                'image_url'      => $imageUrl,
                'image_alt'      => trim($b['image_alt'] ?? ''),
                'image_position' => in_array($b['image_position'] ?? '', ['left', 'right'], true) ? $b['image_position'] : 'right',
            ];
        }

        return $result;
    }

    public function destroy(Page $page)
    {
        // Block destruction of pages tied to hardcoded blade templates — those
        // have a fixed slug expected by the public route and removing the DB row
        // would only break the menu / meta, not the page itself.
        $protectedSlugs = ['home', 'about', 'cricket', 'casino', 'football-betting', 'tennis-betting', 'aviator'];
        if (in_array($page->slug, $protectedSlugs, true)) {
            return redirect()->route('admin.pages.index')->with('error', "The '{$page->slug}' page is tied to a built-in template and cannot be deleted.");
        }

        $page->delete();
        return redirect()->route('admin.pages.index')->with('success', "Page '{$page->title}' deleted.");
    }

    private function getSectionDefaults(string $slug): array
    {
        $defaults = [
            'home' => [
                // Hero Slide 1
                'hero_slide_1_badge'     => "India's #1 Trusted Platform",
                'hero_slide_1_title'     => 'We Are India\'s Leading <span class="text-gold">Online Betting ID</span> Provider',
                'hero_slide_1_subtitle'  => 'Get your Cricket, Casino, Tennis & Football Betting ID instantly via WhatsApp. Trusted by 2 Million+ players.',
                'hero_slide_1_btn1_text' => 'Get Your FREE Betting ID Now',
                'hero_slide_1_btn2_text' => 'How It Works',
                'hero_slide_1_btn2_link' => '#how-it-works',
                // Hero Slide 2
                'hero_slide_2_badge'     => 'IPL 2026 Season Live',
                'hero_slide_2_title'     => 'Get Your <span class="text-gold">IPL Betting ID</span> & Win Big!',
                'hero_slide_2_subtitle'  => 'Live IPL odds, session betting, fancy markets & more. Enjoy Welcome Bonus on first deposit.',
                'hero_slide_2_btn1_text' => 'Get IPL Betting ID',
                'hero_slide_2_btn2_text' => 'Cricket Markets',
                'hero_slide_2_btn2_link' => '/cricket-betting-id',
                // Hero Slide 3
                'hero_slide_3_badge'     => 'Casino & Live Games',
                'hero_slide_3_title'     => 'Play <span class="text-gold">Live Casino Games</span> & Win Real Money',
                'hero_slide_3_subtitle'  => 'Teen Patti, Roulette, Blackjack, Aviator & more. Instant deposits, fast withdrawals within 5 minutes.',
                'hero_slide_3_btn1_text' => 'Get Casino ID Now',
                'hero_slide_3_btn2_text' => 'Casino Games',
                'hero_slide_3_btn2_link' => '/casino',
                // Stats Bar
                'stats_1_number' => '2.0M+',
                'stats_1_label'  => 'Active Players',
                'stats_2_number' => '7+',
                'stats_2_label'  => 'Years Experience',
                'stats_3_number' => '365',
                'stats_3_label'  => 'Days Service',
                'stats_4_number' => '24/7',
                'stats_4_label'  => 'Customer Care',
                // Trust Badges
                'trust_1_title' => '100% Secure',
                'trust_1_text'  => 'Encrypted Payments',
                'trust_2_title' => '24/7 Support',
                'trust_2_text'  => 'Always Available',
                'trust_3_title' => '7+ Years Trusted',
                'trust_3_text'  => 'Since 2017',
                'trust_4_title' => 'Instant Withdrawal',
                'trust_4_text'  => 'Within 5 Minutes',
                'trust_5_title' => '2M+ Players',
                'trust_5_text'  => 'Active Community',
                // Get Your ID Section
                'get_id_title'        => 'Get Your <span class="text-gold">Betting ID</span> in 2 Minutes',
                'get_id_subtitle'     => 'Simple, fast, and secure. Start betting in just 2 easy steps.',
                'get_id_step_1_title' => 'Contact Us on WhatsApp',
                'get_id_step_1_text'  => 'Send us a simple "Hi" on WhatsApp and our team will respond instantly.',
                'get_id_step_2_title' => 'Get Your FREE Betting ID',
                'get_id_step_2_text'  => 'Receive your verified betting ID within minutes. Start playing immediately!',
                'get_id_btn_text'     => 'Get Your ID Now',
                // Bonus Section
                'bonus_badge'    => 'LIMITED TIME OFFER',
                'bonus_title'    => 'Claim <span class="text-gold">Welcome Bonus</span> on Your First Deposit!',
                'bonus_text'     => 'Sign up today and double your first deposit. Don\'t miss out on this exclusive offer!',
                'bonus_btn_text' => 'Claim Your Bonus Now',
                // Why Choose Us
                'why_choose_title'    => 'Why Choose <span class="text-gold">Radhey Book</span>?',
                'why_choose_subtitle' => 'Trusted by millions of players across India',
                'why_1_title' => 'Instant ID Activation',
                'why_1_text'  => 'Get your betting ID activated within minutes via WhatsApp. No lengthy registration process.',
                'why_2_title' => '100% Safe & Secure',
                'why_2_text'  => 'Your data and transactions are fully encrypted and protected. We prioritize your privacy.',
                'why_3_title' => '24/7 WhatsApp Support',
                'why_3_text'  => 'Our dedicated support team is available round the clock to assist you with any queries.',
                'why_4_title' => '7 Years Experience',
                'why_4_text'  => 'With 7+ years in the industry, we are one of the most experienced betting ID providers in India.',
                'why_5_title' => 'Fast Withdrawals',
                'why_5_text'  => 'Withdraw your winnings within 5 minutes. We support UPI, GPay, Paytm, PhonePe & Bank Transfer.',
                'why_6_title' => '2 Million+ Players',
                'why_6_text'  => 'Join the community of over 2 million active players who trust Radhey Book.',
                // How It Works
                'how_it_works_title'    => 'How Does <span class="text-gold">Radhey Book</span> Work?',
                'how_it_works_subtitle' => 'Follow these simple steps to start your journey',
                'how_step_1_title' => 'Choose Your Platform',
                'how_step_1_text'  => 'Select from our trusted exchange platforms like Lord Exchange, Lotus, Fairplay & more.',
                'how_step_2_title' => 'Share Basic Details',
                'how_step_2_text'  => 'Send your name and preferred platform to our WhatsApp support team.',
                'how_step_3_title' => 'Get Your Betting ID',
                'how_step_3_text'  => 'Receive your verified betting ID with login credentials within minutes.',
                'how_step_4_title' => 'Add Balance',
                'how_step_4_text'  => 'Deposit funds using UPI, GPay, Paytm, PhonePe or Bank Transfer.',
                'how_step_5_title' => 'Place Your Bets',
                'how_step_5_text'  => 'Start betting on Cricket, Casino, Tennis, Football & more with live odds.',
                'how_step_6_title' => 'Withdraw Winnings',
                'how_step_6_text'  => 'Withdraw your winnings instantly within 5 minutes to your bank account.',
                // Our Services
                'services_title'    => 'Our <span class="text-gold">Services</span>',
                'services_subtitle' => 'We provide betting IDs for all major sports and casino games',
                'service_link_text' => 'Learn More',
                'service_1_title'   => 'Cricket Betting ID',
                'service_1_text'    => 'IPL, International matches, T20 leagues - bet on all cricket events with live odds.',
                'service_2_title'   => 'Tennis Betting ID',
                'service_2_text'    => 'Bet on Grand Slams, ATP, WTA matches with competitive odds and live betting.',
                'service_3_title'   => 'Casino ID',
                'service_3_text'    => 'Play Teen Patti, Roulette, Blackjack, Baccarat and more casino games online.',
                'service_4_title'   => 'Football Betting ID',
                'service_4_text'    => 'Premier League, La Liga, Champions League - bet on all football leagues worldwide.',
                'service_5_title'   => 'Aviator Game',
                'service_5_text'    => 'Play the exciting Aviator crash game with high multipliers and instant payouts.',
                // Exchange Platforms
                'platforms_title'    => 'Trusted <span class="text-gold">Exchange Platforms</span>',
                'platforms_subtitle' => 'We provide IDs for all major betting exchange platforms',
                'platform_1_title'   => 'Lord Exchange',
                'platform_1_text'    => 'Premium exchange with best odds and fastest withdrawals.',
                'platform_1_badge'   => 'Popular',
                'platform_2_title'   => 'Lotus Exchange',
                'platform_2_text'    => 'Trusted platform with wide range of betting markets.',
                'platform_2_badge'   => 'Trusted',
                'platform_3_title'   => 'Sky Exchange',
                'platform_3_text'    => 'Well-established and highly trusted platform in India. Strong cricket markets including IPL and international matches, fast transactions and 24/7 support via Sky Exchange Contact Number.',
                'platform_3_badge'   => 'Top Rated',
                'platform_4_title'   => 'Fairplay',
                'platform_4_text'    => 'Global platform with a strong Indian user base. Best odds on short-format matches like IPL, BBL, CPL with fast real-time updates and in-play cash-out options.',
                'platform_4_badge'   => 'Fair',
                'platform_5_title'   => 'Mahadev Book',
                'platform_5_text'    => 'Renowned site with a significant following among Indian users. Coverage of cricket, football, tennis and casino with a wide range of markets, live streaming on select events, exciting bonuses and instant support via Mahadev Book Contact Number.',
                'platform_5_badge'   => 'Popular',
                'platform_6_title'   => 'Reddy Anna',
                'platform_6_text'    => 'Well-known platform with a large user base in India. Coverage of cricket, football and other sports with fast real-time updates, in-play cash-out options, exciting bonuses for new and existing users, and reliable Reddy Anna Book contact support.',
                'platform_6_badge'   => 'Trusted',
                // Customer Care
                'freeze_title'          => 'Instant Freeze Button',
                'freeze_text'           => 'Freeze your account instantly anytime you want. Your funds are always safe with us. One-click security for complete peace of mind.',
                'freeze_btn_text'       => 'Freeze Account',
                'care_title'            => '24/7 Customer Care',
                'care_text'             => 'Our dedicated support team is available 24 hours a day, 7 days a week, 365 days a year. Reach us anytime via WhatsApp.',
                'care_phone'            => '+91 79017 12857',
                'care_email'            => 'support@radheybook.com',
                'care_support_btn_text' => 'Contact Support',
                // Comparison Table
                'comparison_title'    => 'Why <span class="text-gold">Radhey</span> is Better?',
                'comparison_subtitle' => 'See how we compare with other betting ID providers',
                'comp_row_1'  => 'Instant ID Activation',
                'comp_row_2'  => '24/7 WhatsApp Support',
                'comp_row_3'  => 'Welcome Bonus',
                'comp_row_4'  => '5-Minute Withdrawals',
                'comp_row_5'  => 'Multiple Payment Methods',
                'comp_row_6'  => 'Live Cricket Odds',
                'comp_row_7'  => 'Casino Games',
                'comp_row_8'  => 'Demo ID Available',
                'comp_row_9'  => 'Freeze Button',
                'comp_row_10' => '7+ Years Experience',
                // Payment Methods
                'payments_title'    => 'Secure <span class="text-gold">Payment Methods</span>',
                'payments_subtitle' => 'Fast deposits and instant withdrawals within 5 minutes',
                'deposit_title'   => 'Fast Deposits',
                'deposit_item_1'  => 'Minimum deposit: Rs. 100',
                'deposit_item_2'  => 'Instant credit to your account',
                'deposit_item_3'  => 'All UPI apps supported',
                'deposit_item_4'  => 'Bank transfer available',
                'deposit_item_5'  => '100% safe & encrypted',
                'withdraw_title'  => 'Instant Withdrawals',
                'withdraw_item_1' => 'Withdraw within 5 minutes',
                'withdraw_item_2' => 'Minimum withdrawal: Rs. 500',
                'withdraw_item_3' => 'Direct to bank account',
                'withdraw_item_4' => 'No hidden charges',
                'withdraw_item_5' => '24/7 withdrawal support',
                // Withdrawal Proof
                'proof_title'    => 'Withdrawal <span class="text-gold">Proof</span>',
                'proof_subtitle' => 'Real withdrawals from our real players',
                'proof_1_amount' => 'Rs. 50,000',
                'proof_1_name'   => 'Rohit S.',
                'proof_1_game'   => 'Cricket Betting',
                'proof_1_time'   => 'Withdrawn in 3 minutes',
                'proof_2_amount' => 'Rs. 1,25,000',
                'proof_2_name'   => 'Amit K.',
                'proof_2_game'   => 'IPL Betting',
                'proof_2_time'   => 'Withdrawn in 5 minutes',
                'proof_3_amount' => 'Rs. 75,000',
                'proof_3_name'   => 'Priya M.',
                'proof_3_game'   => 'Casino - Teen Patti',
                'proof_3_time'   => 'Withdrawn in 2 minutes',
                'proof_4_amount' => 'Rs. 2,00,000',
                'proof_4_name'   => 'Vikram R.',
                'proof_4_game'   => 'Football Betting',
                'proof_4_time'   => 'Withdrawn in 4 minutes',
                // Testimonials
                'testimonials_title'    => 'What Our <span class="text-gold">Players Say</span>',
                'testimonials_subtitle' => 'Trusted by millions of players across India',
                'testimonial_1_text'     => '"Got my betting ID from Radhey in less than a minute! The WhatsApp support is incredibly fast. Highly recommended for anyone looking for a trusted provider."',
                'testimonial_1_avatar'   => 'RM',
                'testimonial_1_name'     => 'Rahul Mehta',
                'testimonial_1_location' => 'Mumbai',
                'testimonial_1_time'     => '2 days ago',
                'testimonial_2_text'     => '"Very trusted and genuine service. I\'ve been using Radhey Book for over 2 years now. Withdrawals are always fast and the customer support is excellent."',
                'testimonial_2_avatar'   => 'SV',
                'testimonial_2_name'     => 'Sanjay Verma',
                'testimonial_2_location' => 'Jaipur',
                'testimonial_2_time'     => '5 days ago',
                'testimonial_3_text'     => '"Best IPL betting ID provider! Got my ID within 60 seconds and the bonus was credited instantly. The odds are always competitive."',
                'testimonial_3_avatar'   => 'AD',
                'testimonial_3_name'     => 'Amit Desai',
                'testimonial_3_location' => 'Ahmedabad',
                'testimonial_3_time'     => '1 week ago',
                'testimonial_4_text'     => '"I was skeptical at first but Radhey proved me wrong. Their service is top-notch and I\'ve already withdrawn over 2 lakhs without any issues."',
                'testimonial_4_avatar'   => 'PK',
                'testimonial_4_name'     => 'Pradeep Kumar',
                'testimonial_4_location' => 'Delhi',
                'testimonial_4_time'     => '3 days ago',
                'testimonial_5_text'     => '"The casino section is amazing! I love playing Teen Patti and Roulette on Radhey\'s platform. Smooth experience and instant payouts."',
                'testimonial_5_avatar'   => 'NS',
                'testimonial_5_name'     => 'Neha Singh',
                'testimonial_5_location' => 'Lucknow',
                'testimonial_5_time'     => '1 week ago',
                'testimonial_6_text'     => '"24/7 support is really 24/7! I contacted them at 3 AM and got my issue resolved within minutes. That\'s what I call real customer service."',
                'testimonial_6_avatar'   => 'VR',
                'testimonial_6_name'     => 'Vikram Rathore',
                'testimonial_6_location' => 'Pune',
                'testimonial_6_time'     => '4 days ago',
                // Betting Tips
                'tips_title'    => 'Top 10 <span class="text-gold">Betting Tips</span>',
                'tips_subtitle' => 'Expert strategies to improve your winning chances',
                'tip_1_title'  => 'Analyze Team Form',
                'tip_1_text'   => 'Study recent performances, head-to-head records, and team composition before placing bets.',
                'tip_2_title'  => 'Study Pitch & Weather',
                'tip_2_text'   => 'Pitch conditions and weather play a crucial role in cricket match outcomes.',
                'tip_3_title'  => 'Follow Player Performance',
                'tip_3_text'   => 'Track individual player form, injuries, and match-up statistics.',
                'tip_4_title'  => 'Understand the Odds',
                'tip_4_text'   => 'Learn how odds work and identify value bets for better returns.',
                'tip_5_title'  => 'Start Small',
                'tip_5_text'   => 'Begin with smaller bets and gradually increase as you gain experience.',
                'tip_6_title'  => 'Use Live Betting',
                'tip_6_text'   => 'Take advantage of in-play betting to react to match situations in real-time.',
                'tip_7_title'  => 'Avoid Emotional Betting',
                'tip_7_text'   => "Don't bet on your favorite team just because you support them.",
                'tip_8_title'  => 'Focus on One Market',
                'tip_8_text'   => 'Specialize in one betting market to improve your expertise and win rate.',
                'tip_9_title'  => 'Manage Your Bankroll',
                'tip_9_text'   => 'Set a budget and never bet more than you can afford to lose.',
                'tip_10_title' => 'Choose Trusted Platforms',
                'tip_10_text'  => 'Always use verified and trusted betting ID providers like Radhey.',
                // CTA Section
                'cta_title'    => 'Ready to Get Your <span class="text-gold">Betting ID</span>?',
                'cta_text'     => 'Join 2 million+ players who trust Radhey Book. Get instant activation via WhatsApp with Welcome Bonus!',
                'cta_btn_text' => 'Get Your ID on WhatsApp',
                // Blog Section
                'blog_title'    => 'Latest <span class="text-gold">News & Tips</span>',
                'blog_subtitle' => 'Stay updated with the latest cricket news and betting tips',
                // FAQ Section
                'faq_title'    => 'Frequently Asked <span class="text-gold">Questions</span>',
                'faq_subtitle' => "Got questions? We've got answers.",
                'faq_1_q'  => 'What is Radhey Book?',
                'faq_1_a'  => 'Radhey Book is India\'s leading online betting ID provider. We provide verified betting IDs for cricket, casino, tennis, football, and more. Our IDs give you access to top exchange platforms with competitive odds and instant withdrawals.',
                'faq_2_q'  => 'How can I get a Betting ID from Radhey?',
                'faq_2_a'  => 'Getting a betting ID from Radhey is simple! Just contact us on WhatsApp at +91 79017 12857, share your name and preferred platform, and we\'ll create your verified betting ID within minutes. It\'s that easy!',
                'faq_3_q'  => 'Is Radhey Book safe and trusted?',
                'faq_3_a'  => 'Absolutely! Radhey Book has been serving over 2 million players for 7+ years. We use encrypted transactions, provide instant withdrawals, and offer 24/7 customer support. Your safety is our top priority.',
                'faq_4_q'  => 'What sports can I bet on?',
                'faq_4_a'  => 'You can bet on Cricket (IPL, International), Casino games (Teen Patti, Roulette, Blackjack), Tennis (Grand Slams, ATP), Football (Premier League, La Liga), and Aviator game. We cover all major sports and casino events.',
                'faq_5_q'  => 'How fast are withdrawals?',
                'faq_5_a'  => 'We offer instant withdrawals within 5 minutes! Your winnings are transferred directly to your bank account via UPI, GPay, Paytm, PhonePe, or bank transfer. No hidden charges or delays.',
                'faq_6_q'  => 'What is the minimum deposit and withdrawal?',
                'faq_6_a'  => 'The minimum deposit is Rs. 100 and the minimum withdrawal is Rs. 500. There are no maximum limits on deposits or withdrawals.',
                'faq_7_q'  => 'Do you offer a demo ID?',
                'faq_7_a'  => 'Yes! We offer free demo IDs so you can try our platforms before depositing real money. Contact us on WhatsApp to get your free demo ID instantly.',
                'faq_8_q'  => 'What exchange platforms do you support?',
                'faq_8_a'  => 'We provide IDs for all major exchange platforms including Lord Exchange, Lotus Exchange, Fairplay 369, and Sky Exchange.',
                'faq_9_q'  => 'Is there a welcome bonus?',
                'faq_9_a'  => "Yes! New players get a Welcome Bonus on their first deposit. Contact us on WhatsApp to claim your bonus.",
                'faq_10_q' => 'What is the Freeze Button feature?',
                'faq_10_a' => 'The Freeze Button is a unique security feature that allows you to instantly freeze your betting account anytime. This ensures your funds are always safe and secure. You can unfreeze your account by contacting our support team.',
                'faq_11_q' => 'How does live betting work?',
                'faq_11_a' => 'Live betting (in-play betting) allows you to place bets during an ongoing match. The odds change in real-time based on match situations. You can bet on various markets like next wicket, runs in over, match winner, and more.',
                'faq_12_q' => 'Can I bet on IPL matches?',
                'faq_12_a' => 'Yes! IPL betting is one of our most popular services. We offer all IPL betting markets including match winner, top batsman, top bowler, session betting, fancy betting, and more with the best odds in the market.',
                'faq_13_q' => 'Is online betting legal in India?',
                'faq_13_a' => 'Online betting laws vary by state in India. We recommend checking your local regulations. Radhey Book operates through licensed international platforms and provides access to regulated betting exchanges.',
                'faq_14_q' => 'What payment methods are accepted?',
                'faq_14_a' => 'We accept all major payment methods including UPI, Google Pay, Paytm, PhonePe, and direct bank transfers. All transactions are 100% secure and encrypted.',
                'faq_15_q' => 'How do I contact customer support?',
                'faq_15_a' => 'You can reach our 24/7 customer support team via WhatsApp at +91 79017 12857 or email at support@radheybook.com. We respond to all queries within minutes.',
                // WhatsApp
                'whatsapp_number' => '917901712857',
            ],
        ];

        return $defaults[$slug] ?? [];
    }

    private function getSectionDefinitions(string $slug): array
    {
        $heroCommon = [
            'hero_badge' => ['label' => 'Hero Badge Text', 'type' => 'text'],
            'hero_title' => ['label' => 'Hero Title (HTML allowed)', 'type' => 'text'],
            'hero_subtitle' => ['label' => 'Hero Subtitle', 'type' => 'textarea'],
        ];

        $definitions = [
            'home' => [
                // --- Section Visibility (1 = show, 0 = hide) ---
                'show_trust_badges'   => ['label' => 'Show Trust Badges', 'type' => 'toggle'],
                'show_live_odds'      => ['label' => 'Show Live Odds', 'type' => 'toggle'],
                'show_get_id'         => ['label' => 'Show Get Your ID', 'type' => 'toggle'],
                'show_bonus'          => ['label' => 'Show Bonus Timer', 'type' => 'toggle'],
                'show_why_choose'     => ['label' => 'Show Why Choose Us', 'type' => 'toggle'],
                'show_how_it_works'   => ['label' => 'Show How It Works', 'type' => 'toggle'],
                'show_services'       => ['label' => 'Show Our Services', 'type' => 'toggle'],
                'show_platforms'      => ['label' => 'Show Exchange Platforms', 'type' => 'toggle'],
                'show_customer_care'  => ['label' => 'Show Customer Care', 'type' => 'toggle'],
                'show_comparison'     => ['label' => 'Show Comparison Table', 'type' => 'toggle'],
                'show_payments'       => ['label' => 'Show Payment Methods', 'type' => 'toggle'],
                'show_proof'          => ['label' => 'Show Withdrawal Proof', 'type' => 'toggle'],
                'show_testimonials'   => ['label' => 'Show Testimonials', 'type' => 'toggle'],
                'show_tips'           => ['label' => 'Show Betting Tips', 'type' => 'toggle'],
                'show_cta'            => ['label' => 'Show CTA Section', 'type' => 'toggle'],
                'show_blog'           => ['label' => 'Show Blog Section', 'type' => 'toggle'],
                'show_faq'            => ['label' => 'Show FAQ Section', 'type' => 'toggle'],

                // --- Hero Slide 1 ---
                'hero_slide_1_badge'      => ['label' => 'Slide 1 - Badge Text', 'type' => 'text'],
                'hero_slide_1_title'      => ['label' => 'Slide 1 - Title (HTML)', 'type' => 'text'],
                'hero_slide_1_subtitle'   => ['label' => 'Slide 1 - Subtitle', 'type' => 'textarea'],
                'hero_slide_1_btn1_text'  => ['label' => 'Slide 1 - Button 1 Text', 'type' => 'text'],
                'hero_slide_1_btn2_text'  => ['label' => 'Slide 1 - Button 2 Text', 'type' => 'text'],
                'hero_slide_1_btn2_link'  => ['label' => 'Slide 1 - Button 2 Link', 'type' => 'text'],

                // --- Hero Slide 2 ---
                'hero_slide_2_badge'      => ['label' => 'Slide 2 - Badge Text', 'type' => 'text'],
                'hero_slide_2_title'      => ['label' => 'Slide 2 - Title (HTML)', 'type' => 'text'],
                'hero_slide_2_subtitle'   => ['label' => 'Slide 2 - Subtitle', 'type' => 'textarea'],
                'hero_slide_2_btn1_text'  => ['label' => 'Slide 2 - Button 1 Text', 'type' => 'text'],
                'hero_slide_2_btn2_text'  => ['label' => 'Slide 2 - Button 2 Text', 'type' => 'text'],
                'hero_slide_2_btn2_link'  => ['label' => 'Slide 2 - Button 2 Link', 'type' => 'text'],

                // --- Hero Slide 3 ---
                'hero_slide_3_badge'      => ['label' => 'Slide 3 - Badge Text', 'type' => 'text'],
                'hero_slide_3_title'      => ['label' => 'Slide 3 - Title (HTML)', 'type' => 'text'],
                'hero_slide_3_subtitle'   => ['label' => 'Slide 3 - Subtitle', 'type' => 'textarea'],
                'hero_slide_3_btn1_text'  => ['label' => 'Slide 3 - Button 1 Text', 'type' => 'text'],
                'hero_slide_3_btn2_text'  => ['label' => 'Slide 3 - Button 2 Text', 'type' => 'text'],
                'hero_slide_3_btn2_link'  => ['label' => 'Slide 3 - Button 2 Link', 'type' => 'text'],

                // --- Stats Bar ---
                'stats_1_number' => ['label' => 'Stats 1 - Number', 'type' => 'text'],
                'stats_1_label'  => ['label' => 'Stats 1 - Label', 'type' => 'text'],
                'stats_2_number' => ['label' => 'Stats 2 - Number', 'type' => 'text'],
                'stats_2_label'  => ['label' => 'Stats 2 - Label', 'type' => 'text'],
                'stats_3_number' => ['label' => 'Stats 3 - Number', 'type' => 'text'],
                'stats_3_label'  => ['label' => 'Stats 3 - Label', 'type' => 'text'],
                'stats_4_number' => ['label' => 'Stats 4 - Number', 'type' => 'text'],
                'stats_4_label'  => ['label' => 'Stats 4 - Label', 'type' => 'text'],

                // --- Trust Badges ---
                'trust_1_title' => ['label' => 'Trust Badge 1 - Title', 'type' => 'text'],
                'trust_1_text'  => ['label' => 'Trust Badge 1 - Text', 'type' => 'text'],
                'trust_2_title' => ['label' => 'Trust Badge 2 - Title', 'type' => 'text'],
                'trust_2_text'  => ['label' => 'Trust Badge 2 - Text', 'type' => 'text'],
                'trust_3_title' => ['label' => 'Trust Badge 3 - Title', 'type' => 'text'],
                'trust_3_text'  => ['label' => 'Trust Badge 3 - Text', 'type' => 'text'],
                'trust_4_title' => ['label' => 'Trust Badge 4 - Title', 'type' => 'text'],
                'trust_4_text'  => ['label' => 'Trust Badge 4 - Text', 'type' => 'text'],
                'trust_5_title' => ['label' => 'Trust Badge 5 - Title', 'type' => 'text'],
                'trust_5_text'  => ['label' => 'Trust Badge 5 - Text', 'type' => 'text'],

                // --- Get Your ID Section ---
                'get_id_title'        => ['label' => 'Get ID - Section Title (HTML)', 'type' => 'text'],
                'get_id_subtitle'     => ['label' => 'Get ID - Section Subtitle', 'type' => 'text'],
                'get_id_step_1_title' => ['label' => 'Get ID - Step 1 Title', 'type' => 'text'],
                'get_id_step_1_text'  => ['label' => 'Get ID - Step 1 Text', 'type' => 'textarea'],
                'get_id_step_2_title' => ['label' => 'Get ID - Step 2 Title', 'type' => 'text'],
                'get_id_step_2_text'  => ['label' => 'Get ID - Step 2 Text', 'type' => 'textarea'],
                'get_id_step_3_title' => ['label' => 'Get ID - Step 3 Title', 'type' => 'text'],
                'get_id_step_3_text'  => ['label' => 'Get ID - Step 3 Text', 'type' => 'textarea'],
                'get_id_step_4_title' => ['label' => 'Get ID - Step 4 Title', 'type' => 'text'],
                'get_id_step_4_text'  => ['label' => 'Get ID - Step 4 Text', 'type' => 'textarea'],
                'get_id_btn_text'     => ['label' => 'Get ID - Button Text', 'type' => 'text'],

                // --- Bonus Section ---
                'bonus_badge'    => ['label' => 'Bonus - Badge Text', 'type' => 'text'],
                'bonus_title'    => ['label' => 'Bonus - Title (HTML)', 'type' => 'text'],
                'bonus_text'     => ['label' => 'Bonus - Description', 'type' => 'textarea'],
                'bonus_btn_text' => ['label' => 'Bonus - Button Text', 'type' => 'text'],

                // --- Why Choose Us ---
                'why_choose_title'    => ['label' => 'Why Choose - Section Title (HTML)', 'type' => 'text'],
                'why_choose_subtitle' => ['label' => 'Why Choose - Section Subtitle', 'type' => 'text'],
                'why_1_title' => ['label' => 'Why Choose 1 - Title', 'type' => 'text'],
                'why_1_text'  => ['label' => 'Why Choose 1 - Text', 'type' => 'textarea'],
                'why_2_title' => ['label' => 'Why Choose 2 - Title', 'type' => 'text'],
                'why_2_text'  => ['label' => 'Why Choose 2 - Text', 'type' => 'textarea'],
                'why_3_title' => ['label' => 'Why Choose 3 - Title', 'type' => 'text'],
                'why_3_text'  => ['label' => 'Why Choose 3 - Text', 'type' => 'textarea'],
                'why_4_title' => ['label' => 'Why Choose 4 - Title', 'type' => 'text'],
                'why_4_text'  => ['label' => 'Why Choose 4 - Text', 'type' => 'textarea'],
                'why_5_title' => ['label' => 'Why Choose 5 - Title', 'type' => 'text'],
                'why_5_text'  => ['label' => 'Why Choose 5 - Text', 'type' => 'textarea'],
                'why_6_title' => ['label' => 'Why Choose 6 - Title', 'type' => 'text'],
                'why_6_text'  => ['label' => 'Why Choose 6 - Text', 'type' => 'textarea'],

                // --- How It Works ---
                'how_it_works_title'    => ['label' => 'How It Works - Section Title (HTML)', 'type' => 'text'],
                'how_it_works_subtitle' => ['label' => 'How It Works - Section Subtitle', 'type' => 'text'],
                'how_step_1_title' => ['label' => 'How It Works - Step 1 Title', 'type' => 'text'],
                'how_step_1_text'  => ['label' => 'How It Works - Step 1 Text', 'type' => 'textarea'],
                'how_step_2_title' => ['label' => 'How It Works - Step 2 Title', 'type' => 'text'],
                'how_step_2_text'  => ['label' => 'How It Works - Step 2 Text', 'type' => 'textarea'],
                'how_step_3_title' => ['label' => 'How It Works - Step 3 Title', 'type' => 'text'],
                'how_step_3_text'  => ['label' => 'How It Works - Step 3 Text', 'type' => 'textarea'],
                'how_step_4_title' => ['label' => 'How It Works - Step 4 Title', 'type' => 'text'],
                'how_step_4_text'  => ['label' => 'How It Works - Step 4 Text', 'type' => 'textarea'],
                'how_step_5_title' => ['label' => 'How It Works - Step 5 Title', 'type' => 'text'],
                'how_step_5_text'  => ['label' => 'How It Works - Step 5 Text', 'type' => 'textarea'],
                'how_step_6_title' => ['label' => 'How It Works - Step 6 Title', 'type' => 'text'],
                'how_step_6_text'  => ['label' => 'How It Works - Step 6 Text', 'type' => 'textarea'],

                // --- Services Section ---
                'services_title'    => ['label' => 'Services - Section Title (HTML)', 'type' => 'text'],
                'services_subtitle' => ['label' => 'Services - Section Subtitle', 'type' => 'text'],
                'service_link_text' => ['label' => 'Services - "Learn More" Link Text', 'type' => 'text'],
                'service_1_title'   => ['label' => 'Service 1 (Cricket) - Title', 'type' => 'text'],
                'service_1_text'    => ['label' => 'Service 1 (Cricket) - Text', 'type' => 'textarea'],
                'service_2_title'   => ['label' => 'Service 2 (Tennis) - Title', 'type' => 'text'],
                'service_2_text'    => ['label' => 'Service 2 (Tennis) - Text', 'type' => 'textarea'],
                'service_3_title'   => ['label' => 'Service 3 (Casino) - Title', 'type' => 'text'],
                'service_3_text'    => ['label' => 'Service 3 (Casino) - Text', 'type' => 'textarea'],
                'service_4_title'   => ['label' => 'Service 4 (Football) - Title', 'type' => 'text'],
                'service_4_text'    => ['label' => 'Service 4 (Football) - Text', 'type' => 'textarea'],
                'service_5_title'   => ['label' => 'Service 5 (Aviator) - Title', 'type' => 'text'],
                'service_5_text'    => ['label' => 'Service 5 (Aviator) - Text', 'type' => 'textarea'],

                // --- Exchange Platforms ---
                'platforms_title'    => ['label' => 'Platforms - Section Title (HTML)', 'type' => 'text'],
                'platforms_subtitle' => ['label' => 'Platforms - Section Subtitle', 'type' => 'text'],
                'platform_1_title'   => ['label' => 'Platform 1 (Lord Exchange) - Title', 'type' => 'text'],
                'platform_1_text'    => ['label' => 'Platform 1 (Lord Exchange) - Text', 'type' => 'textarea'],
                'platform_1_badge'   => ['label' => 'Platform 1 (Lord Exchange) - Badge', 'type' => 'text'],
                'platform_2_title'   => ['label' => 'Platform 2 (Lotus Exchange) - Title', 'type' => 'text'],
                'platform_2_text'    => ['label' => 'Platform 2 (Lotus Exchange) - Text', 'type' => 'textarea'],
                'platform_2_badge'   => ['label' => 'Platform 2 (Lotus Exchange) - Badge', 'type' => 'text'],
                'platform_3_title'   => ['label' => 'Platform 3 (Sky Exchange) - Title', 'type' => 'text'],
                'platform_3_text'    => ['label' => 'Platform 3 (Sky Exchange) - Text', 'type' => 'textarea'],
                'platform_3_badge'   => ['label' => 'Platform 3 (Sky Exchange) - Badge', 'type' => 'text'],
                'platform_4_title'   => ['label' => 'Platform 4 (Fairplay) - Title', 'type' => 'text'],
                'platform_4_text'    => ['label' => 'Platform 4 (Fairplay) - Text', 'type' => 'textarea'],
                'platform_4_badge'   => ['label' => 'Platform 4 (Fairplay) - Badge', 'type' => 'text'],
                'platform_5_title'   => ['label' => 'Platform 5 (Mahadev Book) - Title', 'type' => 'text'],
                'platform_5_text'    => ['label' => 'Platform 5 (Mahadev Book) - Text', 'type' => 'textarea'],
                'platform_5_badge'   => ['label' => 'Platform 5 (Mahadev Book) - Badge', 'type' => 'text'],
                'platform_6_title'   => ['label' => 'Platform 6 (Reddy Anna) - Title', 'type' => 'text'],
                'platform_6_text'    => ['label' => 'Platform 6 (Reddy Anna) - Text', 'type' => 'textarea'],
                'platform_6_badge'   => ['label' => 'Platform 6 (Reddy Anna) - Badge', 'type' => 'text'],

                // --- Customer Care ---
                'freeze_title'        => ['label' => 'Freeze Card - Title', 'type' => 'text'],
                'freeze_text'         => ['label' => 'Freeze Card - Text', 'type' => 'textarea'],
                'freeze_btn_text'     => ['label' => 'Freeze Card - Button Text', 'type' => 'text'],
                'care_title'          => ['label' => 'Customer Care - Title', 'type' => 'text'],
                'care_text'           => ['label' => 'Customer Care - Text', 'type' => 'textarea'],
                'care_phone'          => ['label' => 'Customer Care - Phone Number', 'type' => 'text'],
                'care_email'          => ['label' => 'Customer Care - Email', 'type' => 'text'],
                'care_support_btn_text' => ['label' => 'Customer Care - Support Button Text', 'type' => 'text'],

                // --- Comparison Table ---
                'comparison_title'    => ['label' => 'Comparison - Section Title (HTML)', 'type' => 'text'],
                'comparison_subtitle' => ['label' => 'Comparison - Section Subtitle', 'type' => 'text'],
                'comp_row_1'  => ['label' => 'Comparison Row 1 Feature', 'type' => 'text'],
                'comp_row_2'  => ['label' => 'Comparison Row 2 Feature', 'type' => 'text'],
                'comp_row_3'  => ['label' => 'Comparison Row 3 Feature', 'type' => 'text'],
                'comp_row_4'  => ['label' => 'Comparison Row 4 Feature', 'type' => 'text'],
                'comp_row_5'  => ['label' => 'Comparison Row 5 Feature', 'type' => 'text'],
                'comp_row_6'  => ['label' => 'Comparison Row 6 Feature', 'type' => 'text'],
                'comp_row_7'  => ['label' => 'Comparison Row 7 Feature', 'type' => 'text'],
                'comp_row_8'  => ['label' => 'Comparison Row 8 Feature', 'type' => 'text'],
                'comp_row_9'  => ['label' => 'Comparison Row 9 Feature', 'type' => 'text'],
                'comp_row_10' => ['label' => 'Comparison Row 10 Feature', 'type' => 'text'],

                // --- Payment Methods ---
                'payments_title'    => ['label' => 'Payments - Section Title (HTML)', 'type' => 'text'],
                'payments_subtitle' => ['label' => 'Payments - Section Subtitle', 'type' => 'text'],
                'deposit_title'     => ['label' => 'Deposits Card - Title', 'type' => 'text'],
                'deposit_item_1'    => ['label' => 'Deposits - Item 1', 'type' => 'text'],
                'deposit_item_2'    => ['label' => 'Deposits - Item 2', 'type' => 'text'],
                'deposit_item_3'    => ['label' => 'Deposits - Item 3', 'type' => 'text'],
                'deposit_item_4'    => ['label' => 'Deposits - Item 4', 'type' => 'text'],
                'deposit_item_5'    => ['label' => 'Deposits - Item 5', 'type' => 'text'],
                'withdraw_title'    => ['label' => 'Withdrawals Card - Title', 'type' => 'text'],
                'withdraw_item_1'   => ['label' => 'Withdrawals - Item 1', 'type' => 'text'],
                'withdraw_item_2'   => ['label' => 'Withdrawals - Item 2', 'type' => 'text'],
                'withdraw_item_3'   => ['label' => 'Withdrawals - Item 3', 'type' => 'text'],
                'withdraw_item_4'   => ['label' => 'Withdrawals - Item 4', 'type' => 'text'],
                'withdraw_item_5'   => ['label' => 'Withdrawals - Item 5', 'type' => 'text'],

                // --- Withdrawal Proof ---
                'proof_title'    => ['label' => 'Proof - Section Title (HTML)', 'type' => 'text'],
                'proof_subtitle' => ['label' => 'Proof - Section Subtitle', 'type' => 'text'],
                'proof_1_amount' => ['label' => 'Proof 1 - Amount', 'type' => 'text'],
                'proof_1_name'   => ['label' => 'Proof 1 - Name', 'type' => 'text'],
                'proof_1_game'   => ['label' => 'Proof 1 - Game/Category', 'type' => 'text'],
                'proof_1_time'   => ['label' => 'Proof 1 - Withdrawal Time', 'type' => 'text'],
                'proof_2_amount' => ['label' => 'Proof 2 - Amount', 'type' => 'text'],
                'proof_2_name'   => ['label' => 'Proof 2 - Name', 'type' => 'text'],
                'proof_2_game'   => ['label' => 'Proof 2 - Game/Category', 'type' => 'text'],
                'proof_2_time'   => ['label' => 'Proof 2 - Withdrawal Time', 'type' => 'text'],
                'proof_3_amount' => ['label' => 'Proof 3 - Amount', 'type' => 'text'],
                'proof_3_name'   => ['label' => 'Proof 3 - Name', 'type' => 'text'],
                'proof_3_game'   => ['label' => 'Proof 3 - Game/Category', 'type' => 'text'],
                'proof_3_time'   => ['label' => 'Proof 3 - Withdrawal Time', 'type' => 'text'],
                'proof_4_amount' => ['label' => 'Proof 4 - Amount', 'type' => 'text'],
                'proof_4_name'   => ['label' => 'Proof 4 - Name', 'type' => 'text'],
                'proof_4_game'   => ['label' => 'Proof 4 - Game/Category', 'type' => 'text'],
                'proof_4_time'   => ['label' => 'Proof 4 - Withdrawal Time', 'type' => 'text'],

                // --- Testimonials ---
                'testimonials_title'    => ['label' => 'Testimonials - Section Title (HTML)', 'type' => 'text'],
                'testimonials_subtitle' => ['label' => 'Testimonials - Section Subtitle', 'type' => 'text'],
                'testimonial_1_text'     => ['label' => 'Testimonial 1 - Review Text', 'type' => 'textarea'],
                'testimonial_1_avatar'   => ['label' => 'Testimonial 1 - Avatar Initials', 'type' => 'text'],
                'testimonial_1_name'     => ['label' => 'Testimonial 1 - Name', 'type' => 'text'],
                'testimonial_1_location' => ['label' => 'Testimonial 1 - Location', 'type' => 'text'],
                'testimonial_1_time'     => ['label' => 'Testimonial 1 - Time', 'type' => 'text'],
                'testimonial_2_text'     => ['label' => 'Testimonial 2 - Review Text', 'type' => 'textarea'],
                'testimonial_2_avatar'   => ['label' => 'Testimonial 2 - Avatar Initials', 'type' => 'text'],
                'testimonial_2_name'     => ['label' => 'Testimonial 2 - Name', 'type' => 'text'],
                'testimonial_2_location' => ['label' => 'Testimonial 2 - Location', 'type' => 'text'],
                'testimonial_2_time'     => ['label' => 'Testimonial 2 - Time', 'type' => 'text'],
                'testimonial_3_text'     => ['label' => 'Testimonial 3 - Review Text', 'type' => 'textarea'],
                'testimonial_3_avatar'   => ['label' => 'Testimonial 3 - Avatar Initials', 'type' => 'text'],
                'testimonial_3_name'     => ['label' => 'Testimonial 3 - Name', 'type' => 'text'],
                'testimonial_3_location' => ['label' => 'Testimonial 3 - Location', 'type' => 'text'],
                'testimonial_3_time'     => ['label' => 'Testimonial 3 - Time', 'type' => 'text'],
                'testimonial_4_text'     => ['label' => 'Testimonial 4 - Review Text', 'type' => 'textarea'],
                'testimonial_4_avatar'   => ['label' => 'Testimonial 4 - Avatar Initials', 'type' => 'text'],
                'testimonial_4_name'     => ['label' => 'Testimonial 4 - Name', 'type' => 'text'],
                'testimonial_4_location' => ['label' => 'Testimonial 4 - Location', 'type' => 'text'],
                'testimonial_4_time'     => ['label' => 'Testimonial 4 - Time', 'type' => 'text'],
                'testimonial_5_text'     => ['label' => 'Testimonial 5 - Review Text', 'type' => 'textarea'],
                'testimonial_5_avatar'   => ['label' => 'Testimonial 5 - Avatar Initials', 'type' => 'text'],
                'testimonial_5_name'     => ['label' => 'Testimonial 5 - Name', 'type' => 'text'],
                'testimonial_5_location' => ['label' => 'Testimonial 5 - Location', 'type' => 'text'],
                'testimonial_5_time'     => ['label' => 'Testimonial 5 - Time', 'type' => 'text'],
                'testimonial_6_text'     => ['label' => 'Testimonial 6 - Review Text', 'type' => 'textarea'],
                'testimonial_6_avatar'   => ['label' => 'Testimonial 6 - Avatar Initials', 'type' => 'text'],
                'testimonial_6_name'     => ['label' => 'Testimonial 6 - Name', 'type' => 'text'],
                'testimonial_6_location' => ['label' => 'Testimonial 6 - Location', 'type' => 'text'],
                'testimonial_6_time'     => ['label' => 'Testimonial 6 - Time', 'type' => 'text'],

                // --- Betting Tips ---
                'tips_title'     => ['label' => 'Tips - Section Title (HTML)', 'type' => 'text'],
                'tips_subtitle'  => ['label' => 'Tips - Section Subtitle', 'type' => 'text'],
                'tip_1_title'  => ['label' => 'Tip 1 - Title', 'type' => 'text'],
                'tip_1_text'   => ['label' => 'Tip 1 - Text', 'type' => 'textarea'],
                'tip_2_title'  => ['label' => 'Tip 2 - Title', 'type' => 'text'],
                'tip_2_text'   => ['label' => 'Tip 2 - Text', 'type' => 'textarea'],
                'tip_3_title'  => ['label' => 'Tip 3 - Title', 'type' => 'text'],
                'tip_3_text'   => ['label' => 'Tip 3 - Text', 'type' => 'textarea'],
                'tip_4_title'  => ['label' => 'Tip 4 - Title', 'type' => 'text'],
                'tip_4_text'   => ['label' => 'Tip 4 - Text', 'type' => 'textarea'],
                'tip_5_title'  => ['label' => 'Tip 5 - Title', 'type' => 'text'],
                'tip_5_text'   => ['label' => 'Tip 5 - Text', 'type' => 'textarea'],
                'tip_6_title'  => ['label' => 'Tip 6 - Title', 'type' => 'text'],
                'tip_6_text'   => ['label' => 'Tip 6 - Text', 'type' => 'textarea'],
                'tip_7_title'  => ['label' => 'Tip 7 - Title', 'type' => 'text'],
                'tip_7_text'   => ['label' => 'Tip 7 - Text', 'type' => 'textarea'],
                'tip_8_title'  => ['label' => 'Tip 8 - Title', 'type' => 'text'],
                'tip_8_text'   => ['label' => 'Tip 8 - Text', 'type' => 'textarea'],
                'tip_9_title'  => ['label' => 'Tip 9 - Title', 'type' => 'text'],
                'tip_9_text'   => ['label' => 'Tip 9 - Text', 'type' => 'textarea'],
                'tip_10_title' => ['label' => 'Tip 10 - Title', 'type' => 'text'],
                'tip_10_text'  => ['label' => 'Tip 10 - Text', 'type' => 'textarea'],

                // --- CTA Section ---
                'cta_title'    => ['label' => 'CTA - Title (HTML)', 'type' => 'text'],
                'cta_text'     => ['label' => 'CTA - Description', 'type' => 'textarea'],
                'cta_btn_text' => ['label' => 'CTA - Button Text', 'type' => 'text'],

                // --- Blog Section ---
                'blog_title'    => ['label' => 'Blog - Section Title (HTML)', 'type' => 'text'],
                'blog_subtitle' => ['label' => 'Blog - Section Subtitle', 'type' => 'text'],

                // --- FAQ Section ---
                'faq_title'    => ['label' => 'FAQ - Section Title (HTML)', 'type' => 'text'],
                'faq_subtitle' => ['label' => 'FAQ - Section Subtitle', 'type' => 'text'],
                'faq_1_q'  => ['label' => 'FAQ 1 - Question', 'type' => 'text'],
                'faq_1_a'  => ['label' => 'FAQ 1 - Answer', 'type' => 'textarea'],
                'faq_2_q'  => ['label' => 'FAQ 2 - Question', 'type' => 'text'],
                'faq_2_a'  => ['label' => 'FAQ 2 - Answer', 'type' => 'textarea'],
                'faq_3_q'  => ['label' => 'FAQ 3 - Question', 'type' => 'text'],
                'faq_3_a'  => ['label' => 'FAQ 3 - Answer', 'type' => 'textarea'],
                'faq_4_q'  => ['label' => 'FAQ 4 - Question', 'type' => 'text'],
                'faq_4_a'  => ['label' => 'FAQ 4 - Answer', 'type' => 'textarea'],
                'faq_5_q'  => ['label' => 'FAQ 5 - Question', 'type' => 'text'],
                'faq_5_a'  => ['label' => 'FAQ 5 - Answer', 'type' => 'textarea'],
                'faq_6_q'  => ['label' => 'FAQ 6 - Question', 'type' => 'text'],
                'faq_6_a'  => ['label' => 'FAQ 6 - Answer', 'type' => 'textarea'],
                'faq_7_q'  => ['label' => 'FAQ 7 - Question', 'type' => 'text'],
                'faq_7_a'  => ['label' => 'FAQ 7 - Answer', 'type' => 'textarea'],
                'faq_8_q'  => ['label' => 'FAQ 8 - Question', 'type' => 'text'],
                'faq_8_a'  => ['label' => 'FAQ 8 - Answer', 'type' => 'textarea'],
                'faq_9_q'  => ['label' => 'FAQ 9 - Question', 'type' => 'text'],
                'faq_9_a'  => ['label' => 'FAQ 9 - Answer', 'type' => 'textarea'],
                'faq_10_q' => ['label' => 'FAQ 10 - Question', 'type' => 'text'],
                'faq_10_a' => ['label' => 'FAQ 10 - Answer', 'type' => 'textarea'],
                'faq_11_q' => ['label' => 'FAQ 11 - Question', 'type' => 'text'],
                'faq_11_a' => ['label' => 'FAQ 11 - Answer', 'type' => 'textarea'],
                'faq_12_q' => ['label' => 'FAQ 12 - Question', 'type' => 'text'],
                'faq_12_a' => ['label' => 'FAQ 12 - Answer', 'type' => 'textarea'],
                'faq_13_q' => ['label' => 'FAQ 13 - Question', 'type' => 'text'],
                'faq_13_a' => ['label' => 'FAQ 13 - Answer', 'type' => 'textarea'],
                'faq_14_q' => ['label' => 'FAQ 14 - Question', 'type' => 'text'],
                'faq_14_a' => ['label' => 'FAQ 14 - Answer', 'type' => 'textarea'],
                'faq_15_q' => ['label' => 'FAQ 15 - Question', 'type' => 'text'],
                'faq_15_a' => ['label' => 'FAQ 15 - Answer', 'type' => 'textarea'],

                // --- WhatsApp Number ---
                'whatsapp_number' => ['label' => 'WhatsApp Number (with country code, no +)', 'type' => 'text'],
            ],
        ];

        // Always run blade auto-discovery so the admin form shows EVERY field
        // the page actually uses, not just a hand-curated subset. Hardcoded
        // definitions (when present) take precedence — they have nicer labels
        // and the right field-type/grouping. Any field used by the blade but
        // missing from the hardcoded list is appended via auto-discovery.
        $discovered = $this->discoverSectionDefinitions($slug);

        if (isset($definitions[$slug])) {
            return array_merge($discovered, $definitions[$slug]);
        }

        return $discovered;
    }

    /**
     * Scan a page's blade file for $page->section('key', ...) calls
     * and auto-generate admin field definitions from them.
     */
    private function discoverSectionDefinitions(string $slug): array
    {
        // Map slugs to blade view filenames. Most slugs map 1:1 to a blade
        // of the same name (so no entry needed). Only list the EXCEPTIONS.
        $viewMap = [
            'privacy-policy'       => 'privacy',
            'terms-and-conditions' => 'terms',
            'fairplay-369'         => 'fairplay',
            'tennis-betting-id'    => 'tennis',
            'football-betting-id'  => 'football',
        ];

        $viewFile = $viewMap[$slug] ?? $slug;
        $path = resource_path("views/pages/{$viewFile}.blade.php");

        if (!file_exists($path)) {
            return [];
        }

        $content = file_get_contents($path);

        // Match all $page->section('key', ... ) and $page->raw('key', ... ) calls
        preg_match_all('/\$page->(?:section|raw)\(\s*\'([^\']+)\'/', $content, $matches);

        if (empty($matches[1])) {
            return [];
        }

        $definitions = [];
        $seen = [];

        foreach ($matches[1] as $key) {
            if ($key === 'content_blocks' || isset($seen[$key])) {
                continue;
            }
            $seen[$key] = true;

            // Determine field type from key name
            $type = 'text';
            if (str_contains($key, '_text') || str_contains($key, '_subtitle') || str_ends_with($key, '_a')) {
                $type = 'textarea';
            }
            // Button/link text and short labels stay as single-line text
            if (str_contains($key, '_btn') || str_contains($key, '_link') || str_contains($key, '_label')
                || str_contains($key, '_badge') || str_contains($key, '_time') || str_contains($key, '_amount')
                || str_contains($key, '_number') || str_contains($key, '_name') || str_contains($key, '_email')
                || str_contains($key, '_phone') || str_contains($key, '_location') || str_contains($key, '_avatar')
                || str_contains($key, '_username') || str_contains($key, '_password') || str_contains($key, '_duration')
                || str_ends_with($key, '_q') || str_contains($key, 'contact_text')
            ) {
                $type = 'text';
            }
            if (str_starts_with($key, 'show_')) {
                $type = 'toggle';
            }

            // Generate human-readable label from key
            $label = $this->keyToLabel($key);

            $definitions[$key] = ['label' => $label, 'type' => $type];
        }

        return $definitions;
    }

    /**
     * Cache of blade-extracted defaults keyed by slug to avoid re-parsing
     * the same template multiple times within a single request.
     *
     * @var array<string,array<string,string>>
     */
    private array $bladeDefaultsCache = [];

    /**
     * Parse a page's blade template and extract the second argument of every
     * $page->section('key', 'default') and $page->raw('key', 'default') call.
     * Returns a [key => default] map so the admin form can pre-fill textareas
     * with the actual content the public site renders, even when the slug has
     * no entry in getSectionDefaults().
     */
    private function extractBladeDefaults(string $slug): array
    {
        if (isset($this->bladeDefaultsCache[$slug])) {
            return $this->bladeDefaultsCache[$slug];
        }

        // Same view-file mapping as discoverSectionDefinitions().
        // Most slugs map 1:1 to a blade of the same name; only list exceptions.
        $viewMap = [
            'privacy-policy'       => 'privacy',
            'terms-and-conditions' => 'terms',
            'fairplay-369'         => 'fairplay',
            'tennis-betting-id'    => 'tennis',
            'football-betting-id'  => 'football',
        ];

        $viewFile = $viewMap[$slug] ?? $slug;
        $path     = resource_path("views/pages/{$viewFile}.blade.php");

        if (!file_exists($path)) {
            return $this->bladeDefaultsCache[$slug] = [];
        }

        $content = file_get_contents($path);

        // Match $page->section('key', 'default') OR $page->raw('key', 'default').
        // Default value is captured as a single-quoted PHP string, allowing
        // \' and \\ escape sequences inside.
        $pattern = <<<'REGEX'
~\$page->(?:section|raw)\(\s*'([^']+)'\s*,\s*'((?:[^'\\]|\\.)*)'~s
REGEX;

        preg_match_all($pattern, $content, $matches, PREG_SET_ORDER);

        $defaults = [];
        foreach ($matches as $m) {
            $key = $m[1];
            // Unescape single-quoted PHP string: \' → ', \\ → \
            $default = preg_replace('/\\\\(.)/', '$1', $m[2]);
            // First match wins so we keep the canonical default if a key is
            // referenced in multiple places.
            if (!isset($defaults[$key])) {
                $defaults[$key] = $default;
            }
        }

        return $this->bladeDefaultsCache[$slug] = $defaults;
    }

    /**
     * Convert a section key like "market_1_title" to "Market 1 - Title"
     */
    private function keyToLabel(string $key): string
    {
        // Special prefixes for better grouping labels
        $prefixes = [
            'hero_' => 'Hero',
            'what_is_' => 'What Is',
            'feature_' => 'Feature',
            'features_' => 'Features',
            'market_' => 'Market',
            'markets_' => 'Markets',
            'tournament_' => 'Tournament',
            'tournaments_' => 'Tournaments',
            'league_' => 'League',
            'leagues_' => 'Leagues',
            'tip_' => 'Tip',
            'tips_' => 'Tips',
            'why_' => 'Why Choose',
            'how_' => 'How',
            'faq_' => 'FAQ',
            'cta_' => 'CTA',
            'step_' => 'Step',
            'steps_' => 'Steps',
            'demo_' => 'Demo',
            'proof_' => 'Proof',
            'trust_' => 'Trust',
            'stat_' => 'Stat',
            'stats_' => 'Stats',
            'value_' => 'Value',
            'values_' => 'Values',
            'bonus_' => 'Bonus',
            'game_' => 'Game',
            'games_' => 'Games',
            'live_' => 'Live Casino',
            'bonuses_' => 'Bonuses',
            'platform_' => 'Platform',
            'platforms_' => 'Platforms',
            'req_' => 'Requirement',
            'service_' => 'Service',
            'services_' => 'Services',
            'comp_' => 'Comparison',
            'testimonial_' => 'Testimonial',
            'testimonials_' => 'Testimonials',
            'strategy_' => 'Strategy',
            'strategies_' => 'Strategies',
            'how_works_' => 'How It Works',
            'how_step_' => 'How - Step',
            'benefit_' => 'Benefit',
            'benefits_' => 'Benefits',
            'resource_' => 'Resource',
            'resources_' => 'Resources',
            'exclusion_' => 'Self-Exclusion',
            'warning_' => 'Warning Signs',
            'commitment_' => 'Commitment',
            'security_' => 'Security',
            'method_' => 'Payment Method',
            'methods_' => 'Payment Methods',
            'factor_' => 'Trust Factor',
            'factors_' => 'Trust Factors',
            'contact_' => 'Contact',
            'form_' => 'Form',
            'hours_' => 'Business Hours',
            'map_' => 'Map',
            'payment_' => 'Payment',
            'payments_' => 'Payments',
            'login_' => 'Login',
            'trouble_' => 'Troubleshoot',
            'freeze_' => 'Freeze',
            'care_' => 'Customer Care',
            'comparison_' => 'Comparison',
            'withdraw_' => 'Withdrawal',
            'deposit_' => 'Deposit',
        ];

        // Convert underscored key to readable label
        $label = str_replace('_', ' ', $key);
        $label = ucwords($label);

        // Replace numbered patterns: "Market 1 Title" → "Market 1 - Title"
        $label = preg_replace('/(\d+)\s/', '$1 - ', $label);

        return $label;
    }
}
