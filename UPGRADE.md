# Upgrading from 1.x to 2.x

## Updating dependencies

```
composer require jubeki/nova-card-linkable:^2.0
```

## Moving Cards From NovaServiceProvider to Dashboard

In Nova 3 there was only on dashboard with cards. You need to move your cards to the new Dashboard where you want to add them.

## Default Config

You can now specify certain options in the config file `config/nova-card-linkable.php`.

To publish the default config simply run:
```
php artisan vendor:publish --provider=""
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
        'layout' => 'flex flex-col items-center justify-center p-6',
    
        /*
         | Define the default theming of the Cards (Consider dark mode)
         */
        'colors' => 'bg-white text-80 hover:bg-50 hover:text-80',
    
        /*
         | Define the default theming of the title of the Cards
         */
        'title' => 'text-3xl font-light',
    
        /*
         | Define the default theming of the subtitle of the Cards
         */
        'subtitle' => 'text-base font-light',
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
$card->theme([
    'layout' => 'flex flex-col items-center justify-center p-6',
    'colors' => 'bg-white text-80 hover:bg-50 hover:text-80',
    'title' => 'text-3xl font-light',
    'subtitle' => 'text-base font-light',
]);
```

### Linkable

You have nothing todo

### Linkable Away

You have nothing todo.

### Linkable Router

Because Nova 4 uses the Inertia Router instead of the Vue Router, you will need to change the url:

<!-- TODO: Upgrade from Vue Router to Inertia Router -->
