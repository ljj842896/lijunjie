<?php

namespace App\Providers;
use App\Models\Cates;

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

        view() -> share(['cates' => $cates]);

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
