<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
     public $table = 's_users';
     public $primaryKey = 'user_id';
     public $fillable = ['user_name','password','email','sex','phone','user_pic','user_address','qx'];

     //用户地址一对多
     public function user_addr()
    {
    	return $this -> hasMany('\App\Models\Address','user_id');
    }
}
