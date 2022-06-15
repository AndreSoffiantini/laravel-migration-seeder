<?php

use Illuminate\Database\Seeder;
use ToursTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ToursTableSeeder::class);
    }
}
