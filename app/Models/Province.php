<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $guarded = [];
    protected $casts   = ['province_id' => 'string'];

    public function city()
    {
        return $this->hasMany(City::class, 'province_id');
    }

    public function alamat_user()
    {
        return $this->hasOne(UserAddress::class, 'province_id');
    }
}
