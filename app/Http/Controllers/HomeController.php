<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Cates;
use App\Models\Goods;
use App\Models\Links;
use App\Models\Ads;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *  首页控制器
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //取数据
        //轮播图数据调取
        $ads = Ads::get();
        $links = Links::get();
        $cat = Cates::get();
        foreach ($cat as $key => $val) {
            if (substr_count($val['cat_path'], ',') == 3) {
                
                $cate[] = $val;
            }
        }
        $cat_key = array_rand($cate,10);
        return view('home.index',['ads' => $ads, 'links' => $links, 'cat_key' => $cat_key]);
    }

    /**
     * Show the form for creating a new resource.
     *  首页商家中心页面
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //商家中心
        echo "";
        return view('home/sjzx');

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
