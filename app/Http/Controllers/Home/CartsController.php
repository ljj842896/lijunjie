<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Carts;
use App\Models\Goods;
use DB;
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
            //判断缓存中是否存在购物车清单
            if (Cache::has('cart1')) {
                
                //先把缓存里的购物车清单拿出来并清空，然后存到数据库中去
                $id = Cache::pull('id', 1);

                // echo $id;

                for ($i=1; $i <= $id; $i++) { 
                    
                    $res = Cache::pull('cart'.$i);
                    $res['user_id'] = session('users') -> user_id;
                    unset($res['cart_id']);
                    //执行添加
                    DB::table('s_carts') -> insert($res); 
                }


            }
            

            //取出数据库中的所有购物车清单
            if (Carts::where('user_id',session('users') -> user_id) -> first()) {
                # code...
                $data = Carts::where('user_id',session('users') -> user_id) -> get();
            }else{
                $data = null;
            }
            // dd($data);
        }else{
                // dd(Cache::has('cart1'));
                if (Cache::has('cart1')) {
                    $data = [];
                    $id = Cache::get('id');

                    // dd($id);

                    for ($i=1; $i <= $id; $i++) { 
                        # code...
                        $data[] = Cache::get('cart'.$i);
                    }

                }else{
                    $data = null;
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
        //商品头像
        $good_pic = Goods::find($good_id) -> goods_img; 

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
            $cart -> goods_img = $good_pic;

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
            $data = ['cart_id' => $id,'goods_id' => $good_id,'shop_price' => $good_price, 'cart_count' => $good_number, 'goods_name' => $good_name, 'goods_attr_color' => $good_color, 'goods_attr_rule' => $good_rule, 'goods_img' => $good_pic];



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
        $n = $_GET['n'];

        //修改数据库中的商品数量
        $res = Carts::find($id);
        $res -> cart_count = $n;
        $ress = $res -> save();

        if ($ress) {
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
        //执行删除
        if (session('users')) {

            //

            // dd(isset(var));

            if (isset($_GET['ids'])) {
            
            $ids = explode(',', $_GET['ids']);
            
              //多删

              foreach ($ids as $key => $id) {
                $res = Carts::find($id)->delete();
              }
             

                // dd($ids);
            }else{
                
                //单删
                $res = Carts::find($id)->delete();
            }

            
        }else{
            $res = Cache::forget('cart'.$id);
        }

        if ($res) {
            echo 1;
        }else{
            echo 0;
        }

        // echo $id;


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
