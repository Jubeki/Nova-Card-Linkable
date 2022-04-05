<?php

namespace Jubeki\Nova\Cards\Linkable;

use Laravel\Nova\Card;

abstract class AbstractLinkable extends Card
{
    /**
     * Construct a new Card with a predefined theme.
     *
     * @param  string|null  $component
     * @return void
     */
    public function __construct($component = null)
    {
        parent::__construct($component);

        $this->withMeta([
            'theme' => config('nova-card-linkable.theme'),
        ]);

        $this->width(config('nova-card-linkable.width'));
    }

    /**
     * Set title which will be shown on the Card.
     *
     * @param  string  $title
     * @return $this
     */
    public function title(string $title): static
    {
        return $this->withMeta([
            'title' => $title,
        ]);
    }

    /**
     * Set subtitle which will be shown on the Card.
     *
     * @param  string  $subtitle
     * @return $this
     */
    public function subtitle(string $subtitle): static
    {
        return $this->withMeta([
            'subtitle' => $subtitle,
        ]);
    }

    /**
     * Set the theme of the card.
     *
     * @param  array  $theme
     * @return $this
     */
    public function theme(array $theme): static
    {
        return $this->withMeta([
            'theme' => array_merge_recursive($theme, config('nova-card-linkable.theme')),
        ]);
    }
}
