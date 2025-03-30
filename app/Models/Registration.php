<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Registration extends Model
{
    protected $table = 'registrations';
    protected $fillable = ['name','email','password'];
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);

    }
}
