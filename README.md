# Linkable Cards for Laravel Nova
## Add Cards to Laravel Nova which link to another page

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jubeki/nova-card-linkable.svg?style=flat-square)](https://packagist.org/packages/jubeki/nova-card-linkable)
[![Total Downloads](https://img.shields.io/packagist/dt/jubeki/nova-card-linkable.svg?style=flat-square)](https://packagist.org/packages/jubeki/nova-card-linkable)

* [Requirements](#requirements)
* [Installation](#installation)
* [Cards](#cards)
    * [Linkable](#linkable)
    * [Linkable Away](#linkable-away)
    * [Linkable Router](#linkable-router)

## Requirements
* [Laravel v6.*](https://laravel.com/docs/6.x) | [v5.8.*](https://laravel.com/docs/5.8)
* [Laravel Nova v2.*](https://nova.laravel.com/docs/2.0/)

## Installation

Just run:  
`composer require jubeki/nova-card-linkable`  
After this the setup will be complete and you can use the components listed here.

## Cards

What is the difference between the card types?
* **Linkable:** Links to a page in your application
* **Linkable Away:** Links to a page which is outside of your application
* **Linkable Router:** Uses the [Vue-Router](https://router.vuejs.org/) to link to a page

The Design is the same for all of them and most of the options are also the same, so they will be listed here.

#### Default Design
![Shows the Card types](card.png)

## Usage

```php
// in app/Providers/NovaServiceProvider.php
namespace App\Providers;

[..]

use Jubeki\Nova\Cards\Linkable\Linkable;
use Jubeki\Nova\Cards\Linkable\LinkableAway;
use Jubeki\Nova\Cards\Linkable\LinkableRouter;

class NovaServiceProvider extends NovaApplicationServiceProvider
{

[..]

    protected function cards()
    {
       return [
           (new Linkable)
           ->title('Card 1')
           ->url("/resources/users")
           ->subtitle('This is a smaller Subtitle'),

           (new LinkableAway)
           ->title('2nd Card')
           ->url("https://github.com/Jubeki/Nova-Card-Linkable/")
           ->subtitle('Put everything you want here'),

           (new LinkableRouter)
           ->title('Another Card')
           ->url('{"name": "index", "params": {"resourceName": "users"}}')
           ->subtitle('You could also leave it empty'),
       ];
   }
   
   [..]
   
}
```

#### Options
All options are chainable.

`$linkable->url($url);`  
This sets the link to be used in the application

`$linkable->title($title);`  
This sets the title of the card

`$linkable->subtitle($subtitle);`  
This sets the subtitle of the card

`$linkable->theme($background, $text);`  
This sets the colors of the card, default values:  
`$background = 'bg-white'`  
`$text = 'text-80'`

`$linkable->themeHover($background, $text);`  
This sets the colors of the card while it is beeing hovered, default values:  
`$background = 'bg-50'`  
`$text = 'text-80'`

### Linkable
#### Import for this component:  
`use Jubeki\Nova\Cards\Linkable\Linkable;`

#### How to create an instance:  
`$linkable = new Linkable;`

#### Additional options:
none

### Linkable Away
#### Import for this component:  
`use Jubeki\Nova\Cards\Linkable\LinkableAway;`

#### How to create an instance:  
`$linkable = new LinkableAway;`

#### Additional options:
`$linkable->target($target);`  
Equals to `<a target="$target">`

### Linkable Router
#### Import for this component:  
`use Jubeki\Nova\Cards\Linkable\LinkableRouter;`

#### How to create an instance:  
`$linkable = new LinkableRouter;`

#### Options:
`$linkable->url($url)`  
is a little bit different than the other ones:  
Here you can make full use of the [Vue-Router](https://router.vuejs.org/), which is used by Laravel Nova.

Important side note:  
The URL must be valid JSON!  
e.g. `$url = '{"name":"index", "params":{"resourceName":"users"}}'`

Alternative to JSON: Use an array
e.g.  
```php
$url = [
    'name' => 'index',
    'params' => [
        'resourceName' => 'users',
    ],
]
```