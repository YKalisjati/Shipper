<?php

namespace Database\Seeders;

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
        $this->call(package_typeSeeder::class);
        $this->call(status_shipping::class);
        $this->call(adminSeeder::class);
        $this->call(CouriersTableSeeder::class);
        $this->call(LocationTableSeeder::class);
    }
}
