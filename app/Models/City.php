<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];
    protected $casts   = ['city_id' => 'string'];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id', 'province_id');
    }

    public function alamat_user()
    {
        return $this->hasOne(UserAddress::class, 'city_id');
    }
}
