# TodoList Manager

A focused to‑do app to capture and organize tasks with titles, descriptions, priorities, and due dates. Streamlined modal workflow, toast confirmations, and pagination for large lists.

## Features
- Create, validate, and manage personal to‑do lists
- Priorities and due dates with server‑side checks
- Modal-driven input and toast feedback
- Responsive UI with pagination

## Tech Stack 💻
- [Laravel](https://laravel.com)
- [Livewire](https://livewire.laravel.com)
- [FluxUI](https://fluxui.dev)
- [Tailwind](https://tailwindcss.com)

## Prerequisites
- PHP >= 8.3, Composer
- Node.js >= 20, npm
- Database (MySQL/PostgreSQL/SQLite)
- OpenSSL, ext-zip, and common PHP extensions

## Setup
```shell script
# Clone and install
git clone <repository-url> && cd <project-folder>
cp .env.example .env

# PHP deps and app key
composer install
php artisan key:generate

# Configure database in .env, then migrate
php artisan migrate

# JS/CSS deps
npm install
```


## Running the App

You can start the development server and asset compiler separately:

```bash
php artisan serve
npm run dev
```

**Or**, you can run both commands simultaneously with one command:

```bash
composer run dev
```


## Production build
```shell script
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```
