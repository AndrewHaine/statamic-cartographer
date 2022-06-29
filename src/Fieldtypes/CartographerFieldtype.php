<?php

namespace AndrewHaine\StatamicCartographer\Fieldtypes;

use AndrewHaine\StatamicCartographer\Enums\MapType;
use Statamic\Fields\Fieldtype;

abstract class CartographerFieldtype extends Fieldtype
{
    /**
     * @inheritDoc
     */
    protected $categories = [
        'media'
    ];

    /**
     * @inheritDoc
     */
    protected $icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 439 480"><g stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M157.673 29.96C193.903.7 245.815 1.316 281.339 31.428h0l7.298 6.186c33.53 28.423 44.57 75.409 27.204 115.79h0L220.114 376l-96.47-213.73c-20.424-45.252-7.727-98.587 30.898-129.782h0Zm59.345 55.514c-16.551 0-29.969 13.447-29.969 30.036 0 16.588 13.418 30.035 29.969 30.035 16.551 0 29.969-13.447 29.969-30.035 0-16.589-13.418-30.036-29.97-30.036Z" stroke-width="16"/><path d="M88.728 177.891 9.273 220.687 9 470.985l124.845-65.581 169.075 65.581L429 405.404V156l-69.97 36.62m-56.236 92.815-.546 185.55M132 285l.415 113.383" stroke-width="17"/></g></svg>';

    /**
     * Get the map type for this field type.
     *
     * @return \AndrewHaine\StatamicCartographer\Enums\MapType|null
     */
    abstract public function mapType(): MapType;
}
