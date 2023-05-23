<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class package_type extends Model
{
    protected $guarded = [];
    protected $casts   = ['id_type' => 'string'];

    public function packet()
    {
        return $this->belongsTo(paket::class, 'id');
    }
}
