<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class destination_address extends Model
{
    protected $guarded = [];
    protected $casts   = ['id' => 'string'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
