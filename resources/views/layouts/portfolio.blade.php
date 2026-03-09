<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="{{ config('portfolio.seo.default_description') }}">
        <meta name="keywords" content="{{ implode(', ', config('portfolio.seo.keywords')) }}">
        <meta name="author" content="{{ config('portfolio.seo.author') }}">
        <meta name="robots" content="index, follow">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="{{ config('portfolio.seo.default_title') }}">
        <meta property="og:description" content="{{ config('portfolio.seo.default_description') }}">
        <meta property="og:site_name" content="{{ config('portfolio.seo.site_name') }}">
        
        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta property="twitter:title" content="{{ config('portfolio.seo.default_title') }}">
        <meta property="twitter:description" content="{{ config('portfolio.seo.default_description') }}">
        
        <title>
            @yield('title', config('portfolio.seo.default_title'))
        </title>

        <!-- Favicon -->
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-dark text-white antialiased">
        <!-- Particles Background -->
        <div class="particles-container">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>

        <!-- Navigation -->
        <nav class="nav-glass fixed w-full z-50 top-0">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <!-- Logo / Brand -->
                    <div class="flex items-center">
                        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                            <div class="w-10 h-10 gradient-bg rounded-xl flex items-center justify-center group-hover:animate-glow transition-all">
                                <span class="text-white font-bold text-lg">{{ substr(config('portfolio.name'), 0, 1) }}</span>
                            </div>
                            <span class="text-xl font-bold text-white group-hover:gradient-text transition-all">
                                {{ config('portfolio.name') }}
                            </span>
                        </a>
                    </div>
                    
                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="{{ route('home') }}" class="nav-link px-4 py-2 rounded-lg font-medium {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('about') }}" class="nav-link px-4 py-2 rounded-lg font-medium {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                        <a href="{{ route('projects') }}" class="nav-link px-4 py-2 rounded-lg font-medium {{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a>
                        <a href="{{ route('contact') }}" class="nav-link px-4 py-2 rounded-lg font-medium {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                        
                        @auth
                            @if(auth()->user()->isAdmin())
                                <a href="{{ route('admin.dashboard') }}" class="ml-4 px-5 py-2.5 gradient-bg text-white rounded-xl font-medium hover:opacity-90 transition-all">Admin Panel</a>
                            @else
                                <a href="{{ url('/dashboard') }}" class="ml-4 px-5 py-2.5 gradient-bg text-white rounded-xl font-medium hover:opacity-90 transition-all">Dashboard</a>
                            @endif
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="ml-2 px-4 py-2 nav-link font-medium text-red-400 hover:text-red-300">Logout</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="ml-4 px-4 py-2 nav-link font-medium">Login</a>
                            <a href="{{ route('register') }}" class="ml-2 px-4 py-2 gradient-bg text-white rounded-xl font-medium hover:opacity-90 transition-all">Sign Up</a>
                            @if(config('portfolio.resume_url'))
                                <a href="{{ config('portfolio.resume_url') }}" target="_blank" class="ml-2 px-4 py-2 nav-link font-medium">Resume</a>
                            @endif
                        @endauth
                    </div>
                    
                    <!-- Mobile menu button -->
                    <div class="flex items-center md:hidden">
                        <button id="mobile-menu-btn" class="text-gray-300 hover:text-white focus:outline-none p-2" aria-label="Toggle menu">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden glass border-t border-glass absolute w-full left-0">
                <div class="px-4 py-3 space-y-1">
                    <a href="{{ route('home') }}" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl font-medium {{ request()->routeIs('home') ? 'text-white bg-white/5' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl font-medium {{ request()->routeIs('about') ? 'text-white bg-white/5' : '' }}">About</a>
                    <a href="{{ route('projects') }}" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl font-medium {{ request()->routeIs('projects') ? 'text-white bg-white/5' : '' }}">Projects</a>
                    <a href="{{ route('contact') }}" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl font-medium {{ request()->routeIs('contact') ? 'text-white bg-white/5' : '' }}">Contact</a>
                    @auth
                        @if(auth()->user()->isAdmin())
                            <a href="{{ route('admin.dashboard') }}" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl font-medium">Admin Panel</a>
                        @else
                            <a href="{{ url('/dashboard') }}" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl font-medium">Dashboard</a>
                        @endif
                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                            @csrf
                            <button type="submit" class="w-full text-left block px-4 py-3 text-red-400 hover:text-red-300 hover:bg-white/5 rounded-xl font-medium">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl font-medium">Login</a>
                        <a href="{{ route('register') }}" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl font-medium gradient-text">Sign Up</a>
                        @if(config('portfolio.resume_url'))
                            <a href="{{ config('portfolio.resume_url') }}" target="_blank" class="block px-4 py-3 text-gray-300 hover:text-white hover:bg-white/5 rounded-xl font-medium">Resume</a>
                        @endif
                    @endauth
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="relative z-10">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="footer py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
                    <!-- Brand & Description -->
                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 gradient-bg rounded-xl flex items-center justify-center">
                                <span class="text-white font-bold text-lg">{{ substr(config('portfolio.name'), 0, 1) }}</span>
                            </div>
                            <span class="text-xl font-bold text-white">{{ config('portfolio.name') }}</span>
                        </div>
                        <p class="text-gray-400 mb-6 leading-relaxed">{{ config('portfolio.description') }}</p>
                        <p class="text-sm text-gray-500 flex items-center gap-2">
                            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse-slow"></span>
                            {{ config('portfolio.availability') }}
                        </p>
                    </div>
                    
                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-lg font-semibold text-white mb-6">Quick Links</h3>
                        <ul class="space-y-3">
                            <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2 group">
                                <span class="w-1 h-1 bg-purple-500 rounded-full group-hover:bg-purple-400 transition-colors"></span>
                                Home
                            </a></li>
                            <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2 group">
                                <span class="w-1 h-1 bg-purple-500 rounded-full group-hover:bg-purple-400 transition-colors"></span>
                                About
                            </a></li>
                            <li><a href="{{ route('projects') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2 group">
                                <span class="w-1 h-1 bg-purple-500 rounded-full group-hover:bg-purple-400 transition-colors"></span>
                                Projects
                            </a></li>
                            <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2 group">
                                <span class="w-1 h-1 bg-purple-500 rounded-full group-hover:bg-purple-400 transition-colors"></span>
                                Contact
                            </a></li>
                        </ul>
                    </div>
                    
                    <!-- Contact & Social -->
                    <div>
                        <h3 class="text-lg font-semibold text-white mb-6">Get In Touch</h3>
                        <div class="space-y-4">
                            @if(config('portfolio.email'))
                            <div class="flex items-center gap-3 text-gray-400">
                                <div class="w-10 h-10 glass rounded-xl flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <a href="mailto:{{ config('portfolio.email') }}" class="hover:text-white transition-colors">{{ config('portfolio.email') }}</a>
                            </div>
                            @endif
                            
                            @if(config('portfolio.location'))
                            <div class="flex items-center gap-3 text-gray-400">
                                <div class="w-10 h-10 glass rounded-xl flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <span>{{ config('portfolio.location') }}</span>
                            </div>
                            @endif
                        </div>
                        
                        <!-- Social Links -->
                        <div class="flex gap-3 mt-6 md:mt-8">
                            @if(config('portfolio.social.github'))
                            <a href="{{ config('portfolio.social.github') }}" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="GitHub">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            @endif
                            
                            @if(config('portfolio.social.linkedin'))
                            <a href="{{ config('portfolio.social.linkedin') }}" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="LinkedIn">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            @endif
                            
                            @if(config('portfolio.social.twitter'))
                            <a href="{{ config('portfolio.social.twitter') }}" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Twitter">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                </svg>
                            </a>
                            @endif
                            
                            @if(config('portfolio.social.facebook'))
                            <a href="{{ config('portfolio.social.facebook') }}" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Facebook">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            @endif
                            
                            @if(config('portfolio.social.instagram'))
                            <a href="{{ config('portfolio.social.instagram') }}" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Instagram">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                
                <!-- Copyright -->
                <div class="border-t border-glass mt-12 pt-8">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <p class="text-sm text-gray-500">
                            &copy; {{ date('Y') }} {{ config('portfolio.name') }}. All rights reserved.
                        </p>
                        <div class="flex gap-6 mt-4 md:mt-0">
                            <a href="#" class="text-sm text-gray-500 hover:text-white transition-colors">Privacy Policy</a>
                            <a href="#" class="text-sm text-gray-500 hover:text-white transition-colors">Terms of Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            // Mobile menu toggle
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
                
                // Close menu when clicking a link
                mobileMenu.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', () => {
                        mobileMenu.classList.add('hidden');
                    });
                });
            }

            // Scroll animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        </script>
    </body>
</html>
