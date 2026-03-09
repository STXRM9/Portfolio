<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Sidebar -->
        <aside class="fixed inset-y-0 left-0 z-50 w-64 bg-gray-900 transform transition-transform duration-300" id="sidebar">
            <div class="flex flex-col h-full">
                <!-- Logo -->
                <div class="flex items-center justify-center h-16 bg-gray-800">
                    <a href="{{ route('admin.dashboard') }}" class="text-xl font-bold text-white">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <!-- Navigation -->
                <nav class="flex-1 px-4 py-6 space-y-2">
                    <a href="{{ route('admin.dashboard') }}" 
                       class="flex items-center px-4 py-3 text-gray-100 rounded-lg {{ request()->routeIs('admin.dashboard') ? 'bg-indigo-600' : 'hover:bg-gray-800' }} transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                        Dashboard
                    </a>

                    <a href="{{ route('admin.projects.index') }}" 
                       class="flex items-center px-4 py-3 text-gray-100 rounded-lg {{ request()->routeIs('admin.projects.*') ? 'bg-indigo-600' : 'hover:bg-gray-800' }} transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Projects
                    </a>

                    <a href="{{ route('admin.skills.index') }}" 
                       class="flex items-center px-4 py-3 text-gray-100 rounded-lg {{ request()->routeIs('admin.skills.*') ? 'bg-indigo-600' : 'hover:bg-gray-800' }} transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                        Skills
                    </a>

                    <a href="{{ route('admin.timeline.index') }}" 
                       class="flex items-center px-4 py-3 text-gray-100 rounded-lg {{ request()->routeIs('admin.timeline.*') ? 'bg-indigo-600' : 'hover:bg-gray-800' }} transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Timeline
                    </a>

                    <a href="{{ route('admin.messages.index') }}" 
                       class="flex items-center px-4 py-3 text-gray-100 rounded-lg {{ request()->routeIs('admin.messages.*') ? 'bg-indigo-600' : 'hover:bg-gray-800' }} transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Messages
                        @php
                            $unreadCount = \App\Models\ContactMessage::where('read', false)->count();
                        @endphp
                        @if($unreadCount > 0)
                            <span class="ml-auto bg-red-500 text-white text-xs font-bold px-2 py-0.5 rounded-full">{{ $unreadCount }}</span>
                        @endif
                    </a>

                    <a href="{{ route('admin.settings.index') }}" 
                       class="flex items-center px-4 py-3 text-gray-100 rounded-lg {{ request()->routeIs('admin.settings.*') ? 'bg-indigo-600' : 'hover:bg-gray-800' }} transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Settings
                    </a>
                </nav>

                <!-- User Menu -->
                <div class="p-4 border-t border-gray-800">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="h-8 w-8 rounded-full bg-indigo-600 flex items-center justify-center text-white font-bold">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-white">{{ Auth::user()->name }}</p>
                            <a href="{{ route('profile.edit') }}" class="text-xs text-gray-400 hover:text-white">Profile</a>
                        </div>
                        <form method="POST" action="{{ route('logout') }}" class="ml-auto">
                            @csrf
                            <button type="submit" class="text-gray-400 hover:text-white">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="pl-64">
            <!-- Top Header -->
            <header class="bg-white shadow-sm border-b border-gray-200">
                <div class="flex items-center justify-between px-6 py-4">
                    <div class="flex items-center">
                        <h1 class="text-xl font-semibold text-gray-800">
                            @yield('title', 'Admin Dashboard')
                        </h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="{{ url('/') }}" target="_blank" class="text-gray-600 hover:text-gray-900">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-6">
                @if(session('success'))
                    <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
