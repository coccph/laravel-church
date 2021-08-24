<?php

namespace coccph\LaravelChurch;

use coccph\LaravelChurch\Commands\LaravelChurchCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelChurchServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-church')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-church_table')
            ->hasCommand(LaravelChurchCommand::class);
    }
}
