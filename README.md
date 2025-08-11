# TodoList Manager

A focused to‑do app to capture and organize tasks with titles, descriptions, priorities, and due dates. Streamlined modal workflow, toast confirmations, and pagination for large lists.

## Features
- Create, validate, and manage personal to‑do lists
- Priorities and due dates with server‑side checks
- Modal-driven input and toast feedback
- Responsive UI with pagination

## Prerequisites
- PHP >= 8.2, Composer
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


## Development
```shell script
# Run Laravel server
php artisan serve

# Run dev build with HMR
npm run dev
```


## Production build
```shell script
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```


## Testing
```shell script
php artisan test
```


## Deployment
- Set APP_ENV=production and APP_DEBUG=false
- Run migrations and assets build on the server
- Configure queue/cache/session drivers as needed
