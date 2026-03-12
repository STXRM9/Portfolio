# GitHub Pages Deployment Guide

This project now includes React integration for hosting a static version on GitHub Pages.

## Quick Start (Manual Deployment)

1. **Copy the static files to a new repository:**
   - Copy `public/index.html` to your GitHub Pages repository
   - The HTML file is fully self-contained and works offline

2. **Or use the automated deployment:**
   - Push this project to GitHub
   - Go to Repository Settings → Pages
   - Select "Deploy from a branch"
   - Choose the `gh-pages` branch (after first deployment)

## Automated Deployment via GitHub Actions

This project includes a GitHub Actions workflow that automatically deploys to GitHub Pages:

1. Push your code to GitHub
2. Go to **Actions** tab
3. Enable GitHub Pages in repository settings:
   - Source: **GitHub Actions**
4. The workflow will automatically deploy on push to main branch

## Files for GitHub Pages

- [`public/index.html`](public/index.html) - Standalone React app (works without PHP)
- [`.nojekyll`](.nojekyll) - Prevents GitHub from ignoring files
- [`.github/workflows/deploy.yml`](.github/workflows/deploy.yml) - CI/CD workflow

## Building for Production

```bash
# Install dependencies
npm install

# Build the assets
npm run build
```

## Important Notes

- The `public/index.html` is a **standalone static version** that works without PHP
- It uses CDN versions of React, ReactDOM, and Babel for immediate functionality
- For the full Laravel experience, use the original server-side rendered pages
- GitHub Pages only supports static content (no PHP/database)

## Customization

Edit the React components in [`resources/js/components/`](resources/js/components/) to customize:
- Portfolio content
- About page information  
- Projects list
- Contact form

After changes, copy `public/index.html` to your deployment location.
