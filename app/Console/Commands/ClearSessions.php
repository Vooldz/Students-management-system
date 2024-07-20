<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ClearSessions extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'sessions:clear';

    /**
     * The console command description.
     */
    protected $description = 'Clear all session files';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $sessionsDirectory = storage_path('framework/sessions');
        $files = File::allFiles($sessionsDirectory);

        foreach ($files as $file) {
            if (Str::startsWith($file->getFilename(), 'sess-')) {
                File::delete($file->getPathname());
            }
        }

        $this->info('Session files cleared successfully.');
    }
}
