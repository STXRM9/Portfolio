<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Home</title>
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="#home" class="logo">Portfolio</a>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="hero-content">
                <h1>Welcome to My <span>Portfolio</span></h1>
                <p class="subtitle">Creative Developer & Designer crafting beautiful digital experiences</p>
                <a href="#projects" class="btn">View My Work</a>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container">
                <div class="section-header fade-in">
                    <h2>About Me</h2>
                    <p>Passionate about creating elegant solutions to complex problems</p>
                </div>
                <div class="about-content">
                    <div class="about-text fade-in">
                        <h3>Building Digital Experiences That Matter</h3>
                        <p>I am a passionate developer dedicated to creating beautiful, functional websites and applications. With a focus on clean code and user experience, I strive to bring ideas to life through elegant solutions.</p>
                        <p>My approach combines technical expertise with creative thinking to deliver results that not only meet but exceed expectations. I believe in continuous learning and staying updated with the latest technologies.</p>
                        
                        <div class="skills">
                            <span class="skill-tag">HTML5</span>
                            <span class="skill-tag">CSS3</span>
                            <span class="skill-tag">JavaScript</span>
                            <span class="skill-tag">React</span>
                            <span class="skill-tag">Node.js</span>
                            <span class="skill-tag">UI/UX Design</span>
                            <span class="skill-tag">Git</span>
                        </div>
                    </div>
                    <div class="about-stats fade-in">
                        <div class="stat-item">
                            <span class="number">5+</span>
                            <span class="label">Years Exp.</span>
                        </div>
                        <div class="stat-item">
                            <span class="number">50+</span>
                            <span class="label">Projects</span>
                        </div>
                        <div class="stat-item">
                            <span class="number">30+</span>
                            <span class="label">Clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="projects">
            <div class="container">
                <div class="section-header fade-in">
                    <h2>My Projects</h2>
                    <p>A selection of my recent work across various industries</p>
                </div>
                <div class="projects-grid">
                    <div class="project-card">
                        <div class="project-image">
                            <div class="project-icon">💼</div>
                        </div>
                        <div class="project-content">
                            <h3>E-Commerce Platform</h3>
                            <p>A full-featured online store with secure payments, inventory management, and responsive design for seamless shopping on any device.</p>
                            <div class="project-tags">
                                <span class="project-tag">React</span>
                                <span class="project-tag">Node.js</span>
                                <span class="project-tag">MongoDB</span>
                            </div>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="project-image">
                            <div class="project-icon">📱</div>
                        </div>
                        <div class="project-content">
                            <h3>Mobile App</h3>
                            <p>A cross-platform mobile application with intuitive UI, real-time features, and offline capabilities for enhanced user experience.</p>
                            <div class="project-tags">
                                <span class="project-tag">React Native</span>
                                <span class="project-tag">Firebase</span>
                                <span class="project-tag">Redux</span>
                            </div>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="project-image">
                            <div class="project-icon">🎨</div>
                        </div>
                        <div class="project-content">
                            <h3>Portfolio Website</h3>
                            <p>A modern, responsive portfolio website featuring smooth animations, clean design, and optimal performance across all devices.</p>
                            <div class="project-tags">
                                <span class="project-tag">HTML/CSS</span>
                                <span class="project-tag">JavaScript</span>
                                <span class="project-tag">Animation</span>
                            </div>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="project-image">
                            <div class="project-icon">📊</div>
                        </div>
                        <div class="project-content">
                            <h3>Dashboard System</h3>
                            <p>An analytics dashboard with data visualization, real-time updates, and customizable widgets for business intelligence.</p>
                            <div class="project-tags">
                                <span class="project-tag">Vue.js</span>
                                <span class="project-tag">D3.js</span>
                                <span class="project-tag">API</span>
                            </div>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="project-image">
                            <div class="project-icon">🔒</div>
                        </div>
                        <div class="project-content">
                            <h3>Authentication System</h3>
                            <p>Secure user authentication with OAuth, two-factor verification, and role-based access control for web applications.</p>
                            <div class="project-tags">
                                <span class="project-tag">Node.js</span>
                                <span class="project-tag">JWT</span>
                                <span class="project-tag">Security</span>
                            </div>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="project-image">
                            <div class="project-icon">🌐</div>
                        </div>
                        <div class="project-content">
                            <h3>CMS Platform</h3>
                            <p>A custom content management system with rich text editing, media management, and SEO optimization tools.</p>
                            <div class="project-tags">
                                <span class="project-tag">PHP</span>
                                <span class="project-tag">MySQL</span>
                                <span class="project-tag">JavaScript</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container">
                <div class="section-header fade-in">
                    <h2>Get In Touch</h2>
                    <p>Have a project in mind or want to collaborate? Let's talk!</p>
                </div>
                <div class="contact-content fade-in">
                    <p>Feel free to reach out for collaborations, project inquiries, or just to say hello. I'm always open to discussing new opportunities and creative ideas.</p>
                    <div class="contact-links">
                        <a href="mailto:jasonduru17@gmail.com" class="contact-link">
                            <span>📧</span> Email Me
                        </a>
                        <a href="#" class="contact-link">
                            <span>💼</span> LinkedIn
                        </a>
                        <a href="#" class="contact-link">
                            <span>🐙</span> GitHub
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2026 Portfolio. All rights reserved.</p>
            <div class="footer-links">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </footer>

    <script src="../JavaScript/script.js"></script>
</body>
</html>
