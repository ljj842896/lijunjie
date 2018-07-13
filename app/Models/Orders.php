<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    public $table = 's_orders';
    public $primaryKey = 'order_id';

    //订单与用户属于关系
    public function user_order()
    {		
    	return $this -> belongsTo('\App\Models\user','user_id');
    }
}
