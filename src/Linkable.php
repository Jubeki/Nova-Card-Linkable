<?php

namespace Jubeki\Nova\Cards\Linkable;

class Linkable extends AbstractLinkable
{

    public function __construct() {
        parent::__construct();
        $this->withMeta([
            'url' => '#',
            'title' => 'Linkable Card',
            'subtitle' => ''
        ]);
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'card-linkable';
    }
}
