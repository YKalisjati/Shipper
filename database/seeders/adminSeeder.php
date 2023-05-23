<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id'           => 'ADMN-01',
                'name'      => 'admin1',
                'email'     => 'admin1@gmail.com',
                'password'  => 'admin1',
                'handphone' => '081257074317', ],
            ['id'           => 'ADMN-02',
                'name'      => 'admin2',
                'email'     => 'admin2@gmail.com',
                'password'  => 'admin2',
                'handphone' => '081257074555', ],
        ];
        admin::insert($data);
    }
}
