<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    protected $guarded = [];
    protected $casts   = ['id' => 'string'];

    public function type()
    {
        $this->hasOne(package_type::class, 'id_type');
    }
}
