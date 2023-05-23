<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Province;
use GuzzleHttp\Utils;
use Illuminate\Database\Seeder;
use Kodepandai\LaravelRajaOngkir\Facades\RajaOngkir;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $getProvinces = Utils::jsonDecode(RajaOngkir::getProvince())->rajaongkir;

        if ($getProvinces->status->code === 200) {
            foreach ($getProvinces->results as $province) {
                Province::create([
                    'province_id'   => $province->province_id,
                    'province_name' => $province->province,
                ]);

                $getCities = Utils::jsonDecode(RajaOngkir::getCity(null, $province->province_id))->rajaongkir;

                if ($getCities->status->code === 200) {
                    foreach ($getCities->results as $city) {
                        City::create([
                            'province_id' => $province->province_id,
                            'city_id'     => $city->city_id,
                            'city_name'   => $city->city_name,
                        ]);
                    }
                }
            }
        }
    }
}
