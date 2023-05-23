<?php

namespace Database\Seeders;

use App\Models\Courier;
use Illuminate\Database\Seeder;

class CouriersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['code' => 'jne', 'couriers_name' => 'JNE'],
            ['code' => 'pos', 'couriers_name' => 'POS'],
            ['code' => 'tiki', 'couriers_name' => 'TIKI'],
        ];
        Courier::insert($data);
    }
}
