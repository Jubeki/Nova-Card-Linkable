# Upgrading from 1.x to 2.x

## Updating dependencies

```
composer require jubeki/nova-card-linkable:^2.0
```

## Moving Cards From NovaServiceProvider to Dashboard

In Nova 3 there was only one dashboard with cards. You need to move your cards to the new Dashboard where you want to add them.

## Default Config

You can now specify certain options in the config file `config/nova-card-linkable.php`.

To publish the default config simply run:
```
php artisan vendor:publish --provider="Jubeki\Nova\Cards\Linkable\CardServiceProvider"
```

Here is also a look at the default config:
```php
<?php

return [

    /*
     | Defines the Theme of the Cards
     */
    'theme' => [

        /*
         | Define the default layout of the Cards
         */
        'layout' => 'p-3 flex flex-col items-center justify-center h-full',
        /*
         | Define the default theming of the Cards
         */
        'colors' => 'text-90 hover:text-primary-600',
    
        /*
         | Define the default theming of the title of the Cards
         */
        'title' => 'text-3xl font-light text-center',
    
        /*
         | Define the default theming of the subtitle of the Cards
         */
        'subtitle' => 'text-lg font-light text-center',
    ],

    /*
     | Define the default width of the Card
     */
    'width' => '1/3',
];
```

## Uprading the Cards

The way how the theming is treated has changed. You may now simply pass the theming of the card you want. Please be aware that the default config will be merged recursivly into the theme if one array-key is not provided.

```php
$linkable->theme([
    'layout' => 'p-3 flex flex-col items-center justify-center h-full',
    'colors' => 'text-90 hover:text-primary-600',
    'title' => 'text-3xl font-light text-center',
    'subtitle' => 'text-lg font-light text-center',
]);
```

`themeHover` was completely removed.

### Linkable

You have nothing further todo

### Linkable Away

You have nothing further todo.

### Linkable Router

REMOVED  
Because Nova 4 uses the Inertia Router instead of the Vue Router, you can no longer pass an javascript object with path options.
