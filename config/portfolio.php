<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Site Information
    |--------------------------------------------------------------------------
    |
    | Basic information about your portfolio website.
    |
    */
    'name' => env('PORTFOLIO_NAME', 'Sure Profile'),
    'title' => env('PORTFOLIO_TITLE', 'Full Stack Developer'),
    'tagline' => env('PORTFOLIO_TAGLINE', 'Building beautiful and functional web experiences'),
    'description' => env('PORTFOLIO_DESCRIPTION', 'A passionate developer crafting beautiful and functional web experiences'),
    
    /*
    |--------------------------------------------------------------------------
    | Contact Information
    |--------------------------------------------------------------------------
    |
    | Your contact details that will be displayed on the website.
    |
    */
    'email' => env('PORTFOLIO_EMAIL', 'hello@sureprofile.com'),
    'phone' => env('PORTFOLIO_PHONE', '+1 (555) 123-4567'),
    'location' => env('PORTFOLIO_LOCATION', 'San Francisco, CA'),
    'availability' => env('PORTFOLIO_AVAILABILITY', 'Available for freelance work'),
    
    /*
    |--------------------------------------------------------------------------
    | Social Links
    |--------------------------------------------------------------------------
    |
    | Your social media profiles. Leave empty to hide the link.
    |
    */
    'social' => [
        'github' => env('PORTFOLIO_GITHUB', 'https://github.com/yourusername'),
        'linkedin' => env('PORTFOLIO_LINKEDIN', 'https://linkedin.com/in/yourusername'),
        'twitter' => env('PORTFOLIO_TWITTER', 'https://twitter.com/yourusername'),
        'facebook' => env('PORTFOLIO_FACEBOOK', ''),
        'instagram' => env('PORTFOLIO_INSTAGRAM', ''),
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Resume/CV
    |--------------------------------------------------------------------------
    |
    | URL to your resume/CV. Leave empty to hide the download button.
    |
    */
    'resume_url' => env('PORTFOLIO_RESUME_URL', ''),
    
    /*
    |--------------------------------------------------------------------------
    | Statistics
    |--------------------------------------------------------------------------
    |
    | Statistics to display on the about page.
    |
    */
    'stats' => [
        'years_experience' => env('PORTFOLIO_YEARS_EXPERIENCE', '5+'),
        'projects_completed' => env('PORTFOLIO_PROJECTS_COMPLETED', '50+'),
        'happy_clients' => env('PORTFOLIO_HAPPY_CLIENTS', '30+'),
        'satisfaction' => env('PORTFOLIO_SATISFACTION', '100%'),
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Skills
    |--------------------------------------------------------------------------
    |
    | Skills to display on the homepage and about page.
    |
    */
    'skills' => [
        'frontend' => [
            'React / React Native',
            'Vue.js',
            'JavaScript / TypeScript',
            'Tailwind CSS',
            'HTML5 / CSS3',
        ],
        'backend' => [
            'Laravel / PHP',
            'Node.js',
            'Python',
            'REST APIs',
            'GraphQL',
        ],
        'tools' => [
            'Git / GitHub',
            'Docker',
            'AWS / Cloud',
            'PostgreSQL / MongoDB',
            'CI/CD',
        ],
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Timeline
    |--------------------------------------------------------------------------
    |
    | Work experience timeline entries.
    |
    */
    'timeline' => [
        [
            'period' => '2022 - Present',
            'title' => 'Senior Full Stack Developer',
            'description' => 'Leading development of enterprise web applications and mentoring junior developers.',
        ],
        [
            'period' => '2020 - 2022',
            'title' => 'Full Stack Developer',
            'description' => 'Built and maintained multiple client projects using React, Node.js, and Laravel.',
        ],
        [
            'period' => '2018 - 2020',
            'title' => 'Junior Developer',
            'description' => 'Started my professional journey building responsive websites and learning modern frameworks.',
        ],
        [
            'period' => '2014 - 2018',
            'title' => "Bachelor's in Computer Science",
            'description' => 'University of Technology - Graduated with honors',
            'is_education' => true,
        ],
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Projects
    |--------------------------------------------------------------------------
    |
    | Featured projects to display on the homepage and projects page.
    |
    */
    'projects' => [
        [
            'title' => 'E-Commerce Platform',
            'description' => 'A full-featured online shopping platform with cart management and payment processing.',
            'category' => 'web',
            'technologies' => ['React', 'Node.js'],
            'image' => '🛒',
            'gradient' => 'from-indigo-500 to-purple-600',
            'link' => '#',
        ],
        [
            'title' => 'Task Management App',
            'description' => 'A collaborative task management application with real-time updates.',
            'category' => 'web',
            'technologies' => ['Vue.js', 'Laravel'],
            'image' => '📱',
            'gradient' => 'from-pink-500 to-rose-600',
            'link' => '#',
        ],
        [
            'title' => 'Analytics Dashboard',
            'description' => 'Real-time analytics dashboard with interactive charts.',
            'category' => 'web',
            'technologies' => ['React', 'D3.js'],
            'image' => '📊',
            'gradient' => 'from-cyan-500 to-blue-600',
            'link' => '#',
        ],
        [
            'title' => 'Learning Management System',
            'description' => 'Online education platform with course management.',
            'category' => 'web',
            'technologies' => ['Laravel', 'Vue.js'],
            'image' => '🎓',
            'gradient' => 'from-green-500 to-emerald-600',
            'link' => '#',
        ],
        [
            'title' => 'Food Delivery App',
            'description' => 'Mobile application for food ordering with real-time tracking.',
            'category' => 'mobile',
            'technologies' => ['React Native', 'Node.js'],
            'image' => '🍽️',
            'gradient' => 'from-orange-500 to-amber-600',
            'link' => '#',
        ],
        [
            'title' => 'Real-time Chat Application',
            'description' => 'Instant messaging app with real-time communication.',
            'category' => 'web',
            'technologies' => ['Socket.io', 'React'],
            'image' => '💬',
            'gradient' => 'from-violet-500 to-purple-600',
            'link' => '#',
        ],
    ],
    
    /*
    |--------------------------------------------------------------------------
    | SEO Settings
    |--------------------------------------------------------------------------
    |
    | Search engine optimization settings.
    |
    */
    'seo' => [
        'site_name' => env('PORTFOLIO_SITE_NAME', 'Sure Profile'),
        'title_separator' => '|',
        'default_title' => env('PORTFOLIO_DEFAULT_TITLE', 'Sure Profile - Full Stack Developer'),
        'default_description' => env('PORTFOLIO_DESCRIPTION', 'A passionate developer crafting beautiful and functional web experiences'),
        'keywords' => ['developer', 'portfolio', 'web developer', 'full stack', 'react', 'laravel', 'vue.js'],
        'author' => env('PORTFOLIO_NAME', 'Sure Profile'),
        'locale' => 'en_US',
    ],
];
