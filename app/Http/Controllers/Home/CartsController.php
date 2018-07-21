<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Carts;
use Cache;
class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //判断用户是否登录，登录则从数据库中取数据，否则从缓存cache中取
        if (session('users')) {
            // echo '1111';
            $data = Carts::where('user_id',session('users') -> user_id) -> get();
            // dd($data);
        }else{
            $data = [];
            $id = Cache::get('id', 0);

            // echo $id;

            for ($i=1; $i <= $id; $i++) { 
                # code...
                $data[] = Cache::get('cart'.$i);
            }


        }

        // dd($data);
        return view('home.cart.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *  执行购物车添加
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //接收商品详情页发送的数据
        $good_color = isset($_GET['good_color']) ? $_GET['good_color'] : null; 
        $good_rule = isset($_GET['good_rule']) ? $_GET['good_rule'] : null; 
        $good_number = isset($_GET['good_number']) ? $_GET['good_number'] : null; 
        $good_id = isset($_GET['good_id']) ? $_GET['good_id'] : null; 
        $good_price = isset($_GET['good_price']) ? $_GET['good_price'] : null; 
        $good_name = isset($_GET['good_name']) ? $_GET['good_name'] : null; 

        //判断用户是否登录，登录则将购物车数据存入数据库，否则存入缓存cache
        if (session('users')) {
            $cart = new Carts;

            $cart -> user_id = session('users') -> user_id;
            $cart -> goods_id = $good_id;
            $cart -> shop_price = $good_price;
            $cart -> cart_count = $good_number;
            $cart -> goods_name = $good_name;
            $cart -> goods_attr_color = $good_color;
            $cart -> goods_attr_rule = $good_rule;

            $res = $cart -> save();

            if ($res) {
                echo 1;
            }else{
                echo 0;
            }
            
 
            // echo '用户已登录！';
            // dd(session('users'));

        }else{

            Cache::increment('id');
            $id = Cache::get('id', 1);
            $data = ['goods_id' => $good_id,'shop_price' => $good_price, 'cart_count' => $good_number, 'goods_name' => $good_name, 'goods_attr_color' => $good_color, 'goods_attr_rule' => $good_rule];



            Cache::forever('id', $id);

    
            $res = Cache::forever('cart'.$id, $data);

            // dd($res);
            if (empty(Cache::get('cart'.$id))) {

                echo 0;
            }else{
                echo 1;
            }
                // print_r(Cache::get('cart'.$id));

            //请空cache
            // Cache::flush();
            // echo '用户未登录！';

        }




        
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
        dump($request -> cookie('cart'));
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
}
