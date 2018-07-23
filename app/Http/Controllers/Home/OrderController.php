<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Carts;
use Cache;
class OrderController extends Controller
{

     public function __construct()
    {
       $this -> middleware('sys');
    }


    public function pay()
    {
        echo 'qqq';
        return view('home.order.pay');
    }


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
        $data = Cache::get('cart_data',null);
            

        //订单页模板
        // dd($data);
        return view('home.order.create',['data' => $data]);

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
         //接收要购买的购物车的商品信息
        if (!empty($_GET['ids'])) {
            $ids = explode(',', $_GET['ids']);
                $data = [];
            foreach ($ids as $key => $id) {
                //取出购物车数据
                $data[] = Carts::find($id);
                Carts::find($id) -> delete();
            }
            //把取出的数据存入缓存
            $res = Cache::put('cart_data',$data,1);
            // dd($res);
   
            echo 1;
         
        }else{
            echo 0;
        }

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
}
