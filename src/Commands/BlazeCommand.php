<?php

namespace Stevemo\Blaze\Commands;

use Illuminate\Console\Command;

class BlazeCommand extends Command
{
    public $signature = 'blaze';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
