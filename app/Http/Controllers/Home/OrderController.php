<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Orders;
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
        // $good_number = isset($_GET['good_number']) ? $_GET['good_number'] : null;
        // //商品颜色
        // $good_color = isset($_GET['good_color']) ? $_GET['good_color'] : null;
        // //商品尺寸
        // $good_rule = isset($_GET['good_rule']) ? $_GET['good_rule'] : null;
        if (isset($_GET['good_attr'])) {
            echo 1;
        }
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
}
