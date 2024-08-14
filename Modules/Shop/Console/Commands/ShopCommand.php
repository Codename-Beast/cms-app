<?php

namespace Modules\Shop\Console\Commands;

use Illuminate\Console\Command;

class ShopCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:ShopCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Shop Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
