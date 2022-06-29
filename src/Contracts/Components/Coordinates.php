<?php

namespace AndrewHaine\StatamicCartographer\Contracts\Components;

interface Coordinates
{
    /**
     * Get the latitudinal value.
     *
     * @return float
     */
    public function lat(): float;

    /**
     * Get the longitudinal value.
     *
     * @return float
     */
    public function lon(): float;
}
