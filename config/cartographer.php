<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Google Maps API Key
    |--------------------------------------------------------------------------
    |
    | This option controls the google maps API key which will be used in
    | the CMS and for and front end templates which contain google maps,
    | this will also be used for geocoding when searching for a location.
    |
    */
    'google_maps_api_key' => env('GOOGLE_MAPS_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Mapbox Access Token
    |--------------------------------------------------------------------------
    |
    | This option controls the google maps API key which will be used in
    | the CMS and for and front end templates which contain google maps,
    | this will also be used for geocoding when searching for a location.
    |
    */
    'mapbox_api_access_token' => env('MAPBOX_API_ACCESS_TOKEN'),

    /*
    |--------------------------------------------------------------------------
    | Default Center
    |--------------------------------------------------------------------------
    |
    | This option controls the default coordinates which will be used
    | when an instance of a Cartographer fieldtype is used in a
    | blueprint or CMS.
    |
    */
    'default_center' => [
        'lat' => 52.6318051,
        'lon' => 1.296734
    ],

];
