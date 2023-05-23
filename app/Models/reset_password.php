<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reset_password extends Model
{
    protected $table    = 'password_resets';
    protected $fillable = ['email', 'token', 'created_at', 'updated_at'];
}
