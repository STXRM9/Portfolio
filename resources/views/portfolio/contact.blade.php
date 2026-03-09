@extends('layouts.portfolio')

@section('title', 'Contact - ' . config('portfolio.name'))

@section('content')
<!-- Page Header -->
<section class="relative pt-32 pb-20 hero-gradient">
    <div class="absolute inset-0 bg-grid opacity-30"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <span class="inline-block px-4 py-1 glass rounded-full text-sm font-medium text-purple-400 mb-4 animate-fade-in-down">Contact</span>
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-4 animate-fade-in-up delay-100">Get In Touch</h1>
        <p class="text-xl text-gray-400 animate-fade-in-up delay-200">Have a question or want to work together? I'd love to hear from you.</p>
    </div>
    
    <!-- Wave divider -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="relative block w-full h-16 md:h-24" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#12121a" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,224C672,245,768,267,864,261.3C960,256,1056,224,1152,197.3C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- Contact Section -->
<section class="py-24 bg-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="animate-on-scroll">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Let's Talk</h2>
                <p class="text-gray-400 mb-8 leading-relaxed">
                    {{ config('portfolio.availability') }}. 
                    If you have a project that needs some creative touch, drop me a line.
                </p>

                <div class="space-y-4 md:space-y-6">
                    <!-- Email -->
                    @if(config('portfolio.email'))
                    <div class="glass-card p-4 md:p-5 flex items-start gap-3 md:gap-4 group">
                        <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white mb-1">Email</h3>
                            <a href="mailto:{{ config('portfolio.email') }}" class="text-gray-400 hover:text-purple-400 transition-colors">{{ config('portfolio.email') }}</a>
                        </div>
                    </div>
                    @endif

                    <!-- Phone -->
                    @if(config('portfolio.phone'))
                    <div class="glass-card p-4 md:p-5 flex items-start gap-3 md:gap-4 group">
                        <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white mb-1">Phone</h3>
                            <a href="tel:{{ config('portfolio.phone') }}" class="text-gray-400 hover:text-purple-400 transition-colors">{{ config('portfolio.phone') }}</a>
                        </div>
                    </div>
                    @endif

                    <!-- Location -->
                    @if(config('portfolio.location'))
                    <div class="glass-card p-4 md:p-5 flex items-start gap-3 md:gap-4 group">
                        <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white mb-1">Location</h3>
                            <p class="text-gray-400">{{ config('portfolio.location') }}</p>
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Social Links -->
                <div class="mt-10">
                    <h3 class="font-semibold text-white mb-4">Follow Me</h3>
                    <div class="flex gap-3">
                        @if(config('portfolio.social.github'))
                        <a href="{{ config('portfolio.social.github') }}" target="_blank" rel="noopener noreferrer" class="social-link">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        @endif

                        @if(config('portfolio.social.linkedin'))
                        <a href="{{ config('portfolio.social.linkedin') }}" target="_blank" rel="noopener noreferrer" class="social-link">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        @endif

                        @if(config('portfolio.social.twitter'))
                        <a href="{{ config('portfolio.social.twitter') }}" target="_blank" rel="noopener noreferrer" class="social-link">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="glass-card p-6 md:p-8 animate-on-scroll delay-100">
                @if(session('success'))
                <div class="mb-6 p-4 glass border border-green-500/30 text-green-400 rounded-xl">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                            class="form-input @error('name') border-red-500 @enderror"
                            placeholder="Your Name">
                        @error('name')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                            class="form-input @error('email') border-red-500 @enderror"
                            placeholder="your@email.com">
                        @error('email')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-300 mb-2">Subject</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required
                            class="form-input @error('subject') border-red-500 @enderror"
                            placeholder="Project Inquiry">
                        @error('subject')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" required
                            class="form-input form-textarea @error('message') border-red-500 @enderror"
                            placeholder="Tell me about your project...">{{ old('message') }}</textarea>
                        @error('message')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn-primary w-full">
                        Send Message
                        <svg class="w-5 h-5 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
