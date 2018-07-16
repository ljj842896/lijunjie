<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Orders;
class OrderController extends Controller
{
     public function __construct()
    {
       $this -> middleware('login');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        $orders = Orders::find($id);
        return view('admin.order.detail',['orders' => $orders]);
    }
    public function index()
    {
        //
        $orders = Orders::paginate(5);
        return view('admin.order.index',['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo '添加订单';

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
        $orders = Orders::find($id);
        return view('admin.order.edit',['orders' => $orders]);
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
        $data = $request -> except('_token','_method');
        $orders = Orders::find($id);
        if ($request -> has('goods_attr_color') && $request -> has('order_status')) 
        {
            $orders -> goods_attr_color = $data['goods_attr_color'];
            $orders -> goods_attr_rule = $data['goods_attr_rule'];
            $orders -> order_count = $data['order_count'];
            $orders -> shop_price = $data['shop_price'];
            $orders -> order_amount = $data['order_amount'];
            $orders -> rece_user_name = $data['rece_user_name'];
            $orders -> rece_user_tel = $data['rece_user_tel'];
            $orders -> rece_user_address = $data['rece_user_address'];
            $orders -> order_status = $data['order_status'];
            $res = $orders -> save();
            if ($res) {
                return redirect('/Admin/order') -> with('success','修改成功!');
            }else{
                return back() -> with('error','修改失败!');
            }
        }else{
            return back() -> with('error','请选择颜色!');
            }
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
        $orders = Orders::find($id);
        $orders -> delete();
        return redirect('/Admin/order') -> with('success','删除成功!');
    }
}
