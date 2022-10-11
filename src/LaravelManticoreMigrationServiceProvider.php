<?php

namespace SiroDiaz\LaravelManticoreMigration;

use SiroDiaz\LaravelManticoreMigration\Commands\LaravelManticoreMigrationCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelManticoreMigrationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-manticore-migration')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-manticore-migration_table')
            ->hasCommand(LaravelManticoreMigrationCommand::class);
    }
}
