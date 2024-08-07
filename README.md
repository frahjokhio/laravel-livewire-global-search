
# Global Search with Laravel Livewire, Scout, and Tailwind CSS

This boilerplate provides a quick solution for implementing a global search feature in your Laravel application, styled with Tailwind CSS. It simplifies the process of setting up a real-time search interface across multiple models using Laravel Livewire and Scout.

## Features
- **Livewire**: Dynamic, real-time search functionality with minimal JavaScript.
- **Laravel Scout**: Full-text search capabilities using the database driver.
- **Tailwind CSS**: Modern and responsive styling for the search interface.

## Installation

### Clone the Repository

```
git clone https://github.com/frahjokhio/laravel-livewire-global-search.git
cd laravel-livewire-global-search
```

### Install Dependencies

```
composer install
```

### Configure Environment Variables

Create a MySQL database for your application. You can name it global_search or any name you prefer.

in your .env file

```
DB_DATABASE=global_search
```

Configure Scout to use the database driver for searching

```
SCOUT_DRIVER=database
```

### Run Migration and Seed

```
php artisan migrate --seed
```

### Serve the Application

```
php artisan serve
```

### Access the Payment Page

Navigate to http://localhost:8000 to see the global search feature in action.
