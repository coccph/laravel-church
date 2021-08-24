<?php

namespace coccph\LaravelChurch\Commands;

use Illuminate\Console\Command;

class LaravelChurchCommand extends Command
{
    public $signature = 'laravel-church';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
