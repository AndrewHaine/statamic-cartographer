<?php

namespace AndrewHaine\StatamicCartographer\Fieldtypes;

use AndrewHaine\StatamicCartographer\Enums\MapType;

class MapboxFieldtype extends CartographerFieldtype
{
    /**
     * @inheritDoc
     */
    public function mapType(): MapType
    {
        return MapType::MAPBOX;
    }
}
