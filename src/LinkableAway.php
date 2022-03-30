<?php

namespace Jubeki\Nova\Cards\Linkable;

class LinkableAway extends AbstractLinkable
{
    /**
     * Construct a new Linkable Away Card with a predefined theme.
     * 
     * @return void 
     */
    public function __construct()
    {
        parent::__construct();

        $this->withMeta([
            'url' => 'https://nova.laravel.com',
            'title' => 'Linkable Card Away',
            'subtitle' => '',
            'target' => '_blank',
        ]);
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component(): string
    {
        return 'CardLinkableAway';
    }

    /**
     * Set the target of the Card on how to open the link (like in a new tab or window).
     * 
     * @param string $target
     * @return $this
     */
    public function target(string $target): static
    {
        return $this->withMeta([
            'target' => $target,
        ]);
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
