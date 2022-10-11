<?php

namespace SiroDiaz\LaravelManticoreMigration\Commands;

use Illuminate\Console\Command;

class LaravelManticoreMigrationCommand extends Command
{
    public $signature = 'laravel-manticore-migration';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
