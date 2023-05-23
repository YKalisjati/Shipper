<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_verify extends Model
{
    protected $table    = 'user_verifies';
    protected $fillable = ['email', 'token', 'created_at', 'updated_at'];
}
