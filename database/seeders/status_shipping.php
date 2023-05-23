<?php

namespace Database\Seeders;

use App\Models\shipping_status;
use Illuminate\Database\Seeder;

class status_shipping extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id_status' => 'STS-000', 'nama_status' => 'Pesanan Dibatalkan'],
            ['id_status' => 'STS-001', 'nama_status' => 'Paket Disiapkan'],
            ['id_status' => 'STS-002', 'nama_status' => 'Paket Menunggu Penjemputan'],
            ['id_status' => 'STS-003', 'nama_status' => 'Paket Sedang Dijemput'],
            ['id_status' => 'STS-004', 'nama_status' => 'Paket Dalam Perjalanan ke Hub'],
            ['id_status' => 'STS-005', 'nama_status' => 'Paket Sedang Diperoses di Hub'],
            ['id_status' => 'STS-006', 'nama_status' => 'Paket Menuju Sorting Hub'],
        ];
        shipping_status::insert($data);
    }
}
