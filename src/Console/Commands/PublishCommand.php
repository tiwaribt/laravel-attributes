<?php

declare(strict_types=1);

namespace Rinvex\Attributes\Console\Commands;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rinvex:publish:attributes {--force : Overwrite any existing files.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish Rinvex Attributes Resources.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->warn('Publish rinvex/attributes:');
        $this->call('vendor:publish', ['--tag' => 'rinvex-attributes-config', '--force' => $this->option('force')]);
    }
}
