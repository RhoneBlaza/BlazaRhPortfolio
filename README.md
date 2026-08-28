# RhonePortfolio

A personal portfolio website for **Rhone Blaza**, a BSIT student and web developer. Showcases education, skills, and projects — built with Laravel, Blade, and Tailwind CSS.

## Features

- Personal introduction with contact details and links to LinkedIn and GitHub
- Education history grouped by type (formal education and certifications)
- Categorized skills section
- Project showcase with GitHub links and live demos
- Dark mode toggle with localStorage persistence and OS preference fallback
- Active navigation highlighting with IntersectionObserver

## Requirements

- PHP 8.3+
- Composer
- Node.js & npm

## Installation

```bash
# Install PHP dependencies
composer install

# Create the environment file and generate an app key
cp .env.example .env
php artisan key:generate

# Install and build frontend assets
npm install
npm run build

# Serve the application
php artisan serve
```

Alternatively, run `composer run setup` to perform all setup steps.

Then visit `http://localhost:8000` in your browser.

## Running Locally (with hot reload)

```bash
composer run dev
```

## Testing

```bash
php artisan test
```

## License

This project is open-sourced under the MIT License.