<?php

namespace Utichawa\CorePackage\Console;

use Illuminate\Console\Command;
use Utichawa\CorePackage\Facades\ChuckNorris;

class ChuckNorrisJoke extends Command
{
    protected $signature = 'chuck-norris';

    protected $description = 'Output a funny chuck norris jole.';

    public function handle()
    {
        $this->info(ChuckNorris::getRandomJoke());
    }
}
