<?php

namespace SiroDiaz\LaravelManticoreMigration\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SiroDiaz\LaravelManticoreMigration\LaravelManticoreMigration
 */
class LaravelManticoreMigration extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \SiroDiaz\LaravelManticoreMigration\LaravelManticoreMigration::class;
    }
}
