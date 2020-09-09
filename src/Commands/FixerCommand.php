<?php

namespace Acadea\Fixer\Commands;

use Illuminate\Console\Command;

class FixerCommand extends Command
{
    public $signature = 'fixer';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
