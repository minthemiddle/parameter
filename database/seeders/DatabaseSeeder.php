<?php

namespace Database\Seeders;

use App\Models\Analytics;
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
        Analytics::factory(20)->create();
    }
}
