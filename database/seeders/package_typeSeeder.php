<?php

namespace Database\Seeders;

use App\Models\package_type;
use Illuminate\Database\Seeder;

class package_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id_type' => 'TYP-001', 'name_type' => 'Elektronik'],
            ['id_type' => 'TYP-002', 'name_type' => 'Cairan'],
            ['id_type' => 'TYP-003', 'name_type' => 'Furniture'],
            ['id_type' => 'TYP-004', 'name_type' => 'Kosmetik'],
            ['id_type' => 'TYP-005', 'name_type' => 'Dokumen'],
            ['id_type' => 'TYP-006', 'name_type' => 'Makanan'],
            ['id_type' => 'TYP-007', 'name_type' => 'Minuman'],
            ['id_type' => 'TYP-008', 'name_type' => 'Pakaian'],
            ['id_type' => 'TYP-009', 'name_type' => 'Sepatu'],
            ['id_type' => 'TYP-010', 'name_type' => 'Lainnya'],
        ];
        package_type::insert($data);
    }
}
