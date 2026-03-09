@extends('layouts.portfolio')

@section('title', 'Projects - ' . config('portfolio.name'))

@section('content')
<!-- Page Header -->
<section class="relative pt-32 pb-20 hero-gradient">
    <div class="absolute inset-0 bg-grid opacity-30"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <span class="inline-block px-4 py-1 glass rounded-full text-sm font-medium text-purple-400 mb-4 animate-fade-in-down">Portfolio</span>
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-4 animate-fade-in-up delay-100">My Projects</h1>
        <p class="text-xl text-gray-400 animate-fade-in-up delay-200">A showcase of my recent work</p>
    </div>
    
    <!-- Wave divider -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="relative block w-full h-16 md:h-24" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#12121a" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,224C672,245,768,267,864,261.3C960,256,1056,224,1152,197.3C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- Filter Section -->
<section class="py-6 bg-dark-secondary border-b border-glass sticky top-16 z-40 backdrop-blur-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap gap-2 md:gap-3 justify-center" id="project-filters">
            <button class="filter-btn px-6 py-2 gradient-bg text-white rounded-full font-medium transition-all hover:shadow-lg hover:shadow-purple-500/25" data-filter="all">All Projects</button>
            <button class="filter-btn px-6 py-2 glass text-gray-300 rounded-full font-medium hover:bg-white/10 transition-all" data-filter="web">Web Apps</button>
            <button class="filter-btn px-6 py-2 glass text-gray-300 rounded-full font-medium hover:bg-white/10 transition-all" data-filter="mobile">Mobile</button>
            <button class="filter-btn px-6 py-2 glass text-gray-300 rounded-full font-medium hover:bg-white/10 transition-all" data-filter="ecommerce">E-commerce</button>
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="py-24 bg-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8" id="projects-grid">
            @foreach($projects as $index => $project)
            <div class="project-card bg-dark-secondary animate-on-scroll" style="animation-delay: {{ $index * 100 }}ms" data-category="{{ $project['category'] }}">
                <div class="relative h-56 overflow-hidden">
                    <div class="w-full h-full gradient-bg flex items-center justify-center">
                        <span class="text-7xl opacity-30">{{ $project['image'] }}</span>
                    </div>
                    <!-- Overlay gradient -->
                    <div class="absolute inset-0 bg-gradient-to-t from-dark-secondary via-transparent to-transparent"></div>
                </div>
                <div class="p-6 -mt-4 relative">
                    <div class="flex flex-wrap gap-2 mb-3">
                        @foreach($project['technologies'] as $tech)
                        <span class="px-3 py-1 glass rounded-full text-xs font-medium text-purple-400">{{ $tech }}</span>
                        @endforeach
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:gradient-text transition-all">{{ $project['title'] }}</h3>
                    <p class="text-gray-400 mb-4">{{ $project['description'] }}</p>
                    <a href="{{ $project['link'] }}" class="text-white hover:gradient-text font-medium inline-flex items-center group">
                        View Details
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-24 bg-dark-secondary relative overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-cyan-600/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-on-scroll">Have a Project in Mind?</h2>
        <p class="text-xl text-gray-400 mb-10 max-w-2xl mx-auto animate-on-scroll delay-100">I'm always open to discussing new projects and creative ideas.</p>
        <a href="{{ route('contact') }}" class="btn-primary text-lg inline-flex items-center animate-on-scroll delay-200">
            Let's Talk
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');
                
                // Update active button
                filterBtns.forEach(b => {
                    b.classList.remove('gradient-bg', 'text-white');
                    b.classList.add('glass', 'text-gray-300');
                });
                this.classList.remove('glass', 'text-gray-300');
                this.classList.add('gradient-bg', 'text-white');

                // Filter projects
                projectCards.forEach((card, index) => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'block';
                        card.style.animation = 'fadeInUp 0.5s ease forwards';
                        card.style.animationDelay = (index * 100) + 'ms';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endsection
