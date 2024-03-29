<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class CleanupDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cleanup:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean all post';

    /**
     * Execute the console command.
     */
    public function handle()
    {    
        Post::truncate();

        return 'Done';
    }
}
