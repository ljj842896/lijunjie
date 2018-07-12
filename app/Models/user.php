<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
     public $table = 's_users';
     public $primaryKey = 'user_id';
     protected $fillable = ['user_name','password','email','sex','phone','user_pic','user_address','qx'];

}
