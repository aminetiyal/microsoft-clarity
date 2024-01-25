<?php

namespace AmineTiyal\MicrosoftClarity\Commands;

use Illuminate\Console\Command;

class MicrosoftClarityCommand extends Command
{
    public $signature = 'microsoft-clarity';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
