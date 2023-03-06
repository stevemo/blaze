<?php

return [
    'route_options' => [
        'prefix'     => 'admin',
        'middleware' => ['web'],
    ],

    // Here you can disable routes according to your need.
    'enable_route' => [
        'users' => true
    ]
];
