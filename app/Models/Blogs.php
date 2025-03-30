<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
   protected $table = 'blogs';

   protected $fillable = ['name' , 'email' , 'password' ,'content'];
}
