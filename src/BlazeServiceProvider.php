<?php

namespace Stevemo\Blaze;

use Livewire\Livewire;
use Livewire\Component;
use Spatie\LaravelPackageTools\Package;
use Stevemo\Blaze\Commands\BlazeCommand;
use Stevemo\Blaze\Http\Livewire\UsersTable;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BlazeServiceProvider extends PackageServiceProvider
{
    public function bootingPackage()
    {
        Livewire::component('blaze::users-table', UsersTable::class);
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('blaze')
            ->hasConfigFile()
            ->hasViews()
            ->hasRoute('web');
    }
}
