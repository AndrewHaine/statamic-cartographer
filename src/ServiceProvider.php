<?php

namespace AndrewHaine\StatamicCartographer;

use AndrewHaine\StatamicCartographer\Fieldtypes\GoogleMapsFieldtype;
use AndrewHaine\StatamicCartographer\Fieldtypes\MapboxFieldtype;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    /**
     * @inheritDoc
     */
    protected $fieldtypes = [
        GoogleMapsFieldtype::class,
        MapboxFieldtype::class,
    ];

    /**
     * @inheritDoc
     */
    protected $scripts = [
        __DIR__ . '/../resources/dist/js/cartographer.js'
    ];

    /**
     * @inheritDoc
     */
    public function bootAddon()
    {
        $this
            ->bootAddonConfig();
    }

    /**
     * Boot the addon config file
     *
     * @return self
     */
    public function bootAddonConfig(): self
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/cartographer.php', 'statamic.cartographer');
        $this->publishes([
            __DIR__ . '/../config/cartographer.php' => config_path('statamic/cartographer.php'),
        ], 'config');

        return $this;
    }
}
