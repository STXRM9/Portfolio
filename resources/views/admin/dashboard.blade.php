@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-gray-900">Dashboard Overview</h2>
            <p class="mt-1 text-sm text-gray-500">Manage your portfolio content and settings</p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('home') }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700 transition-colors">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
                View Live Site
            </a>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Projects -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded:shadow-lg transition-shadow duration-300 transform hover:-translate-y-lg hover-1">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Projects</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">{{ $stats['total_projects'] }}</p>
                        <p class="text-xs text-green-600 mt-1 flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path>
                            </svg>
                            Portfolio items
                        </p>
                    </div>
                    <div class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <a href="{{ route('admin.projects.index') }}" class="text-sm text-indigo-600 hover:text-indigo-900 font-medium flex items-center">
                        Manage Projects 
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Total Skills -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Skills</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">{{ $stats['total_skills'] }}</p>
                        <p class="text-xs text-green-600 mt-1 flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path>
                            </svg>
                            Technologies
                        </p>
                    </div>
                    <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <a href="{{ route('admin.skills.index') }}" class="text-sm text-green-600 hover:text-green-900 font-medium flex items-center">
                        Manage Skills 
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Timeline Entries -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Timeline Entries</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">{{ $stats['total_timeline'] }}</p>
                        <p class="text-xs text-blue-600 mt-1 flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                            </svg>
                            Work history
                        </p>
                    </div>
                    <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <a href="{{ route('admin.timeline.index') }}" class="text-sm text-purple-600 hover:text-purple-900 font-medium flex items-center">
                        Manage Timeline 
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Unread Messages -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Unread Messages</p>
                        <p class="text-3xl font-bold text-gray-900 mt-1">{{ $stats['unread_messages'] }}</p>
                        @if($stats['unread_messages'] > 0)
                            <p class="text-xs text-red-600 mt-1 flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                                Requires attention
                            </p>
                        @else
                            <p class="text-xs text-green-600 mt-1 flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                All caught up
                            </p>
                        @endif
                    </div>
                    <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-100">
                    <a href="{{ route('admin.messages.index') }}" class="text-sm text-red-600 hover:text-red-900 font-medium flex items-center">
                        View Messages 
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions & Recent Messages -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Quick Actions -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-gray-50 to-gray-100">
                <h3 class="text-lg font-semibold text-gray-900 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Quick Actions
                </h3>
            </div>
            <div class="p-6 space-y-3">
                <a href="{{ route('admin.projects.index') }}" class="flex items-center p-4 rounded-lg bg-indigo-50 hover:bg-indigo-100 transition-colors group">
                    <div class="w-10 h-10 bg-indigo-500 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <div class="ml-4 flex-1">
                        <p class="text-sm font-semibold text-gray-900">Add New Project</p>
                        <p class="text-xs text-gray-500">Create a new portfolio item</p>
                    </div>
                    <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>

                <a href="{{ route('admin.skills.index') }}" class="flex items-center p-4 rounded-lg bg-green-50 hover:bg-green-100 transition-colors group">
                    <div class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </div>
                    <div class="ml-4 flex-1">
                        <p class="text-sm font-semibold text-gray-900">Update Skills</p>
                        <p class="text-xs text-gray-500">Modify your skill set</p>
                    </div>
                    <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>

                <a href="{{ route('admin.timeline.index') }}" class="flex items-center p-4 rounded-lg bg-purple-50 hover:bg-purple-100 transition-colors group">
                    <div class="w-10 h-10 bg-purple-500 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <div class="ml-4 flex-1">
                        <p class="text-sm font-semibold text-gray-900">Add Timeline Entry</p>
                        <p class="text-xs text-gray-500">Add work experience</p>
                    </div>
                    <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>

                <a href="{{ route('admin.settings.index') }}" class="flex items-center p-4 rounded-lg bg-yellow-50 hover:bg-yellow-100 transition-colors group">
                    <div class="w-10 h-10 bg-yellow-500 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-4 flex-1">
                        <p class="text-sm font-semibold text-gray-900">Site Settings</p>
                        <p class="text-xs text-gray-500">Configure your portfolio</p>
                    </div>
                    <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Recent Messages -->
        <div class="lg:col-span-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-gray-50 to-gray-100 flex items-center justify-between">
                <h3 class="text-lg font-semibold text-gray-900 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Recent Messages
                    @if($stats['unread_messages'] > 0)
                        <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                            {{ $stats['unread_messages'] }} new
                        </span>
                    @endif
                </h3>
                <a href="{{ route('admin.messages.index') }}" class="text-sm text-indigo-600 hover:text-indigo-900 font-medium">View all →</a>
            </div>
            <div class="p-6">
                @if($recentMessages->count() > 0)
                    <div class="space-y-4">
                        @foreach($recentMessages as $message)
                            <div class="flex items-start p-4 rounded-lg {{ $message->read ? 'bg-gray-50' : 'bg-indigo-50 border border-indigo-100' }} hover:shadow-md transition-shadow">
                                <div class="flex-shrink-0">
                                    <div class="h-12 w-12 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">
                                        <span class="text-white font-semibold text-lg">{{ strtoupper(substr($message->name, 0, 1)) }}</span>
                                    </div>
                                </div>
                                <div class="ml-4 flex-1 min-w-0">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-2">
                                            <p class="text-sm font-semibold text-gray-900">{{ $message->name }}</p>
                                            @if(!$message->read)
                                                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-indigo-100 text-indigo-800">
                                                    New
                                                </span>
                                            @endif
                                        </div>
                                        <p class="text-xs text-gray-500">{{ $message->created_at->diffForHumans() }}</p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 mt-1">{{ $message->subject }}</p>
                                    <p class="text-sm text-gray-500 mt-1 truncate">{{ Str::limit($message->message, 80) }}</p>
                                </div>
                                <div class="ml-4 flex-shrink-0">
                                    <a href="{{ route('admin.messages.show', $message->id) }}" class="p-2 text-gray-400 hover:text-indigo-600 hover:bg-indigo-100 rounded-lg transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-12">
                        <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-1">No messages yet</h3>
                        <p class="text-gray-500">Contact form submissions will appear here</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Navigation Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Projects Card -->
        <a href="{{ route('admin.projects.index') }}" class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 hover:shadow-lg transition-all duration-300 group border-2 border-transparent hover:border-indigo-500">
            <div class="flex items-center justify-between">
                <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center group-hover:bg-indigo-500 transition-colors">
                    <svg class="w-6 h-6 text-indigo-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <svg class="w-5 h-5 text-gray-400 group-hover:text-indigo-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
            <h3 class="mt-4 text-lg font-semibold text-gray-900">Projects</h3>
            <p class="mt-1 text-sm text-gray-500">Manage your portfolio projects</p>
        </a>

        <!-- Skills Card -->
        <a href="{{ route('admin.skills.index') }}" class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 hover:shadow-lg transition-all duration-300 group border-2 border-transparent hover:border-green-500">
            <div class="flex items-center justify-between">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center group-hover:bg-green-500 transition-colors">
                    <svg class="w-6 h-6 text-green-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <svg class="w-5 h-5 text-gray-400 group-hover:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
            <h3 class="mt-4 text-lg font-semibold text-gray-900">Skills</h3>
            <p class="mt-1 text-sm text-gray-500">Update your technical skills</p>
        </a>

        <!-- Timeline Card -->
        <a href="{{ route('admin.timeline.index') }}" class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 hover:shadow-lg transition-all duration-300 group border-2 border-transparent hover:border-purple-500">
            <div class="flex items-center justify-between">
                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center group-hover:bg-purple-500 transition-colors">
                    <svg class="w-6 h-6 text-purple-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <svg class="w-5 h-5 text-gray-400 group-hover:text-purple-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
            <h3 class="mt-4 text-lg font-semibold text-gray-900">Timeline</h3>
            <p class="mt-1 text-sm text-gray-500">Manage work experience</p>
        </a>

        <!-- Settings Card -->
        <a href="{{ route('admin.settings.index') }}" class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 hover:shadow-lg transition-all duration-300 group border-2 border-transparent hover:border-yellow-500">
            <div class="flex items-center justify-between">
                <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center group-hover:bg-yellow-500 transition-colors">
                    <svg class="w-6 h-6 text-yellow-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <svg class="w-5 h-5 text-gray-400 group-hover:text-yellow-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
            <h3 class="mt-4 text-lg font-semibold text-gray-900">Settings</h3>
            <p class="mt-1 text-sm text-gray-500">Configure site information</p>
        </a>
    </div>
</div>
@endsection
