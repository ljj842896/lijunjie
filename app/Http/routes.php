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

//商品管理查询ajax专用路由
Route::get('/ajax','Admin\GoodsController@ajaxGoods');





//李俊杰区域-----------------end----------------------------

//叶贵丰区域-----------------start---------------------------------
Route::get('Admin/login','Admin\LoginController@login');//后台登录页面
Route::post('Admin/exect','Admin\LoginController@exect');//执行登录
Route::get('Admin/loginout','Admin\LoginController@loginout');//退出登录
Route::get('Admin/infor','Admin\LoginController@infor');//跳转个人信息页面
Route::post('Admin/revise','Admin\LoginController@revise');//修改个人信息
Route::get('Admin/repass','Admin\LoginController@repass');//修改密码頁面
Route::post('Admin/reset','Admin\LoginController@reset');//執行修改密码












//叶贵丰区域-----------------end----------------------------

//刘大海区域-----------------start---------------------------------
//友情链接路由
Route::resource('Admin/link','Admin\LinkController');
//轮播图管理
Route::resource('Admin/ad','Admin\AdController');
//订单管理路由
Route::resource('Admin/order','Admin\OrderController');
//订单详情路由
Route::get('Admin/order/details/{id}','Admin\OrderController@details');
//前台路由
Route::get('home/','HomeController@index');
//网站配置
Route::resource('Admin/config','Admin\ConfigController');

//前台订单管理路由
Route::resource('Home/order','Home\OrderController');
Route::get('Home/orderdetails','Home\OrderController@details');










//刘大海区域-----------------end----------------------------
