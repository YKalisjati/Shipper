<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $guarded = [];
    protected $casts   = ['id' => 'string'];

    public function user_address()
    {
        return $this->hasMany(UserAddress::class, 'id');
    }

    public function destination_address()
    {
        return $this->hasMany(destination_address::class, 'id');
    }
}
