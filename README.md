# Linkable Cards for Laravel Nova

> ⚠️ These docs are for the latest version. If you are using an older version you can find the docs for previous releases [here](https://github.com/Jubeki/Nova-Card-Linkable/tree/1.x#readme). To upgrade from `1.x` to `2.x` please take a look at the [Upgrade Guide](UPGRADE.md)

## Add Cards to Laravel Nova which link to another page

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jubeki/nova-card-linkable.svg?style=flat-square)](https://packagist.org/packages/jubeki/nova-card-linkable)
[![Total Downloads](https://img.shields.io/packagist/dt/jubeki/nova-card-linkable.svg?style=flat-square)](https://packagist.org/packages/jubeki/nova-card-linkable)

* [Requirements](#requirements)
* [Installation](#installation)
* [Upgrading from 1.x to 2.x](#upgrading-from-1.x-to-2.x)
* [Cards](#cards)
    * [Linkable](#linkable)
    * [Linkable Away](#linkable-away)
    * [Linkable Router](#linkable-router)

## Requirements

* [Laravel v8.x](https://laravel.com/docs/8.x) or [v9.x](https://laravel.com/docs/9.x)
* [Laravel Nova v4.x](https://nova.laravel.com/docs/4.0/)

## Installation

Just run:  
```
composer require jubeki/nova-card-linkable
```
After this the setup will be complete and you can use the components listed here.

## Upgrading from 1.x to 2.x

To upgrade from `1.x` to `2.x` please take a look at the [Upgrade Guide](UPGRADE.md)

## Cards

What is the difference between the card types?
* **Linkable:** Links to a page in your application
* **Linkable Away:** Links to a page which is outside of your application
* **Linkable Router:** Uses the [Inertia-Router](https://inertiajs.com/routing) to link to a page

The Design is the same for all of them and most of the options are also the same, so they will be listed here.

#### Default Design
![Shows the Card types](card.png)
<!-- TODO: New Image for Laravel Nova 4 -->

## Usage

<!-- TODO: Upgrade usage for Laravel Nova 4 -->
```php
// in app/Nova/Dashboards/Main.php

namespace App\Nova\Dashboards;

use Jubeki\Nova\Cards\Linkable\Linkable;
use Jubeki\Nova\Cards\Linkable\LinkableAway;
use Jubeki\Nova\Cards\Linkable\LinkableRouter;
use Laravel\Nova\Dashboard;

class Main extends Dashboard
{
    public function cards()
    {
       return [
           (new Linkable)
           ->title('Card 1')
           ->url('/resources/users')
           ->subtitle('This is a smaller Subtitle'),

           (new LinkableAway)
           ->title('2nd Card')
           ->url('https://github.com/Jubeki/Nova-Card-Linkable/')
           ->subtitle('Put everything you want here'),

           (new LinkableRouter)
           ->title('Another Card')
           ->url([
                'name' => 'index',
                'params' => [
                    'resourceName' => 'users',
                ],
            ])
           ->subtitle('You could also leave it empty'),
       ];
   }
}
```

### Options

All options are chainable.

#### Setting the subtitle of the Card

```php
$linkable->title('Title of Card');
```

#### Setting the subtitle of the Card

```php
$linkable->subtitle('Subtitle of Card');
```

#### Setting the theme of the Card

```php
$linkable->theme([
    'layout' => 'flex flex-col items-center justify-center p-6',
    'colors' => 'bg-white text-80 hover:bg-50 hover:text-80',
    'title' => 'text-3xl font-light',
    'subtitle' => 'text-base font-light',
]);
```

### `Jubeki\Nova\Cards\Linkable\Linkable`

#### Setting the url of the Card

```php
$linkable->url('https://github.com/Jubeki/Nova-Card-Linkable');
```

### `Jubeki\Nova\Cards\Linkable\LinkableAway`

#### Setting the url of the Card

```php
$linkable->url('https://github.com/Jubeki/Nova-Card-Linkable');
```

#### Setting the target
```php
$linkable->target('_blank');
```

### `Jubeki\Nova\Cards\Linkable\LinkableRouter`

#### Setting the Router Options

Here the `url` method accepts the router options instead of a specific url. You can make full use of the [Inertia Router](https://inertiajs.com/routing) which is used in Nova 4.

```php
// Recommended
$linkable->url([
    'name' => 'index',
    'params' => [
        'resourceName' => 'users',
    ],
]);

// Deprecated, Must be valid JSON
$linkable->url('{"name":"index", "params":{"resourceName":"users"}}');
```
