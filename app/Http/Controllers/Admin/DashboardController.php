<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Page;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'totalPosts' => BlogPost::count(),
            'publishedPosts' => BlogPost::where('status', 'published')->count(),
            'totalUsers' => User::count(),
            'totalPages' => Page::count(),
            'recentPosts' => BlogPost::latest()->take(5)->get(),
        ];

        return view('admin.dashboard', $data);
    }
}
