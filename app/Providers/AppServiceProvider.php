<?php

namespace App\Providers;
use App\Models\Cates;
use App\Models\Address;
use App\Models\Goods;
use App\Models\Carts;
use Cache;
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

        $goods = Cache::remember('goods',120,function(){
            return Goods::where('goods_top','=','y') -> get();
        });

        $cart_count = Carts::count();

        // dd($cart_count);
        
       
        view() -> share(['cates' => $cates,'address' => $address,'com_goods' => $goods, 'cart_count' => $cart_count]);


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
