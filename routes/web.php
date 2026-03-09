<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

// Portfolio Routes
Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact', [PortfolioController::class, 'contactSubmit'])->name('contact.submit');

// Sitemap Route
Route::get('/sitemap.xml', function () {
    $content = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>' . url('/') . '</loc>
        <lastmod>' . now()->toAtomString() . '</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>' . route('about') . '</loc>
        <lastmod>' . now()->toAtomString() . '</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>' . route('projects') . '</loc>
        <lastmod>' . now()->toAtomString() . '</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>' . route('contact') . '</loc>
        <lastmod>' . now()->toAtomString() . '</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
</urlset>';
    
    return response($content, 200, [
        'Content-Type' => 'application/xml',
        'Cache-Control' => 'public, max-age=86400',
    ]);
})->name('sitemap');

// Dashboard Routes - Redirect based on user role
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// User Dashboard (for regular users)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/user/dashboard', [DashboardController::class, 'userDashboard'])->name('user.dashboard');
});

// Admin Routes
Route::middleware(['auth', 'verified', AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Projects
    Route::get('/projects', [AdminController::class, 'projectsIndex'])->name('projects.index');
    Route::post('/projects', [AdminController::class, 'projectsStore'])->name('projects.store');
    Route::put('/projects/{index}', [AdminController::class, 'projectsUpdate'])->name('projects.update');
    Route::delete('/projects/{index}', [AdminController::class, 'projectsDestroy'])->name('projects.destroy');
    
    // Skills
    Route::get('/skills', [AdminController::class, 'skillsIndex'])->name('skills.index');
    Route::put('/skills', [AdminController::class, 'skillsUpdate'])->name('skills.update');
    
    // Timeline
    Route::get('/timeline', [AdminController::class, 'timelineIndex'])->name('timeline.index');
    Route::post('/timeline', [AdminController::class, 'timelineStore'])->name('timeline.store');
    Route::put('/timeline/{index}', [AdminController::class, 'timelineUpdate'])->name('timeline.update');
    Route::delete('/timeline/{index}', [AdminController::class, 'timelineDestroy'])->name('timeline.destroy');
    
    // Messages
    Route::get('/messages', [AdminController::class, 'messagesIndex'])->name('messages.index');
    Route::get('/messages/{id}', [AdminController::class, 'messagesShow'])->name('messages.show');
    Route::delete('/messages/{id}', [AdminController::class, 'messagesDestroy'])->name('messages.destroy');
    
    // Settings
    Route::get('/settings', [AdminController::class, 'settingsIndex'])->name('settings.index');
    Route::put('/settings', [AdminController::class, 'settingsUpdate'])->name('settings.update');
});

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
