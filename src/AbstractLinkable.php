<?php

namespace Jubeki\Nova\Card;

use Laravel\Nova\Card;

abstract class AbstractLinkable extends Card
{

    public function __construct() {
        $this->withMeta([
            'theme' => [
                'background' => 'bg-white',
                'text' => 'text-80',
            ],
            'hover' => [
                'background' => 'bg-50',
                'text' => 'text-80',
            ],
        ]);
    }

    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * Which url should the card direct to
     */
    public function url($url) {
        return $this->withMeta(['url' => $url]);
    }

    /**
     * Which title will be displayed in the card
     */
    public function title($title) {
        return $this->withMeta(['title' => $title]);
    }

    /**
     * Which subtitle will be display in the card
     */
    public function subtitle($subtitle) {
        return $this->withMeta(['subtitle' => $subtitle]);
    }

    /**
     * How does the card look like
     */
    public function theme($background, $text) {
        return $this->withMeta(['theme' => [
            'background' => $background,
            'text' => $text,
        ]]);
    }

    /**
     * How does the card look like while hovering
     */
    public function themeHover($background, $text) {
        return $this->withMeta(['hover' => [
            'background' => $background,
            'text' => $text,
        ]]);
    }
}
