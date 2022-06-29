<?php

namespace AndrewHaine\StatamicCartographer\Fieldtypes;

use AndrewHaine\StatamicCartographer\Enums\MapType;

class GoogleMapsFieldtype extends CartographerFieldtype
{
    /**
     * @inheritDoc
     */
    public function mapType(): MapType
    {
        return MapType::GOOGLE;
    }
}
