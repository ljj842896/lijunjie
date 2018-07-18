<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Orders extends Model
{
    //
    use SoftDeletes;
    public $table = 's_orders';
    public $primaryKey = 'order_id';
    public $dates = ['deleted_at'];

    //订单与用户属于关系
    public function user_order()
    {		
    	return $this -> belongsTo('\App\Models\user','user_id');
    }
}
