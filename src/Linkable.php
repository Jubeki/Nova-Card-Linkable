<?php

namespace Jubeki\Nova\Cards\Linkable;

class Linkable extends AbstractLinkable
{
    /**
     * Construct a new Linkable Card with a predefined theme.
     * 
     * @return void 
     */
    public function __construct()
    {
        parent::__construct();

        $this->withMeta([
            'url' => '#',
            'title' => 'Linkable Card',
            'subtitle' => '',
        ]);
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component(): string
    {
        return 'CardLinkable';
    }

    /**
     * Set URL which the Card should redirect to.
     * 
     * @param string $url 
     * @return $this
     */
    public function url(string $url): static
    {
        return $this->withMeta([
            'url' => $url,
        ]);
    }
}
