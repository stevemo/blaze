<?php

use Illuminate\Support\Facades\Route;

Route::group(config('blaze.route_options'), function () {

    if (config('blaze.enable_route.users')) {
        Route::view('/users', 'blaze::users')->name('blaze.users.index');
    }

});
