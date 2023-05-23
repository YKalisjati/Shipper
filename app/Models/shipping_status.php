<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class shipping_status extends Model
{
    protected $guarded = [];
    protected $casts   = ['id_status' => 'string'];
}
