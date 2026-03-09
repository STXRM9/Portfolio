# Professional Portfolio Website

A modern, organized, and production-ready portfolio website built with Laravel and Tailwind CSS.

## Features

- **Responsive Design** - Works perfectly on all devices
- **SEO Optimized** - Meta tags, sitemap.xml, and robots.txt included
- **Easy Configuration** - All settings in one config file
- **Contact Form** - Working form with validation
- **Project Showcase** - Filterable project gallery
- **Professional Navigation** - Clean, organized structure

## Quick Setup

### 1. Configure Your Portfolio

Copy the example env file and update with your information:

```bash
cp .env.portfolio.example .env
```

Then edit `.env` with your details:
- Your name
- Email, phone, location
- Social media links
- Skills and projects
- And more...

### 2. Update Configuration

All portfolio settings are in [`config/portfolio.php`](config/portfolio.php). Update:
- Site name and title
- Contact information  
- Social links
- Skills and experience
- Projects
- Statistics

### 3. Clear Config Cache

```bash
php artisan config:clear
php artisan cache:clear
```

### 4. Build Assets

```bash
npm install
npm run build
```

### 5. Run Locally

```bash
php artisan serve
```

Visit `http://127.0.0.1:8000` to see your portfolio.

## Configuration Options

### Site Information
```env
PORTFOLIO_NAME=Your Name
PORTFOLIO_TITLE=Full Stack Developer
PORTFOLIO_TAGLINE=Building beautiful web experiences
PORTFOLIO_DESCRIPTION=Your bio/description
```

### Contact Information
```env
PORTFOLIO_EMAIL=hello@yourportfolio.com
PORTFOLIO_PHONE=+1 (555) 123-4567
PORTFOLIO_LOCATION=San Francisco, CA
```

### Social Links (leave empty to hide)
```env
PORTFOLIO_GITHUB=https://github.com/yourusername
PORTFOLIO_LINKEDIN=https://linkedin.com/in/yourusername
PORTFOLIO_TWITTER=https://twitter.com/yourusername
```

### Statistics
```env
PORTFOLIO_YEARS_EXPERIENCE=5+
PORTFOLIO_PROJECTS_COMPLETED=50+
PORTFOLIO_HAPPY_CLIENTS=30+
PORTFOLIO_SATISFACTION=100%
```

### Resume
```env
PORTFOLIO_RESUME_URL=https://yourdomain.com/resume.pdf
```

## Deployment

### For Shared Hosting (cPanel, etc.)

1. Build the assets:
```bash
npm run build
```

2. Upload all files to public_html

3. Point your domain to the `public` folder

4. Ensure storage folder is writable:
```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

### For VPS/Dedicated Server

1. Clone/upload the project

2. Install dependencies:
```bash
composer install
npm install
npm run build
```

3. Set up environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure your portfolio:
```bash
cp .env.portfolio.example .env
# Edit .env with your details
```

5. Optimize:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### For Laravel Forge / Vapor / Heroku

1. Connect your repository
2. Set environment variables in dashboard
3. Deploy!

## Updating Projects & Skills

Edit [`config/portfolio.php`](config/portfolio.php):

```php
'projects' => [
    [
        'title' => 'Project Name',
        'description' => 'Description here',
        'category' => 'web', // web, mobile, ecommerce
        'technologies' => ['React', 'Node.js'],
        'image' => '🚀', // emoji or image path
        'gradient' => 'from-indigo-500 to-purple-600',
        'link' => '#',
    ],
],
```

## Adding Custom Pages

1. Create route in `routes/web.php`:
```php
Route::get('/custom-page', [PortfolioController::class, 'customPage'])->name('custom');
```

2. Add method to `PortfolioController`:
```php
public function customPage()
{
    return view('portfolio.custom');
}
```

3. Create view in `resources/views/portfolio/custom.blade.php`

## SEO Tips

1. Update [`public/robots.txt`](public/robots.txt) with your actual domain
2. Generate sitemaps for search engines using tools like spatie/laravel-sitemap
3. Submit sitemap to Google Search Console
4. Add Open Graph images for social sharing

## Troubleshooting

### Assets not loading?
```bash
npm run build
php artisan view:clear
php artisan cache:clear
```

### Config changes not showing?
```bash
php artisan config:clear
```

### Contact form not working?
- Check mail configuration in `.env`
- For testing, use mailtrap.io

## License

MIT License - Feel free to use for your own portfolio!
