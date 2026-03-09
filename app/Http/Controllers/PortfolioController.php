<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    /**
     * Display the home page.
     */
    public function home()
    {
        $featuredProjects = array_slice(config('portfolio.projects'), 0, 3);
        
        return view('portfolio.home', [
            'featuredProjects' => $featuredProjects,
        ]);
    }

    /**
     * Display the about page.
     */
    public function about()
    {
        return view('portfolio.about', [
            'timeline' => config('portfolio.timeline'),
            'skills' => config('portfolio.skills'),
            'stats' => config('portfolio.stats'),
        ]);
    }

    /**
     * Display the projects page.
     */
    public function projects()
    {
        return view('portfolio.projects', [
            'projects' => config('portfolio.projects'),
        ]);
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        return view('portfolio.contact');
    }

    /**
     * Handle contact form submission.
     */
    public function contactSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Store the message in the database
        ContactMessage::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
            'read' => false,
        ]);

        // Example of how to send email:
        // Mail::to(config('portfolio.email'))->send(new ContactFormMail($request->all()));

        return redirect()->back()
            ->with('success', 'Thank you for your message! I will get back to you soon.');
    }
}
