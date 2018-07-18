<?php

namespace App\Providers;
use App\Models\Cates;
use App\Models\Address;

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


        view() -> share(['cates' => $cates,'address' => $address]);

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
