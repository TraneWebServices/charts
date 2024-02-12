<?php

namespace TWS\Charts\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'charts:install';

    protected $description = 'Install Charts component';

    public function handle()
    {
        $this->call('vendor:publish', ['--tag' => 'charts:public']);
    }
}
