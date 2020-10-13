<?php

namespace App\Console\Commands;

use App\Models\uploadVideo;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ProcessVideouploadCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'video:process';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            //Retrieve only no processed files:
            $filepath = uploadVideo::notProcessed()->get();
            if (count($filepath) < 1) {
                $this->info('No files found');
                return;
            }
            //Process the files:
            $filepath->map(function ($video) {
                $file = fopen("storage/app/" . $video->path, "r");
                while (!feof($file)) {
                    $line = fgets($file);
                    //Here you have a loop to each line of the file, and can do whatever you need with this line:
                    if (strlen($line) > 0) { //If the line is not empty:
                        // Add your logic here:
                    }
                    // Don't forgot to change your `processed` flag to true:
                    $video->processed = true;
                    $video->save();
                }
            });
        } catch (\Exception $exception) {
            $this->error("Something went wrong");
            return $exception->getMessage();
        }
    }
}
