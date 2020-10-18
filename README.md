# izt/Helpers

Helpers, functions, ...

Basic translations

Datatables translations

Abstract classes (Repository, Present ...)

Basic classes (Language)

Basic assets (datatables, jquery, ckeditor, ...)

Theme (core ui)

Basic views (layouts, errors)

## Installation

```
composer require izt/Helpers
```

## Usage

You must publish the configuration file in config/helpers.php to change the User model of your project

```
php artisan vendor:publish --force    
choose the tag izt-helpers-config
```

You can publish the assets in public/helpers folder
```
php artisan vendor:publish --force   
choose the tag izt-helpers-assets
```

You must publish the basics errors views in resources/views/errors folder
```
php artisan vendor:publish --force   
choose the tag izt-helpers-views
```

You must publish the translations in resources/lang folder
```
php artisan vendor:publish --force   
choose the tag izt-helpers-lang
```

## Require

- php 7.2
- league/fractal
- laravel 6

## Problems

- lang/validation/attributes => aplikazio guztienak hemen gehitu behar dira

    
