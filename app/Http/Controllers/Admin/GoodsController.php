<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Models\Cates;
use App\Models\Goods;
use App\Models\GoodImgs;
use App\Http\Controllers\Controller;
use App\Http\Requests\GoodsRequest;

class GoodsController extends Controller
{

    public function ajaxGoods()
    {
         
        $cat_id = isset($_GET['id']) ? $_GET['id'] : null;


        if (isset($cat_id)) {
            # code...
            $data = DB::select('select * from s_goods where cat_id = ?',[$cat_id]);
        }

        $name = isset($_GET['name']) ? $_GET['name'] : null;
        if (isset($name)) {
            
            $data = DB::select('select * from s_goods where goods_name like "%?%"',[$name]);
        }

        // dd($data);
        foreach ($data as $key => $value) {
            # code...
            $data[$key]['cat_id'] = Cates::find($value['cat_id']) -> cat_name;

        }
        // dd($data[1]['cat_id']);
        echo json_encode($data);
    }



    public static function getCates()
    {
        //使用原生函数拼接一个新字段，通过其升序排列         
         
            $data = Cates::select('cat_id','cat_name','cat_pid','cat_path',DB::raw("concat(cat_path,',',cat_id) as paths")) -> orderby('paths','asc') -> get();

        
         
        foreach ($data as $key => $value) {
            // dump(strlen($value -> cat_path));
            
            $value->cat_name = str_repeat('|--', substr_count($value->cat_path, ',')).$value->cat_name;
            // dump($value -> cat_name);
        }

        return $data;
    }





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ajax交互数据
        // $cat_id = empty($_GET['cat_id']) ? null : $_GET['cat_id'];
        // // echo $cat_id;
        // if (isset($cat_id)) {
            
        //     $goods = goods::where('cat_id',$cat_id) -> paginate(4);
        // }else{

            
        // }
        // exit();
        // //
        // echo "this is GoodsController";
        //从数据库中提取出商品分类的数据
        // echo "string";
        // dd($goods);
            $goods = goods::paginate(4);
        return view('admin/goods/index',['goods' => $goods,'cates' => self::getCates()]);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/goods/create',['cates'=>self::getCates(0)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GoodsRequest $request)
    {
        //
        $data = $request -> except(['_token','img_url']);

        //判断是否有图片上传
        if ($request -> hasFile('goods_img')) {
            $goods_img = $request -> file('goods_img');
            
            //获取文件后缀名
            $ext = $goods_img -> getclientoriginalextension();
            
            //随机生成文件名
            $filename = time().str_random(10).'.'.$ext;

            $res = $goods_img -> move('./goods_img/',$filename);

            if ($res) {
                
                $data['goods_img'] = $filename;
                // dd($data['goods_img']);                           
            }else{

                 return back() -> with('error','图片上传失败！');
            }

        }


        // $good = new Goods;

        //先生使用时间戳和随机数成商品货号
        $data['goods_sn'] = time().mt_rand(10000,99999);
        
        //判断是否有商品关键字
        if ($request -> has('keywords')) {
            $data['keywords'] = $request['keywords'];
        }
        

        //判断是否有商品库存数
        if ($request -> has('goods_number')) {
            $data['goods_number'] = $request['goods_number'];
        }
 

        //判断是否有商品描述
        if ($request -> has('goods_brief')) {
            $data['goods_brief'] = $request['goods_brief'];
        }


        // dd($data);
        //==================执行保存====================
        //先开启事务
        DB::beginTransaction();


        //保存商品表
        $id = DB::table('s_goods')->insertGetId($data);

       

        //保存商品详情
        $res = DB::table('s_good_attrs')->insert(['goods_id' => $id,'goods_attr_color' => $data['goods_attr_color'],'goods_attr_rule' => $data['goods_attr_rule']]);



        //保存商品相册图片
        //判断是否有商品相册的数据
        if($request -> hasFile('img_url'))
        {
            $i = 0;
            $j = 0;

            //获取相册信息
            $goods_imgs = $request -> file('img_url');

            //遍历接收到的相册图片
            foreach ($goods_imgs as $key => $good_img) {
                
                $goodImgs = new GoodImgs;
                // echo "1";
                //获取文件后缀名
                $ext = $good_img -> getclientoriginalextension();
                
                //随机生成文件名
                $filename = time().str_random(10).'.'.$ext;

                $res = $good_img -> move('./goods_img/',$filename);

                if ($res) {
                    //执行添加相册
                    // echo "2";
                    // $goodImgs -> goods_id = $data[''];
                    $goodImgs -> goods_id = $id;
                    $goodImgs -> img_url = $filename;
                    // dump($filename);
                    $res = $goodImgs -> save();
                    // echo '3';
                    if ($res) {
                        $i ++;
                        $j ++;
                    }else{
                        return back() -> with('error','商品相册图片上传失败！');
                    }

                }else{

                        return back() -> with('error','商品相册图片上传失败！');
                }
            }
                if ($i == $j) {
                    $res2 = true;
                }else{
                    
                    $res2 = false;
                }



                //执行最后判断
                if ($id && $res && $res2) 
                {
                    //提交并跳转商品列表
                    DB::commit();
                    return redirect('/Admin/goods') -> with('success','商品发布成功！');
                }else{
                    //回滚并返回create页面
                    DB::rollBack();
                    return back() -> with('error','商品发布失败！');
                }
        }


                 //执行最后判断
                if ($id && $res) 
                {
                    //提交并跳转商品列表
                    DB::commit();
                    return redirect('/Admin/goods') -> with('success','商品发布成功！');
                }else{
                    //回滚并返回create页面
                    DB::rollBack();
                    return back() -> with('error','商品发布失败！');
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
