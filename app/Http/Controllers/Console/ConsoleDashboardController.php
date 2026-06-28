<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;

class ConsoleDashboardController extends Controller
{
    /**
     * Show the CMS dashboard home.
     */
    public function index()
    {
        // Fetch some metrics
        $inquiriesCount = Contact::count();
        $usersCount = User::count();
        
        // Mock data for display purposes
        $postsCount = 124; // Mock posts count for now
        $viewsCount = 15420; // Mock page views count

        // Recent inquiries
        $recentInquiries = Contact::latest()->take(5)->get();

        return view('console.dashboard', compact(
            'inquiriesCount',
            'usersCount',
            'postsCount',
            'viewsCount',
            'recentInquiries'
        ));
    }
}
