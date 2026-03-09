<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <span class="text-sm text-gray-500">Welcome back, {{ Auth::user()->name }}</span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Welcome Banner -->
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl shadow-lg overflow-hidden">
                <div class="p-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-bold text-white mb-2">
                                {{ __('Welcome to Your Portfolio Dashboard') }}
                            </h3>
                            <p class="text-indigo-100">
                                {{ $siteInfo['tagline'] ?? 'Manage your portfolio, track your progress, and showcase your work.' }}
                            </p>
                            <div class="mt-4 flex items-center gap-4">
                                <a href="{{ route('home') }}" class="inline-flex items-center px-4 py-2 bg-white text-indigo-600 rounded-lg font-medium hover:bg-indigo-50 transition-colors">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                    {{ __('View Live Site') }}
                                </a>
                                <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-4 py-2 bg-indigo-500 text-white rounded-lg font-medium hover:bg-indigo-400 transition-colors">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    {{ __('Edit Profile') }}
                                </a>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="w-24 h-24 bg-white/20 rounded-full flex items-center justify-center">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Total Projects -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-md transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Total Projects</p>
                                <p class="text-3xl font-bold text-gray-900 mt-1">{{ $stats['total_projects'] }}</p>
                            </div>
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('projects') }}" class="text-sm text-indigo-600 hover:text-indigo-900 font-medium">View all projects →</a>
                        </div>
                    </div>
                </div>

                <!-- Total Skills -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-md transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Total Skills</p>
                                <p class="text-3xl font-bold text-gray-900 mt-1">{{ $stats['total_skills'] }}</p>
                            </div>
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('about') }}" class="text-sm text-green-600 hover:text-green-900 font-medium">View all skills →</a>
                        </div>
                    </div>
                </div>

                <!-- Years Experience -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-md transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Years Experience</p>
                                <p class="text-3xl font-bold text-gray-900 mt-1">{{ $stats['years_experience'] }}</p>
                            </div>
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('about') }}" class="text-sm text-purple-600 hover:text-purple-900 font-medium">View timeline →</a>
                        </div>
                    </div>
                </div>

                <!-- Projects Completed -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-md transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Projects Completed</p>
                                <p class="text-3xl font-bold text-gray-900 mt-1">{{ $stats['projects_completed'] }}</p>
                            </div>
                            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('projects') }}" class="text-sm text-orange-600 hover:text-orange-900 font-medium">View portfolio →</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions & Recent Projects -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Quick Actions -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                        <h3 class="text-lg font-semibold text-gray-900">Quick Actions</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <a href="{{ route('profile.edit') }}" class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors group">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center group-hover:bg-blue-200 transition-colors">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">Edit Profile</p>
                                <p class="text-xs text-gray-500">Update your account details</p>
                            </div>
                            <svg class="w-5 h-5 text-gray-400 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>

                        <a href="{{ route('about') }}" class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors group">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center group-hover:bg-green-200 transition-colors">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">View About Page</p>
                                <p class="text-xs text-gray-500">See your about section</p>
                            </div>
                            <svg class="w-5 h-5 text-gray-400 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>

                        <a href="{{ route('projects') }}" class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors group">
                            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center group-hover:bg-purple-200 transition-colors">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">View Projects</p>
                                <p class="text-xs text-gray-500">Browse your portfolio</p>
                            </div>
                            <svg class="w-5 h-5 text-gray-400 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>

                        <a href="{{ route('contact') }}" class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-colors group">
                            <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center group-hover:bg-yellow-200 transition-colors">
                                <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">Contact Page</p>
                                <p class="text-xs text-gray-500">View contact information</p>
                            </div>
                            <svg class="w-5 h-5 text-gray-400 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Recent Projects -->
                <div class="lg:col-span-2 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="px-6 py-4 border-b border-gray-200 bg-gray-50 flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Recent Projects</h3>
                        <a href="{{ route('projects') }}" class="text-sm text-indigo-600 hover:text-indigo-900 font-medium">View all →</a>
                    </div>
                    <div class="p-6">
                        @if(count($recentProjects) > 0)
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                @foreach($recentProjects as $project)
                                    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow duration-300">
                                        <div class="flex items-start justify-between">
                                            <div class="flex-1">
                                                <h4 class="text-sm font-semibold text-gray-900">{{ $project['title'] }}</h4>
                                                <p class="text-xs text-gray-500 mt-1">{{ Str::limit($project['description'], 60) }}</p>
                                                <div class="mt-2 flex flex-wrap gap-1">
                                                    @foreach($project['technologies'] as $tech)
                                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-600">
                                                            {{ $tech }}
                                                        </span>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <span class="text-2xl ml-3">{{ $project['image'] }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-8">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                </svg>
                                <p class="text-gray-500">No projects yet</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Skills Overview & Timeline -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Skills Overview -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="px-6 py-4 border-b border-gray-200 bg-gray-50 flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Skills Overview</h3>
                        <a href="{{ route('about') }}" class="text-sm text-indigo-600 hover:text-indigo-900 font-medium">View all →</a>
                    </div>
                    <div class="p-6 space-y-6">
                        <!-- Frontend -->
                        <div>
                            <h4 class="text-sm font-medium text-gray-700 mb-3 flex items-center">
                                <span class="w-2 h-2 bg-pink-500 rounded-full mr-2"></span>
                                Frontend
                            </h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach($skills['frontend'] as $skill)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-pink-50 text-pink-700 border border-pink-100">
                                        {{ $skill }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                        <!-- Backend -->
                        <div>
                            <h4 class="text-sm font-medium text-gray-700 mb-3 flex items-center">
                                <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                                Backend
                            </h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach($skills['backend'] as $skill)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-50 text-blue-700 border border-blue-100">
                                        {{ $skill }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                        <!-- Tools -->
                        <div>
                            <h4 class="text-sm font-medium text-gray-700 mb-3 flex items-center">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                Tools & Others
                            </h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach($skills['tools'] as $skill)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-50 text-green-700 border border-green-100">
                                        {{ $skill }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timeline Preview -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="px-6 py-4 border-b border-gray-200 bg-gray-50 flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Experience Timeline</h3>
                        <a href="{{ route('about') }}" class="text-sm text-indigo-600 hover:text-indigo-900 font-medium">View all →</a>
                    </div>
                    <div class="p-6">
                        @if(count($recentTimeline) > 0)
                            <div class="space-y-6 relative">
                                <!-- Timeline line -->
                                <div class="absolute left-3 top-2 bottom-2 w-0.5 bg-gray-200"></div>
                                
                                @foreach($recentTimeline as $index => $item)
                                    <div class="relative pl-10">
                                        <!-- Timeline dot -->
                                        <div class="absolute left-0 top-1 w-6 h-6 rounded-full {{ isset($item['is_education']) ? 'bg-yellow-100 border-2 border-yellow-400' : 'bg-indigo-100 border-2 border-indigo-400' }} flex items-center justify-center">
                                            @if(isset($item['is_education']))
                                                <svg class="w-3 h-3 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                                                </svg>
                                            @else
                                                <svg class="w-3 h-3 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                                </svg>
                                            @endif
                                        </div>
                                        <div>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-600 mb-1">
                                                {{ $item['period'] }}
                                            </span>
                                            <h4 class="text-sm font-semibold text-gray-900">{{ $item['title'] }}</h4>
                                            <p class="text-sm text-gray-500 mt-1">{{ Str::limit($item['description'], 80) }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-8">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="text-gray-500">No timeline entries yet</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Site Info Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                    <h3 class="text-lg font-semibold text-gray-900">Portfolio Information</h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Portfolio Name</p>
                                <p class="text-sm font-medium text-gray-900">{{ $siteInfo['name'] }}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Email</p>
                                <p class="text-sm font-medium text-gray-900">{{ $siteInfo['email'] ?: 'Not set' }}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.998 1.9a1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Location</p>
                                <p class="text-sm font-medium text-gray-900">{{ $siteInfo['location'] ?: 'Not set' }}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Availability</p>
                                <p class="text-sm font-medium text-gray-900">{{ $siteInfo['availability'] ?: 'Not set' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Account Info -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                    <h3 class="text-lg font-semibold text-gray-900">Account Information</h3>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-lg">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
                                <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-gray-200 transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                                Edit Account
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-50 text-red-600 rounded-lg font-medium hover:bg-red-100 transition-colors">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                    Log Out
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
