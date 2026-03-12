<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOVA Portfolio | Creative Developer</title>
    <meta name="description" content="A visually stunning portfolio showcasing creative work with immersive animations">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Space+Mono:wght@400;700&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    
    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <a href="#" class="logo">NOV<span>A</span></a>
            
            <ul class="nav-links" id="navLinks">
                <li><a href="#home" class="nav-link active">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            
            <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <ul class="mobile-nav-links">
            <li><a href="#home" class="mobile-nav-link">Home</a></li>
            <li><a href="#about" class="mobile-nav-link">About</a></li>
            <li><a href="#services" class="mobile-nav-link">Services</a></li>
            <li><a href="#portfolio" class="mobile-nav-link">Portfolio</a></li>
            <li><a href="#contact" class="mobile-nav-link">Contact</a></li>
        </ul>
    </div>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <canvas class="hero-canvas" id="heroCanvas"></canvas>
        <div class="hero-overlay"></div>
        
        <div class="container hero-container">
            <div class="hero-content">
                <h1 class="hero-title">
                    <span class="title-line">Crafting</span>
                    <span class="title-line">Digital</span>
                    <span class="title-line accent">Experiences</span>
                </h1>
                <p class="hero-subtitle" id="typewriter"></p>
                <div class="hero-buttons">
                    <a href="#portfolio" class="btn btn-primary">View Work</a>
                    <a href="#contact" class="btn btn-secondary">Get In Touch</a>
                </div>
            </div>
        </div>
        
        <div class="scroll-indicator">
            <span>Scroll</span>
            <i data-lucide="chevrons-down"></i>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-image-wrapper">
                    <div class="about-image-frame">
                        <div class="about-image">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&h=600&fit=crop&crop=face" alt="Profile">
                        </div>
                        <div class="frame-accent"></div>
                    </div>
                </div>
                
                <div class="about-content">
                    <span class="section-label">About Me</span>
                    <h2 class="section-title">Transforming Ideas Into <span class="accent">Digital Reality</span></h2>
                    <p class="about-text">
                        I'm a creative developer passionate about building immersive digital experiences. 
                        With expertise spanning web development, UI/UX design, and interactive animations, 
                        I transform complex problems into elegant, user-centered solutions.
                    </p>
                    <p class="about-text">
                        My approach combines technical precision with creative vision, ensuring every project 
                        not only functions flawlessly but also leaves a lasting impression.
                    </p>
                    
                    <div class="stats-row">
                        <div class="stat-item">
                            <span class="stat-number" data-target="150">0</span>
                            <span class="stat-label">Projects</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-target="8">0</span>
                            <span class="stat-label">Years</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-target="80">0</span>
                            <span class="stat-label">Clients</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-target="12">0</span>
                            <span class="stat-label">Awards</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Services</span>
                <h2 class="section-title">What I <span class="accent">Do</span></h2>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i data-lucide="code-2"></i>
                    </div>
                    <h3 class="service-title">Web Development</h3>
                    <p class="service-description">
                        Building responsive, performant websites with modern technologies. From landing pages to complex web applications.
                    </p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i data-lucide="palette"></i>
                    </div>
                    <h3 class="service-title">UI/UX Design</h3>
                    <p class="service-description">
                        Creating intuitive, visually compelling interfaces that enhance user experience and drive engagement.
                    </p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i data-lucide="sparkles"></i>
                    </div>
                    <h3 class="service-title">Brand Identity</h3>
                    <p class="service-description">
                        Developing distinctive visual identities that capture your brand's essence and resonate with your audience.
                    </p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i data-lucide="megaphone"></i>
                    </div>
                    <h3 class="service-title">Digital Marketing</h3>
                    <p class="service-description">
                        Strategic marketing solutions to boost your online presence and connect with your target audience.
                    </p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i data-lucide="layout-template"></i>
                    </div>
                    <h3 class="service-title">Motion Design</h3>
                    <p class="service-description">
                        Bringing interfaces to life with smooth animations and interactive elements that delight users.
                    </p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i data-lucide="smartphone"></i>
                    </div>
                    <h3 class="service-title">App Development</h3>
                    <p class="service-description">
                        Creating mobile applications that provide seamless experiences across iOS and Android platforms.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Portfolio</span>
                <h2 class="section-title">Featured <span class="accent">Work</span></h2>
            </div>
            
            <div class="portfolio-filters">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="design">Design</button>
                <button class="filter-btn" data-filter="development">Development</button>
                <button class="filter-btn" data-filter="branding">Branding</button>
            </div>
            
            <div class="portfolio-grid">
                <div class="portfolio-item" data-category="development">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop" alt="Project 1">
                    </div>
                    <div class="portfolio-overlay">
                        <span class="portfolio-category">Development</span>
                        <h3 class="portfolio-title">E-Commerce Platform</h3>
                        <a href="#" class="portfolio-link">View Project <i data-lucide="arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="portfolio-item" data-category="design">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?w=600&h=400&fit=crop" alt="Project 2">
                    </div>
                    <div class="portfolio-overlay">
                        <span class="portfolio-category">Design</span>
                        <h3 class="portfolio-title">Mobile App UI</h3>
                        <a href="#" class="portfolio-link">View Project <i data-lucide="arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="portfolio-item" data-category="branding">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1542744094-3a31f272c490?w=600&h=400&fit=crop" alt="Project 3">
                    </div>
                    <div class="portfolio-overlay">
                        <span class="portfolio-category">Branding</span>
                        <h3 class="portfolio-title">Brand Identity</h3>
                        <a href="#" class="portfolio-link">View Project <i data-lucide="arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="portfolio-item" data-category="development">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?w=600&h=400&fit=crop" alt="Project 4">
                    </div>
                    <div class="portfolio-overlay">
                        <span class="portfolio-category">Development</span>
                        <h3 class="portfolio-title">SaaS Dashboard</h3>
                        <a href="#" class="portfolio-link">View Project <i data-lucide="arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="portfolio-item" data-category="design">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&h=400&fit=crop" alt="Project 5">
                    </div>
                    <div class="portfolio-overlay">
                        <span class="portfolio-category">Design</span>
                        <h3 class="portfolio-title">Website Redesign</h3>
                        <a href="#" class="portfolio-link">View Project <i data-lucide="arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="portfolio-item" data-category="branding">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1600132806370-bf17e65e942f?w=600&h=400&fit=crop" alt="Project 6">
                    </div>
                    <div class="portfolio-overlay">
                        <span class="portfolio-category">Branding</span>
                        <h3 class="portfolio-title">Logo Design</h3>
                        <a href="#" class="portfolio-link">View Project <i data-lucide="arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="contact-bg">
            <div class="contact-gradient"></div>
        </div>
        
        <div class="container">
            <div class="section-header">
                <span class="section-label">Contact</span>
                <h2 class="section-title">Let's Work <span class="accent">Together</span></h2>
            </div>
            
            <div class="contact-wrapper">
                <div class="contact-info">
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <i data-lucide="mail"></i>
                        </div>
                        <div class="contact-details">
                            <span class="contact-label">Email</span>
                            <a href="mailto:jasonduru17@gmail.com">jasonduru17@gmail.com</a>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <i data-lucide="phone"></i>
                        </div>
                        <div class="contact-details">
                            <span class="contact-label">Phone</span>
                            <a href="tel:+1234567890">+234 9030943109</a>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <i data-lucide="map-pin"></i>
                        </div>
                        <div class="contact-details">
                            <span class="contact-label">Location</span>
                            <span>Lagos, Nigeria</span>
                        </div>
                    </div>
                </div>
                
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <input type="text" id="name" name="name" required>
                        <label for="name">Your Name</label>
                    </div>
                    
                    <div class="form-group">
                        <input type="email" id="email" name="email" required>
                        <label for="email">Email Address</label>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" id="subject" name="subject" required>
                        <label for="subject">Subject</label>
                    </div>
                    
                    <div class="form-group">
                        <textarea id="message" name="message" rows="5" required></textarea>
                        <label for="message">Your Message</label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary submit-btn">
                        <span>Send Message</span>
                        <i data-lucide="send"></i>
                    </button>
                    
                    <div class="form-message" id="formMessage"></div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <a href="#" class="logo">NOV<span>A</span></a>
                    <p class="footer-tagline">Crafting digital experiences that inspire.</p>
                </div>
                
                <div class="footer-social">
                    <a href="#" class="social-link" aria-label="Twitter">
                        <i data-lucide="twitter"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Instagram">
                        <i data-lucide="instagram"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <i data-lucide="linkedin"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Dribbble">
                        <i data-lucide="dribbble"></i>
                    </a>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2026 NOVA. All rights reserved.</p>
                <button class="back-to-top" id="backToTop" aria-label="Back to top">
                    <i data-lucide="arrow-up"></i>
                </button>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="js/main.js"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
