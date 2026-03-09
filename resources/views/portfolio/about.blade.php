@extends('layouts.portfolio')

@section('title', 'About - ' . config('portfolio.name'))

@section('content')
<!-- Page Header -->
<section class="relative pt-32 pb-20 hero-gradient">
    <div class="absolute inset-0 bg-grid opacity-30"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <span class="inline-block px-4 py-1 glass rounded-full text-sm font-medium text-purple-400 mb-4 animate-fade-in-down">About Me</span>
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-4 animate-fade-in-up delay-100">About Me</h1>
        <p class="text-xl text-gray-400 animate-fade-in-up delay-200">Learn more about my background and experience</p>
    </div>
    
    <!-- Wave divider -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="relative block w-full h-16 md:h-24" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#12121a" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,224C672,245,768,267,864,261.3C960,256,1056,224,1152,197.3C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- About Content -->
<section class="py-24 bg-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <!-- Profile Image -->
            <div class="relative animate-on-scroll order-2 lg:order-1">
                <div class="aspect-square rounded-3xl glass p-4 md:p-8 flex items-center justify-center overflow-hidden relative">
                    <!-- Decorative circles -->
                    <div class="absolute top-1/4 left-1/4 w-32 h-32 bg-purple-500/20 rounded-full blur-2xl"></div>
                    <div class="absolute bottom-1/4 right-1/4 w-32 h-32 bg-cyan-500/20 rounded-full blur-2xl"></div>
                    
                    <div class="w-56 h-56 gradient-bg rounded-full flex items-center justify-center relative z-10 animate-glow">
                        <span class="text-7xl text-white font-bold">{{ substr(config('portfolio.name'), 0, 1) }}</span>
                    </div>
                </div>
                <!-- Floating badge -->
                <div class="absolute -bottom-4 -right-2 md:-right-4 glass-card px-4 md:px-6 py-3 md:py-4">
                    <p class="text-3xl font-bold gradient-text">{{ config('portfolio.stats.years_experience') }}+</p>
                    <p class="text-sm text-gray-400">Years Experience</p>
                </div>
            </div>

            <!-- About Text -->
            <div class="animate-on-scroll delay-100">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    I'm <span class="gradient-text">{{ config('portfolio.name') }}</span>, {{ config('portfolio.title') }}
                </h2>
                <div class="space-y-5 text-gray-400 leading-relaxed">
                    <p>
                        Hello! I'm a full-stack developer with a passion for creating beautiful, functional, 
                        and user-centered digital experiences. With over {{ config('portfolio.stats.years_experience') }} years of experience in web development,
                        I've worked with a variety of technologies ranging from frontend frameworks to backend systems.
                    </p>
                    <p>
                        My journey started when I discovered my love for coding during college. Since then, 
                        I've been continuously learning and adapting to new technologies to stay at the forefront
                        of web development.
                    </p>
                    <p>
                        When I'm not coding, you can find me exploring new technologies, contributing to open-source
                        projects, or sharing my knowledge with the developer community.
                    </p>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-10">
                    <div class="glass-card p-5 text-center">
                        <p class="text-3xl font-bold gradient-text">{{ config('portfolio.stats.projects_completed') }}+</p>
                        <p class="text-sm text-gray-400 mt-1">Projects</p>
                    </div>
                    <div class="glass-card p-5 text-center">
                        <p class="text-3xl font-bold gradient-text">{{ config('portfolio.stats.happy_clients') }}+</p>
                        <p class="text-sm text-gray-400 mt-1">Clients</p>
                    </div>
                    <div class="glass-card p-5 text-center">
                        <p class="text-3xl font-bold gradient-text">{{ config('portfolio.stats.satisfaction') }}%</p>
                        <p class="text-sm text-gray-400 mt-1">Satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills & Expertise -->
<section class="py-24 bg-dark-secondary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1 glass rounded-full text-sm font-medium text-cyan-400 mb-4">Expertise</span>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Skills & Expertise</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Technologies and tools I use to bring ideas to life</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Frontend -->
            <div class="glass-card p-8 group">
                <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4 group-hover:gradient-text transition-all">Frontend Development</h3>
                <ul class="space-y-3">
                    @foreach(config('portfolio.skills.frontend') as $skill)
                    <li class="flex items-center text-gray-400 group-hover:text-gray-300 transition-colors">
                        <span class="w-2 h-2 gradient-bg rounded-full mr-3"></span>
                        {{ $skill }}
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Backend -->
            <div class="glass-card p-8 group">
                <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4 group-hover:gradient-text transition-all">Backend Development</h3>
                <ul class="space-y-3">
                    @foreach(config('portfolio.skills.backend') as $skill)
                    <li class="flex items-center text-gray-400 group-hover:text-gray-300 transition-colors">
                        <span class="w-2 h-2 bg-cyan-500 rounded-full mr-3"></span>
                        {{ $skill }}
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Tools & Others -->
            <div class="glass-card p-8 group">
                <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4 group-hover:gradient-text transition-all">Tools & Others</h3>
                <ul class="space-y-3">
                    @foreach(config('portfolio.skills.tools') as $skill)
                    <li class="flex items-center text-gray-400 group-hover:text-gray-300 transition-colors">
                        <span class="w-2 h-2 bg-pink-500 rounded-full mr-3"></span>
                        {{ $skill }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Timeline -->
<section class="py-24 bg-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
           inline-block px- <span class="4 py-1 glass rounded-full text-sm font-medium text-pink-400 mb-4">Journey</span>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">My Journey</h2>
            <p class="text-gray-400">A timeline of my professional experience</p>
        </div>

        <div class="max-w-3xl mx-auto">
            <div class="space-y-8">
                @foreach($timeline as $index => $entry)
                <div class="flex gap-6 animate-on-scroll" style="animation-delay: {{ $index * 100 }}ms">
                    <div class="flex flex-col items-center">
                        <div class="w-4 h-4 gradient-bg rounded-full ring-4 ring-purple-500/30"></div>
                        @if(!$loop->last)
                        <div class="w-0.5 h-full bg-gradient-to-b from-purple-500 to-transparent mt-2"></div>
                        @endif
                    </div>
                    <div class="glass-card p-6 flex-1 hover:border-purple-500/30 transition-colors">
                        <span class="text-sm text-purple-400 font-medium">{{ $entry['period'] }}</span>
                        <h3 class="text-lg font-bold text-white mt-1">{{ $entry['title'] }}</h3>
                        <p class="text-gray-400 mt-2">{{ $entry['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-dark-secondary relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-cyan-600/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-on-scroll">Want to Know More?</h2>
        <p class="text-xl text-gray-400 mb-10 max-w-2xl mx-auto animate-on-scroll delay-100">
            Feel free to check out my projects or get in touch if you'd like to collaborate.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center animate-on-scroll delay-200">
            <a href="{{ route('projects') }}" class="btn-primary">
                View My Projects
                <svg class="w-5 h-5 ml-2 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
            <a href="{{ route('contact') }}" class="btn-secondary">
                Contact Me
            </a>
        </div>
    </div>
</section>
@endsection
