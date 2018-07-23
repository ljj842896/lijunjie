<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Address;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function details()
    {
        $user_data = session('users');
        $user_id = $user_data['user_id'];
        $data = Orders::where('user_id',$user_id) -> get();
        // $orders = Orders::find(3);
        // dd($data);
        return view('home.order.detail',['user_orders' => $data]);
    }

    public function index()
    {
        $user_data = session('users');
        $user_id = $user_data['user_id'];
        $data = Orders::where('user_id',$user_id) -> get();
        // dd(session('users'));
        return view('home.order.index',['user_orders' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //接收商品详情页的商品信息
        //商品数量
        $good_number = isset($_GET['good_number']) ? $_GET['good_number'] : null;
        // 商品颜色
        $good_color = isset($_GET['good_color']) ? $_GET['good_color'] : null;
        //商品尺寸
        $good_rule = isset($_GET['good_rule']) ? $_GET['good_rule'] : null;
        if (isset($_GET['good_attr'])) {
            echo 1;
        }
        //查询收货地址
        $user_data = session('user_name');

        $orderD = Address::find($user_data['user_id']);
            // return redirect('')
            

        //订单页模板

            return view('home.order.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * 立即购买
     */
    public function buyNow(){
        //todo 接收数据存储到购物车
        //商品数量
        // $good_number = isset($_GET['good_number']) ? $_GET['good_number'] : null;
        // //商品颜色
        // $good_color = isset($_GET['good_color']) ? $_GET['good_color'] : null;
        // //商品尺寸
        // $good_rule = isset($_GET['good_rule']) ? $_GET['good_rule'] : null;

        $result = sql();

        //todo 添加成功后跳转到订单页面
        if($result){
//            跳转confirmOrder方法(确认订单方法)
            //todo 跳转到create 订单界面
        }
    }

    /**
     * 加入购物车
     */
    public function addCart(){
        //todo 接收数据存储到session


        //todo 显示session里面的购物车数据
        return view();
    }

    /**
     * 确认订单信息
     */
    public function confirmOrder(){
        //todo 查询收货地址信息
        $siteResult = "";
        //todo 判断是否有收货地址信息
            if($siteResult){
            //todo 有收货地址的话就赋值给一个数组($siteArray),是否有收货地址的状态(is_site = 1)
            $siteArray = $siteResult;
            $status = 1;
        }else{
            //todo 没有的话就给一个状态(前端页面不显示 "输入新地址")
            $status = 2;
        }

        //todo 根据用户ID去查询购物车信息

        return view();
    }


    /*
     * 寄到该地址
     */
    public function addAddress(){

        //todo 添加到收货地址

        //跳转到 confirmOrder方法
    }

    /**
     * 提交订单
     */
    public function addOrder()
    {
        //todo 处理订单信息(存储到数据库)

        //todo 判断是否成功并且跳转到支付界面

    }

}
