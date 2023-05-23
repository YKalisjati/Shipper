<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Courier;
use GuzzleHttp\Utils;
use Illuminate\Http\Request;
use Kodepandai\LaravelRajaOngkir\Facades\RajaOngkir;

class TarifPengirimanController extends Controller
{
    public function index()
    {
        $cities = City::pluck('city_id', 'city_name');
        $costs  = false;

        return view('/Shipper/tarif-pengiriman', compact('costs', 'cities'));
    }

    public function check_ongkir(Request $request)
    {
        $cities = City::pluck('city_id', 'city_name');

        $getCityOrigin      = City::where('city_name', $request->city_origin)->first();
        $getCityDestination = City::where('city_name', $request->city_destination)->first();

        $city_origin      = $getCityOrigin !== null ? $getCityOrigin->city_id : 0;
        $city_destination = $getCityDestination !== null ? $getCityDestination->city_id : 0;

        $costs = false;

        foreach (Courier::all() as $k => $kurir) {
            $costCheck = RajaOngkir::getCost($city_origin, 'city', $city_destination, 'city', $request->weight, $kurir->code);
            $RO        = Utils::jsonDecode($costCheck)->rajaongkir;

            if ($RO->status->code === 200) {
                $costs[] = $RO->results[0];
            }
        }

        return view('/Shipper/tarif-pengiriman', compact('costs', 'cities'));
    }
}
