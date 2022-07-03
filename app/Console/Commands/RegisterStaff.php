<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RegisterStaff extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'register:staff {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new staff member';

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
        return Command::SUCCESS;
    }
}
