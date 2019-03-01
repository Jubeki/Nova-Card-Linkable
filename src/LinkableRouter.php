<?php

namespace Jubeki\Nova\Card;

use Laravel\Nova\Card;

class LinkableRouter extends Card
{

    public function __construct() {
        $this->withMeta([
            'url' => '{"name": "dashboard"}',
            'title' => 'Linkable Card Away',
            'subtitle' => ''
        ]);
    }

    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    public function url($url) {
        return $this->withMeta(['url' => $url]);
    }

    public function title($title) {
        return $this->withMeta(['title' => $title]);
    }


    public function subtitle($subtitle) {
        return $this->withMeta(['subtitle' => $subtitle]);
    }


    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'card-linkable-router';
    }
}
