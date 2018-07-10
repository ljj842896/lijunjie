<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//===============公共区域start=================

Route::get('/', function () {
	// echo "string";
	// dump(Config::get('app.timezone'));
	// dump(date('Y-m-d',time()));
    return view('welcome');
});





//===============公共区域end=================



//李俊杰区域-----------------start---------------------------------

//首页路由
Route::resource('Admin/','Admin\IndexController');

//用户路由
Route::resource('Admin/user','Admin\UserController');

//商品路由
Route::resource('Admin/goods','Admin\GoodsController');

//商品分类路由
Route::resource('Admin/cate','Admin\CateController');






//李俊杰区域-----------------end----------------------------

//叶贵丰区域-----------------start---------------------------------














//叶贵丰区域-----------------end----------------------------

//刘大海区域-----------------start---------------------------------
//友情链接路由
Route::resource('Admin/link','Admin\LinkController');
//轮播图管理
Route::resource('Admin/ad','Admin\AdController');















//刘大海区域-----------------end----------------------------
