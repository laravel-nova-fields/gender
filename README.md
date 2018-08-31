# A simple gender field for Laravel Nova apps

This package contains a *very* simple Laravel Nova gender field. It is basically an extended select field, like the native country or timezone fields.

## Installation

You can install this package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require laravel-nova-fields/gender
```

To publish the config file to `config/laravel-nova-fields-gender.php` run:

```bash
php artisan vendor:publish --provider="LaravelNovaFields\Gender\FieldServiceProvider"
```

The contents of this configuration can be modified to modify the various default and extended genders.

## Usage

You can use the `LaravelNovaFields\Gender\Gender` field in your Nova resource:

```php
namespace App\Nova;

use LaravelNovaFields\Gender\Gender;

// ...

class Person extends Resource
{
    // ...

    public function fields(Request $request)
    {
        return [
            // ...

            Gender::make('Gender')
                ->includeExtended(), // includes extended gender set

            // ...
        ];
    }
}
```

## License

The MIT License (MIT).
