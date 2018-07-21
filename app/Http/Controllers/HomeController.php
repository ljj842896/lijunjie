<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Cates;
use App\Models\Goods;
use App\Models\Links;
use App\Models\Ads;
use Cache;

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
        

        //友情链接数据调取
        $links = Links::get();
        
        
        //云标签分类数据调取
        $cat = Cates::get();
        foreach ($cat as $key => $val) {
            if (substr_count($val['cat_path'], ',') == 3) {
                $cate[] = $val;
            }
        }
        $cat_key = array_rand($cate,10);
        //筛选所有有商品的分类$cate_goods
        // dd($cate);
        foreach ($cat as $key => $val) {
            if (Goods::where('cat_id',$val['cat_id'])->first()) {
                $cate_goods[] = $val;
            }
        }


        return view('home.index',['ads' => $ads, 'links' => $links, 'cat_key' => $cat_key, 'cate' => $cate,'cate_goods' => $cate_goods]);
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
     *  分类页面
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        //
        // echo 'store';
        // dd($id);
        $cate = Cates::find($id);
        // dd($cate);
        $goods = Cache::remember('goods',120,function(){
            return Goods::where('cat_id',$id) -> where('goods_top','=','y') -> get();
        });
        // dd(empty($goods[0]));
        return view('home/cate_index',['cat' => $cate,'goods' => $goods]);
    }

    /**
     * Display the specified resource.
     *  商品详情页
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $good = Goods::find($id);
        // dd();
        //颜色
        $color = explode(',', $good['goods_attr_color']);
        //尺寸
        $rule = explode(',', $good['goods_attr_rule']);
        // dd($rule);
        return view('home/good_index',['good' => $good, 'color'=> $color, 'rule' => $rule]);

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
