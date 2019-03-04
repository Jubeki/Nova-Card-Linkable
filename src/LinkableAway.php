<?php

namespace Jubeki\Nova\Card;

class LinkableAway extends AbstractLinkable
{

    public function __construct() {
        parent::__construct();
        $this->withMeta([
            'url' => 'https://nova.laravel.com',
            'title' => 'Linkable Card Away',
            'subtitle' => '',
            'target' => '_blank'
        ]);
    }

    /**
     * Sets the target attribute of the <a> tag
     */
    public function target($target) {
        return $this->withMeta([
            'target' => $target,
        ]);
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'card-linkable-away';
    }
}
