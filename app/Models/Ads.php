<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    //
    public $table = 's_ads';
    public $primaryKey = 'ad_id';
    public function ad_cates()
    {
    	return $this -> belongsTo('App\Models\Cates','cat_id');
    }
}
