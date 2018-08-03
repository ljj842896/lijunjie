<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Cates;
use App\Models\Goods;
use App\Models\Links;
use App\Models\Ads;
use App\Models\Carts;
use App\Models\Collect;
use App\Models\user;

use App\Models\Article;

use Cache;
use DB;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{


     public function __construct()
    {
       $this -> middleware('sys');
    }
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
        //筛选所有有商品的分类$cate_goods
        // dd($cate);
        foreach ($cat as $key => $val) {
            if (Goods::where('cat_id',$val['cat_id'])->first()) {
                $cate_goods[] = $val;
            }
        }
        
        $cat_key = array_rand($cate_goods,10);


        $articles = Article::first();

        //购物车中的数量
        if (session('users')) {
            # code...
            $cart_count = Carts::where('user_id',session('users') -> user_id) -> count();


            return view('home.index',['ads' => $ads, 'links' => $links, 'cat_key' => $cat_key, 'cate_goods' => $cate_goods, 'cart_count' => $cart_count, 'articles' => $articles]);

        }else{

            return view('home.index',['ads' => $ads, 'links' => $links, 'cat_key' => $cat_key, 'cate_goods' => $cate_goods, 'articles' => $articles]);
        
        }
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
        $goods = Goods::where('cat_id',$id) -> where('goods_top','=','y') -> get();

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
     *  用户收藏
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if (isset($_GET['goods_id'])) {
            # code...
            $data = Collect::where('goods_id',$_GET['goods_id']) -> where('user_id',session('users') -> user_id) -> first();

            if (empty($data)) {
                
                $collect = new Collect;
                $collect -> user_id = session('users') -> user_id;
                $collect -> goods_id = $_GET['goods_id'];
                $res = $collect -> save();
                if ($res) {
                    echo 1;
                    exit;    
                }else{
                    echo 2;
                    exit;    
                }

            }else{
                echo 3;
                exit;
            }
            
        }
       

    }

    /**
     * Update the specified resource in storage.
     *  取消收藏
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
        $user_id = session('users') -> user_id;

        $goods_id = $_GET['goods_id'];

        $res = Collect::where('user_id',$user_id) -> where('goods_id',$goods_id) -> delete();

        if ($res) {
            
            echo 1;
        }else{
            
            echo 0;
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        // 
        $user = user::find(session('users') -> user_id);


        return view('home/user/collect',['user' => $user]);

    }

    //全局搜索
    public function search()
    {
        $search = $_GET['search'];
        // $search = '卫衣';

        //查询商品
        $goods = DB::table('s_goods') -> where('goods_name','like',"%{$search}%") -> orwhere('keywords','like',"%{$search}%") -> get();    
        // echo 1;
        // // dd($goods);
        echo json_encode($goods);
        // return view('home/search_good');   
    }
}
