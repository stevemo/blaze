<?php

namespace Stevemo\Blaze;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Stevemo\Blaze\Commands\BlazeCommand;

class BlazeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('blaze')
            ->hasViews();
        // ->hasConfigFile()
        // ->hasMigration('create_blaze_table')
        // ->hasCommand(BlazeCommand::class);
    }
}
