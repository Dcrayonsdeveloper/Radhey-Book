{{-- Per-page JSON-LD schemas (BreadcrumbList, WebPage+Service, FAQPage).
     Only emitted when a $page is available (public Page-driven routes).
     Site-wide WebSite + Organization schemas remain in layouts/app.blade.php. --}}
@isset($page)
    @foreach(\App\Support\SchemaBuilder::forPage($page) as $schema)
        <script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
    @endforeach
@endisset
