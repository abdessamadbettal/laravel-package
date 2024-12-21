<?php

namespace VendorName\Skeleton\Commands;

use Illuminate\Console\Command;

class SkeletonCommand extends Command
{
    public $signature = 'skeleton';

    public $description = 'My command description';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
