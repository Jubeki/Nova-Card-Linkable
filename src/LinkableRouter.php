<?php

namespace Jubeki\Nova\Cards\Linkable;

class LinkableRouter extends AbstractLinkable
{

    public function __construct() {
        parent::__construct();
        $this->withMeta([
            'url' => '{"name": "dashboard"}',
            'title' => 'Linkable Card Away',
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
        return 'card-linkable-router';
    }
}
