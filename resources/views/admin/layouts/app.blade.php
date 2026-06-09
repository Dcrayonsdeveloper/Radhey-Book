<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard') | Radhey Book Admin</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Orbitron:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="admin-wrapper">
        {{-- Sidebar --}}
        <aside class="admin-sidebar" id="adminSidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo">
                    <span class="logo-text">Radhey</span>
                    <span class="logo-sub">Book</span>
                </div>
                <button class="sidebar-close" id="sidebarClose">&times;</button>
            </div>

            <nav class="sidebar-nav">
                <a href="{{ route('admin.dashboard') }}" class="nav-item {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('admin.pages.index') }}" class="nav-item {{ request()->routeIs('admin.pages*') ? 'active' : '' }}">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    <span>Pages</span>
                </a>
                <a href="{{ route('admin.blog.index') }}" class="nav-item {{ request()->routeIs('admin.blog*') ? 'active' : '' }}">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                    <span>Blog Posts</span>
                </a>
                <a href="{{ route('admin.menus.index') }}" class="nav-item {{ request()->routeIs('admin.menus*') ? 'active' : '' }}">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                    <span>Menus</span>
                </a>
                <a href="{{ route('admin.polls.index') }}" class="nav-item {{ request()->routeIs('admin.polls*') ? 'active' : '' }}">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
                    <span>Polls</span>
                </a>
                <a href="{{ route('admin.redirects.index') }}" class="nav-item {{ request()->routeIs('admin.redirects*') ? 'active' : '' }}">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 3 21 3 21 8"/><line x1="4" y1="20" x2="21" y2="3"/><polyline points="21 16 21 21 16 21"/><line x1="15" y1="15" x2="21" y2="21"/><line x1="4" y1="4" x2="9" y2="9"/></svg>
                    <span>Redirects</span>
                </a>
                <a href="{{ route('admin.settings') }}" class="nav-item {{ request()->routeIs('admin.settings*') ? 'active' : '' }}">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 008 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 003.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 8a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 3.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0020.32 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z"/></svg>
                    <span>Settings</span>
                </a>
                <a href="{{ route('admin.users.index') }}" class="nav-item {{ request()->routeIs('admin.users*') ? 'active' : '' }}">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4-4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
                    <span>Users</span>
                </a>

                <div class="nav-divider"></div>

                <a href="{{ route('home') }}" class="nav-item" target="_blank">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                    <span>View Website</span>
                </a>

                <form method="POST" action="{{ route('admin.logout') }}" class="nav-form">
                    @csrf
                    <button type="submit" class="nav-item nav-logout">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
                        <span>Logout</span>
                    </button>
                </form>
            </nav>
        </aside>

        {{-- Sidebar Overlay --}}
        <div class="sidebar-overlay" id="sidebarOverlay"></div>

        {{-- Main Content --}}
        <div class="admin-main">
            <header class="admin-topbar">
                <button class="topbar-toggle" id="sidebarToggle">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                </button>
                <h1 class="topbar-title">@yield('title', 'Dashboard')</h1>
                <div class="topbar-right">
                    <span class="topbar-user">{{ auth()->user()->name }}</span>
                </div>
            </header>

            <main class="admin-content">
                @if(session('success'))
                    <div class="alert alert-success">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-error">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
                        {{ session('error') }}
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('adminSidebar');
        const overlay = document.getElementById('sidebarOverlay');
        const toggle = document.getElementById('sidebarToggle');
        const closeBtn = document.getElementById('sidebarClose');

        function openSidebar() {
            sidebar.classList.add('open');
            overlay.classList.add('active');
        }
        function closeSidebar() {
            sidebar.classList.remove('open');
            overlay.classList.remove('active');
        }

        toggle.addEventListener('click', function() {
            sidebar.classList.contains('open') ? closeSidebar() : openSidebar();
        });
        closeBtn.addEventListener('click', closeSidebar);
        overlay.addEventListener('click', closeSidebar);
    </script>
    @yield('scripts')
    <script src="{{ asset('js/admin-page-blocks.js') }}?v={{ filemtime(public_path('js/admin-page-blocks.js')) }}"></script>
    <script src="{{ asset('js/admin-panel-sort.js') }}?v={{ filemtime(public_path('js/admin-panel-sort.js')) }}"></script>
</body>
</html>
