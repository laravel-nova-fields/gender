# A simple gender field for Laravel Nova apps

This package contains a *very* simple Laravel Nova gender field. It is basically an extended select field, like the native country or timezone fields.

## Installation

You can install this package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require laravel-nova-fields/gender
```

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

            Gender::make('Gender'),

            // ...
        ];
    }
}
```

## License

The MIT License (MIT).
