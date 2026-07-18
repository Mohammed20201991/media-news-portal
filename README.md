# Media News Portal

A media/news portal built with **Laravel 10** and **Voyager Admin Panel**.

## Installation

The installation was performed following the official Voyager tutorial:
https://voyager.devdojo.com/academy/installation/

### 1. Create the Laravel project

```bash
composer create-project laravel/laravel media-news-portal "10.*"
```

### 2. Enter the project directory

```bash
cd media-news-portal
```

### 3. Install Voyager

```bash
composer require tcg/voyager
```
## Prerequisites

Before installing the project, ensure the following software is available on your system:

| Component       | Required Version          | Notes                                      |
| --------------- | ------------------------- | ------------------------------------------ |
| PHP             | 8.2.x or higher           | Project developed with PHP 8.2.12          |
| Composer        | 2.x                       | Dependency manager for Laravel             |
| MySQL / MariaDB | MySQL 8+ or MariaDB 10.5+ | Database server                            |
| Git             | 2.x or higher             | Version control                            |
| Node.js         | Optional                  | Needed only for frontend asset compilation |

### Verify the installation

```bash
php -v
composer -V
git --version
```

### Create the database

Create a database before running the Voyager installer:

```sql
CREATE DATABASE media_news CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```


### 4. Configure the database in `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=voyager
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Install Voyager with dummy data

```bash
php artisan voyager:install --with-dummy
```

This command installs:

* Voyager admin panel
* Roles and permissions
* Sample posts and pages
* Categories
* Demo settings
* A demo administrator account (if no users exist)

### 6. Start the development server

```bash
php artisan serve
```

## Demo Admin Credentials

When installed with `--with-dummy`, Voyager creates the following account (if no users already existed):

```text
Email: admin@admin.com
Password: password
```

## Git Setup

```bash
git init
git branch -M main
git remote add origin https://github.com/Mohammed20201991/media-news-portal.git
```

### Create the Voyager setup branch

```bash
git checkout -b voyager-setup
```

### Commit and push

```bash
git add .
git commit -m "Install Voyager with dummy data"
git push -u origin voyager-setup
```

## Current Status

✅ Laravel 10 installed 

✅ Voyager installed

✅ Voyager dummy data installed

✅ Admin panel working at `/admin`

✅ Git repository initialized

✅ GitHub private repository connected

✅ `voyager-setup` branch pushed
