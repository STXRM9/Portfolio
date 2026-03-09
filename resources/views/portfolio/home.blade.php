@extends('layouts.portfolio')

@section('title', config('portfolio.name') . ' - ' . config('portfolio.title'))

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center hero-gradient pt-20">
    <!-- Hero Glow -->
    <div class="hero-glow"></div>
    
    <!-- Grid Pattern -->
    <div class="absolute inset-0 bg-grid opacity-50"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 relative">
        <div class="text-center max-w-4xl mx-auto">
            <!-- Badge -->
            <div class="animate-fade-in-down">
                <span class="inline-flex items-center gap-2 px-4 py-2 glass rounded-full text-sm font-medium mb-8">
                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse-slow"></span>
                    {{ config('portfolio.availability') }}
                </span>
            </div>
            
            <!-- Main Heading -->
            <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold mb-6 sm:mb-8 leading-tight animate-fade-in-up delay-100">
                Hi, I'm <span class="gradient-text">{{ config('portfolio.name') }}</span>
            </h1>
            
            <!-- Subtitle -->
            <p class="text-lg sm:text-xl md:text-2xl text-gray-400 mb-8 sm:mb-12 max-w-2xl mx-auto leading-relaxed animate-fade-in-up delay-200">
                {{ config('portfolio.description') }}
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-fade-in-up delay-300">
                <a href="{{ route('projects') }}" class="btn-primary text-lg">
                    View My Work
                    <svg class="w-5 h-5 ml-2 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <a href="{{ route('contact') }}" class="btn-secondary text-lg">
                    Get In Touch
                </a>
            </div>
            
            <!-- Scroll Indicator -->
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
                <div class="w-6 h-10 border-2 border-gray-600 rounded-full flex items-start justify-center p-1">
                    <div class="w-1.5 h-3 bg-purple-500 rounded-full animate-pulse"></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Wave divider -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="relative block w-full h-16 md:h-24" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#12121a" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,224C672,245,768,267,864,261.3C960,256,1056,224,1152,197.3C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-dark-secondary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
            <div class="glass-card p-4 md:p-8 text-center animate-on-scroll">
                <p class="text-3xl md:text-4xl md:text-5xl font-bold gradient-text mb-1 md:mb-2">{{ config('portfolio.stats.years_experience') }}+</p>
                <p class="text-sm md:text-base text-gray-400">Years Experience</p>
            </div>
            <div class="glass-card p-4 md:p-8 text-center animate-on-scroll delay-100">
                <p class="text-3xl md:text-4xl md:text-5xl font-bold gradient-text mb-1 md:mb-2">{{ config('portfolio.stats.projects_completed') }}+</p>
                <p class="text-sm md:text-base text-gray-400">Projects Completed</p>
            </div>
            <div class="glass-card p-4 md:p-8 text-center animate-on-scroll delay-200">
                <p class="text-3xl md:text-4xl md:text-5xl font-bold gradient-text mb-1 md:mb-2">{{ config('portfolio.stats.happy_clients') }}+</p>
                <p class="text-sm md:text-base text-gray-400">Happy Clients</p>
            </div>
            <div class="glass-card p-4 md:p-8 text-center animate-on-scroll delay-300">
                <p class="text-3xl md:text-4xl md:text-5xl font-bold gradient-text mb-1 md:mb-2">{{ config('portfolio.stats.satisfaction') }}%</p>
                <p class="text-sm md:text-base text-gray-400">Satisfaction</p>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="py-24 bg-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1 glass rounded-full text-sm font-medium text-purple-400 mb-4">Expertise</span>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">My Skills</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Technologies and tools I work with to bring ideas to life</p>
        </div>
        
        <!-- Frontend Skills -->
        @if(config('portfolio.skills.frontend'))
        <div class="mb-12">
            <h3 class="text-xl font-semibold text-white mb-6 flex items-center gap-3">
                <span class="w-10 h-10 gradient-bg rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </span>
                Frontend
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                @foreach(config('portfolio.skills.frontend') as $skill)
                <div class="skill-item group">
                    <div class="skill-icon group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-white group-hover:gradient-text transition-all">{{ $skill }}</h3>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        
        <!-- Backend Skills -->
        @if(config('portfolio.skills.backend'))
        <div class="mb-12">
            <h3 class="text-xl font-semibold text-white mb-6 flex items-center gap-3">
                <span class="w-10 h-10 gradient-bg rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                    </svg>
                </span>
                Backend
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                @foreach(config('portfolio.skills.backend') as $skill)
                <div class="skill-item group">
                    <div class="skill-icon group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-white group-hover:gradient-text transition-all">{{ $skill }}</h3>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        
        <!-- Tools -->
        @if(config('portfolio.skills.tools'))
        <div>
            <h3 class="text-xl font-semibold text-white mb-6 flex items-center gap-3">
                <span class="w-10 h-10 gradient-bg rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                    </svg>
                </span>
                Tools & Others
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                @foreach(config('portfolio.skills.tools') as $skill)
                <div class="skill-item group">
                    <div class="skill-icon group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-white group-hover:gradient-text transition-all">{{ $skill }}</h3>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>

<!-- Featured Projects -->
<section class="py-24 bg-dark-secondary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1 glass rounded-full text-sm font-medium text-cyan-400 mb-4">Portfolio</span>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Featured Projects</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Check out some of my recent work</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            @foreach($featuredProjects as $index => $project)
            <div class="project-card animate-on-scroll" style="animation-delay: {{ $index * 100 }}ms">
                <div class="project-card-image h-52">
                    <div class="w-full h-full gradient-bg flex items-center justify-center">
                        <span class="text-7xl opacity-30">{{ $project['image'] }}</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-bold text-white mb-3 group-hover:gradient-text transition-all">{{ $project['title'] }}</h3>
                    <p class="text-gray-400 mb-5 leading-relaxed">{{ $project['description'] }}</p>
                    <div class="flex flex-wrap gap-2 mb-5">
                        @foreach($project['technologies'] as $tech)
                        <span class="px-3 py-1 glass rounded-full text-xs font-medium text-purple-400">{{ $tech }}</span>
                        @endforeach
                    </div>
                    <a href="{{ $project['link'] }}" class="inline-flex items-center text-white hover:gradient-text font-medium group">
                        View Details
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('projects') }}" class="btn-primary">
                View All Projects
                <svg class="w-5 h-5 ml-2 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-24 bg-dark relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-cyan-600/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-on-scroll">Let's Work Together</h2>
        <p class="text-xl text-gray-400 mb-10 max-w-2xl mx-auto leading-relaxed animate-on-scroll delay-100">
            Have a project in mind? I'd love to hear about it. Let's discuss how I can help bring your ideas to life.
        </p>
        <a href="{{ route('contact') }}" class="btn-primary text-lg animate-on-scroll delay-200">
            Start a Conversation
            <svg class="w-5 h-5 ml-2 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>
        </a>
    </div>
</section>
@endsection
