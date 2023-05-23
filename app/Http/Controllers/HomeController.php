<?php

namespace App\Http\Controllers;

use App\Models\City;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $cities = City::pluck('city_id', 'city_name');

        return view('/Shipper/home', compact('cities'));
    }
}
