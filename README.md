# Giant Book Supplier - ASG1 Web Programming
By Alexandro Alvin Valentino - PPTI 11 - 2502040902

## Installation
Install the laravel framework and the composer dependencies

```sh
composer install
cp .env.example .env
```
open .env file and edit the database name, username and password

```sh
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```

if the database is not seeding, u can use this
```sh
php artisan db:seed --class=PublishersSeeder
php artisan db:seed --class=CategoriesSeeder
php artisan db:seed --class=BookSeeder
php artisan db:seed --class=BookCategorySeeder
```

Install the node dependencies
```sh
npm install
npm run build
```

## Usage
```sh
php artisan serve
```