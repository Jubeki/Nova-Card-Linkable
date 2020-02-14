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

    public function url($url) {
        if(is_array($url)) {
            return parent::url(json_encode($url));
        }
        return parent::url($url);
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
