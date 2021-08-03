<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

final class SleepJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /** @var int */
    public $seconds;

    public function __construct(int $seconds =30 )
    {
        $this->seconds = $seconds;
    }

    public function handle()
    {
        Log::info('processing video');

        sleep($this->seconds);

	Log::info("waking up after sleeping {$this->seconds} seconds");
	for ($x=0; $x<=100000; $x++) {
          Log::info("number is $x <br>");
	}
    }
}
