<?php

return [

    'version' => 'v1',

    'middleware' => ['api'],

    'route_prefix' => 'api',


    'endpoints' => [
        'index' => true,
        'blocks' => true,
        'medias' => true,
        'files' => true,
        'features' => true,
        'tags' => true,
        'users' => true,
        'settings' => true,
    ],

];
