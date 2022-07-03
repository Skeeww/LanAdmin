<?php

namespace Database\Seeders;

use App\Models\Staff;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Team::factory(37)->create();
        User::factory(129)->create();
        Staff::factory(1)->create();
    }
}
