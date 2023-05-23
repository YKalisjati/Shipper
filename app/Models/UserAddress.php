<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $guarded = [];
    protected $casts   = ['id' => 'string'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'provinsi_id', 'province_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'kabupaten_kota_id', 'city_id');
    }
}
