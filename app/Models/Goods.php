<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Goods extends Model
{


    use SoftDeletes;
    //
    public $table = 's_goods';
    public $primaryKey = 'goods_id';


    //商品与商品相册的一对多关系
    public function goods_images()
    {
    	return $this -> hasMany('App\Models\GoodImgs','goods_id');
    }


    //商品与商品分类的属于关系
    public function goods_cate()
    {
    	return $this -> belongsTo('App\Models\Cates','cat_id');
    }
}
