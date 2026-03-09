<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Handle the dashboard redirect based on user role.
     */
    public function index()
    {
        if (Auth::user()->isAdmin()) {
            return redirect()->route('admin.dashboard');
        }
        
        return redirect()->route('user.dashboard');
    }

    /**
     * Display the user dashboard.
     */
    public function userDashboard(Request $request)
    {
        // Get portfolio stats from config
        $portfolioConfig = config('portfolio');
        
        $stats = [
            'total_projects' => count($portfolioConfig['projects'] ?? []),
            'total_skills' => count(array_merge(
                $portfolioConfig['skills']['frontend'] ?? [],
                $portfolioConfig['skills']['backend'] ?? [],
                $portfolioConfig['skills']['tools'] ?? []
            )),
            'years_experience' => $portfolioConfig['stats']['years_experience'] ?? '0+',
            'projects_completed' => $portfolioConfig['stats']['projects_completed'] ?? '0+',
            'happy_clients' => $portfolioConfig['stats']['happy_clients'] ?? '0+',
        ];

        // Get site info
        $siteInfo = [
            'name' => $portfolioConfig['name'] ?? 'Sure Profile',
            'title' => $portfolioConfig['title'] ?? 'Full Stack Developer',
            'tagline' => $portfolioConfig['tagline'] ?? '',
            'email' => $portfolioConfig['email'] ?? '',
            'location' => $portfolioConfig['location'] ?? '',
            'availability' => $portfolioConfig['availability'] ?? '',
        ];

        // Get recent skills (first 6)
        $skills = [
            'frontend' => array_slice($portfolioConfig['skills']['frontend'] ?? [], 0, 6),
            'backend' => array_slice($portfolioConfig['skills']['backend'] ?? [], 0, 6),
            'tools' => array_slice($portfolioConfig['skills']['tools'] ?? [], 0, 6),
        ];

        // Get recent projects (first 3)
        $recentProjects = array_slice($portfolioConfig['projects'] ?? [], 0, 3);

        // Get timeline (first 2)
        $recentTimeline = array_slice($portfolioConfig['timeline'] ?? [], 0, 2);

        return view('dashboard', compact('stats', 'siteInfo', 'skills', 'recentProjects', 'recentTimeline'));
    }
}
