<?php

namespace App\Providers;
use App\Models\Cates;
use App\Models\Address;
use App\Models\Goods;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //共享分类数据
        $cates = Cates::orderBy('cat_id', 'asc') -> get();

        $address = Address::all();

        $goods = Goods::where('goods_top','=','y') -> get();
        view() -> share(['cates' => $cates,'address' => $address,'com_goods' => $goods]);


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
