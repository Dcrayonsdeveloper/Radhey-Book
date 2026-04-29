<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:2000',
        ]);

        try {
            $toEmail = SiteSetting::get('support_email', 'support@radheybook.com');
            Mail::raw(
                "New contact form submission:\n\nName: {$validated['name']}\nEmail: {$validated['email']}\nPhone: " . ($validated['phone'] ?? 'N/A') . "\nMessage: {$validated['message']}",
                function ($message) use ($validated, $toEmail) {
                    $message->to($toEmail)
                        ->subject('New Contact Form: ' . $validated['name']);
                }
            );
        } catch (\Exception $e) {
            // Mail delivery failure should not block the form submission
        }

        return redirect()->route('contact')->with('success', 'Thank you! Your message has been sent. We will get back to you shortly.');
    }
}
