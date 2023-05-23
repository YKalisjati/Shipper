<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $guarded = [];
    protected $casts   = ['id' => 'string'];
}
