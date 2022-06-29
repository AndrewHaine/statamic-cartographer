<?php

namespace AndrewHaine\StatamicCartographer\Contracts\Features;

use AndrewHaine\StatamicCartographer\Contracts\Components\Coordinates;

interface Marker extends Feature
{
    /**
     * Get the position of the marker.
     *
     * @return \AndrewHaine\StatamicCartographer\Contracts\Components\Coordinates
     */
    public function position(): Coordinates;
}
