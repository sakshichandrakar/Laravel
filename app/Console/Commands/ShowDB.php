<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ShowDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'showDB';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show Current Db';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info(DB::connection()->getDatabaseName());
    }
}
