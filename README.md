# IT WEEK 2025 Landing Page

A responsive landing page for IT WEEK 2025 built with Laravel and TailwindCSS.

## Features

- Responsive design using TailwindCSS
- Laravel Blade templating
- Hero section with call-to-action
- About section with event information
- Events/Activities section with featured activities
- Contact/Registration section with form
- Clean, modern UI with smooth scrolling navigation

## Setup Instructions

1. Create a new Laravel project:
   ```bash
   composer create-project laravel/laravel itweek2025_landing
   ```

2. Configure the `.env` file:
   ```bash
   APP_NAME=IT WEEK 2025
   APP_URL=http://localhost:8000
   ```

3. Run the development server:
   ```bash
   php artisan serve
   ```

4. Visit `http://localhost:8000` in your browser.

## Project Structure

```
itweek2025_landing/
├── app/
│   └── Http/
│       ├── Controllers/
│       │   └── LandingPageController.php
│       └── Middleware/
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       └── landing.blade.php
├── routes/
│   └── web.php
├── public/
│   └── banner.jpg
└── .env
```

## Sections Included

1. **Hero Section**: Main title, subtitle, and CTA button
2. **About Section**: Event description, objectives, and participants
3. **Events Section**: Featured activities (Robot Making, Coding Competitions, Cosplay, Workshops, Exhibits, Hackathon)
4. **Contact/Registration Section**: Registration information and contact form

## Technologies Used

- Laravel Framework
- PHP
- Blade Templating
- TailwindCSS
- HTML5
- CSS3
- JavaScript

## Bonus Features Implemented

- Navbar scroll-to-section functionality
- Responsive design for mobile devices
- Modern UI with hover effects and transitions