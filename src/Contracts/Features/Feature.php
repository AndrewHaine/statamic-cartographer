<?php

namespace AndrewHaine\StatamicCartographer\Contracts\Features;

interface Feature
{
    /**
     * Get the ID for the map feature.
     *
     * @return string
     */
    public function id(): string;
}
