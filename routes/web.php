<?php

use Illuminate\Support\Facades\Route;

Route::macro('blazeRoutes', function($options = []) {
    Route::group($options, function () {
        $routes = config('blaze.routes', []);

        if ($routes['users_page']) {
            Route::view('/users', 'blaze::users')->name('blaze.users.index');
        }

    });
});
