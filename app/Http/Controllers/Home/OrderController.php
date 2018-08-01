<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Orders;
 
use App\Models\Address;
use App\Models\Carts;
use App\Models\user;
use App\Models\Goods;
 
use Cache;
class OrderController extends Controller
{

     public function __construct()
    {
       $this -> middleware('sys');
    }
 
    public function pay(Request $request,$id)
    {
           
        
        // dd($id);
        $address = Address::find($id);
        return view('home.order.pay',['addres' => $address]);
 
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
        $data = Orders::where('user_id',$user_id) -> paginate(4);
        // $orders = Orders::find(3);
        // dd($data);
        return view('home.order.detail',['user_orders' => $data]);
    }

    public function index()
    {
        $user_data = session('users');
        $user_id = $user_data['user_id'];
        $data = Orders::where('user_id',$user_id) -> paginate(5);
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
 

        $data = Cache::pull('cart_data',null);
        $user_detail = session('users');
        $user_id = $user_detail['user_id'];
        $user_address = Address::where('user_id',$user_id) -> get();
        // dd($user_address);
        // dd($user_id);
        // dd($user_detail);

        //订单页模板
        // dd($data);
        return view('home.order.create',['data' => $data,'user_addr' => $user_address]);
 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        //
        // echo $id;
        //接受收货地址id

        //判断是否为购物车数据
        if (isset($_GET['idss'])) {
            // echo 1;
            //是购物车清单则取出并删除购物车数据
            $idss = explode(',', $_GET['idss']);
            // echo $_GET['idss'];
            // dd($idss);
            foreach ($idss as $key => $id) {
                $cart = Carts::find($id);
                $address = Address::find($id);
                
                $order = new Orders;
                $order -> goods_id = $cart['goods_id'];
                $order -> goods_attr_color = $cart['goods_attr_color'];
                $order -> goods_attr_rule = $cart['goods_attr_rule'];
                if (session('users') -> user_id) {
                    
                    $order -> user_id = session('users') -> user_id;
                }else{
                    return redirect('/login') -> with('error','请登录!');
                }

                $order -> order_sn = Goods::find($cart['goods_id']) -> goods_sn;
                
                $order -> order_time = date('Y-m-d H:i:s',time());

                $order -> goods_name = $cart['goods_name'];
                $order -> shop_price = $cart['shop_price'];
                $order -> goods_img = $cart['goods_img'];
                $order -> order_count = $cart['cart_count'];
                $order -> order_amount = $cart['shop_price']*$cart['cart_count'];
                $order -> order_status = 1;

                $order -> rece_user_tel = $address['tel'];
                $order -> rece_user_name = $address['uname'];
                $order -> rece_user_address = $address['address'];
                $order -> save();
                Carts::find($id) -> delete();
               
            }
                echo 1;
            
        }else{
                //是立即购买的数据的话,直接保存
                $goods_id = $_GET['goods_id'];          
                $goods_img = $_GET['goods_img'];          
                $goods_name = $_GET['goods_name'];          
                $goods_attr_color = $_GET['goods_attr_color'];          
                $goods_attr_rule = $_GET['goods_attr_rule'];          
                $shop_price = $_GET['shop_price'];          
                $cart_count = $_GET['cart_count'];          

                $cart = Carts::find($id);
                $address = Address::find($id);
                $order = new Orders;
                $order -> goods_id = $goods_id;
                $order -> goods_attr_color = $goods_attr_color;
                $order -> goods_attr_rule = $goods_attr_rule;
                if (session('users') -> user_id) {
                    
                    $order -> user_id = session('users') -> user_id;
                }else{
                    return redirect('/login') -> with('error','请登录!');
                }

                $order -> order_sn = Goods::find($goods_id) -> goods_sn;
                
                $order -> order_time = date('Y-m-d H:i:s',time());

                $order -> goods_name = $goods_name;
                $order -> shop_price = $shop_price;
                $order -> goods_img = $goods_img;
                $order -> order_count = $cart_count;
                $order -> order_amount = $shop_price*$cart_count;
                $order -> order_status = 1;

                $order -> rece_user_tel = $address['tel'];
                $order -> rece_user_name = $address['uname'];
                $order -> rece_user_address = $address['address'];
                $order -> save();

                echo 1;
        }


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
 

            }
            //把取出的数据存入缓存
            $res = Cache::forever('cart_data',$data);
 

            // dd($res);
   
            echo 1;
         
        }else{
            echo 0;
        }

    }
 
    public function buy()
    {
        return view('home.order.erweima');
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
