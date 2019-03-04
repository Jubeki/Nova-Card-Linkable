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
* [Laravel v5.8.*](https://laravel.com/docs/5.8)
* [Laravel Nova v2.*](https://nova.laravel.com/docs/2.0/)

## Installation

Just run:  
`composer require jubeki/nova-card-linkable`  
After this the setup will be complete and you can use the components listed here.

## Cards

What ist the difference between the card types?
* **Linkable:** Links to a page in your application
* **Linkable Away:** Links to a page which is outside of you application
* **Linkable Router:** Uses the [Vue-Router](https://router.vuejs.org/) to link to a page

The Design is the same for all of them and most of the options are also the same, so they will be listed here.

#### Default Design
![Shows the Card types](card.png)

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

`$linkable->hover($background, $text);`  
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
Here you can make full use of the [Vue-Router](https://router.vuejs.org/), which is uses by Laravel Nova.

Important side note:  
The URL must be valid JSON!  
e.g. `$url = '{"name":"index", "params":{"resourceName":"users"}}'`
