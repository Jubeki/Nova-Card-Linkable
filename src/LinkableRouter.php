<?php

namespace Jubeki\Nova\Cards\Linkable;

class LinkableRouter extends AbstractLinkable
{
    /**
     * Construct a new Linkable Router Card with a predefined theme.
     * 
     * @return void 
     */
    public function __construct()
    {
        parent::__construct();

        $this->withMeta([
            'url' => '{"name": "dashboard"}',
            'title' => 'Linkable Card Away',
            'subtitle' => ''
        ]);
    }

    /**
     * Set Intertia Router Parameters which the Card should redirect to.
     * 
     * @param string|array $url 
     * @return static 
     */
    public function url(string|array $url): static
    {
        if(is_array($url)) {
            return $this->withMeta([
                'url' => json_encode($url),
            ]);
        }
        
        return $this->withMeta([
            'url' => $url,
        ]);
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component(): string
    {
        return 'CardLinkableRouter';
    }
}
