<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\Goods;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Cates;
use App\Models\GoodImgs;
use App\Http\Requests\GoodsRequest;

class GoodsController extends Controller
{
    // public $login = null;
    public function __construct()
    {
       $this -> middleware('login');
    }
 

    public function ajaxGoods()
    {
         
        $cat_id = isset($_GET['id']) ? $_GET['id'] : null;


        if (isset($cat_id)) {
            # code...
            $data = DB::select('select * from s_goods where cat_id = ?',[$cat_id]);
        }

        $name = isset($_GET['name']) ? $_GET['name'] : null;
        if (isset($name)) {
             $p = '%'.$name.'%';
            $data = DB::select('select * from s_goods where goods_name like ?',[$p]);
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
            // dd(session('data'));
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


        $data['goods_attr_color'] = implode($data['goods_attr_color'], ',');
        
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
        // echo $id;
        //调取对应的商品详情
        $good = Goods::find($id); 
        // dd($good -> goods_images);
        return view('admin/goods/show',['good' => $good]);
 
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
        $good = Goods::find($id);
        // dump($good -> goods_images);
        // dd($good -> goods_attr_color);
        return view('admin/goods/edit',['good' => $good,'cates' => self::getCates()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GoodsRequest $request, $id)
    {
        //
        // echo $id;
        $data = $request -> except(['_token','_method','img_url']);

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



        //=====================执行修改=======================
        DB::beginTransaction();


        //保存商品表
        $res1 = DB::table('s_goods') -> where('goods_id',$id) -> update($data);

       

        //保存商品详情
        $res2 = DB::table('s_good_attrs')-> where('goods_id',$id) -> update(['goods_id' => $id,'goods_attr_color' => $data['goods_attr_color'],'goods_attr_rule' => $data['goods_attr_rule']]);


        //执行保存
         if ($res1 && $res2) 
                {
                    //提交并跳转商品列表
                    DB::commit();
                    return redirect('/Admin/goods') -> with('success','商品修改成功！');
                }else{
                    //回滚并返回create页面
                    DB::rollBack();
                    return back() -> with('error','商品修改失败！');
                }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
            // dd($id);
            // dd($request -> all());
            //===============批量上下架==============
            //判端是否是批量上下架按钮提交的数据
            if (isset($request['store'])) {
                // dd('store');
                $ids = $request['goods_id'];
                if (isset($ids)) {
                    array_shift($ids);
                    
                    // dd($ids);
                    $j = count($ids);
                    // dd($j);
                    //遍历上下架
                    $i = 0;

                    foreach ($ids as $key => $id) {
                        $i++;
                        $good = Goods::find($id);

                        $goodTop = $good -> goods_top;

                        //通过三元判断变换上架字段的值
                        $good -> goods_top = $goodTop == 'y' ? 'n' : 'y';

                        //执行修改
                        $res = $good -> save();

                    }
                        if ($i == $j) {

                            // echo "1";
                            
                            
                            return back() -> with('success','上/下架成功！');
                        }else{
                            
                            return back() -> with('error','上/下架失败！');
                        }






                }else{

                    return back() -> with('error','请选择商品！');
                }
            }




            DB::beginTransaction();
            //先删除商品
            //=================多删==================
            if (isset($request['goods_id'])) 
            {   
                $ids = $request['goods_id'];

                foreach ($ids as $key => $v) {
                    if (GoodImgs::where('goods_id',$v) -> first()) {
                        # code...
                        $res1 = GoodImgs::where('goods_id',$v) -> delete();
                    
                        if (!$res1) {
                            DB::rollBack();
                            return back() -> with('error','有图片删除不成功！');
                        }
                    }

                }



                $res2 = Goods::destroy($ids);


                if ($res2) {
                        DB::commit();
                        return back() -> with('success','商品删除成功！');   
                    }else{
                        DB::rollBack();
                        return back() -> with('error','商品删除失败！');   
                    }
                
                // $res = Goods::destroy($ids);

            }


            //====================单删==========================
            if (isset($id) && $id != 0) 
            {
                if (GoodImgs::where('goods_id',$id) -> first()) 
                {
                    # code...
                    $res1 = GoodImgs::where('goods_id',$id) -> delete(); 

                    $res2 = Goods::find($id) -> delete();            

                    if ($res1 && $res2) 
                    {
                        DB::commit();
                        return back() -> with('success','宝贝删除成功！');
                    }else{
                         DB::rollBack();
                        return back() -> with('error','宝贝删除失败！');
                    }               

                }

               
                        // dd($id); 
                    $res2 = Goods::find($id) -> delete();            
                        if ($res2) 
                        {
                            DB::commit();
                            return back() -> with('success','宝贝删除成功！');
                        }else{
                             DB::rollBack();
                            return back() -> with('error','宝贝删除失败！');
                        }               


            }

            return back() -> with('error','请选择商品！');


    }





    //添加商品相册图片
    public function goodimg_add(Request $request)
    {
        // echo "string";
        // $goodImgs = $request -> file('img_url');
        $id = isset($request['goods_id']) ? $request['goods_id'] : null;
        // dd($id);
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
                        return back() -> with('success','图片添加成功！');
                    }else{
                        
                        $res2 = false;
                        return back() -> with('error','图片添加失败！');
                    }
 
            }
    }


    //删除商品相册图片
    public function goodimg_del($imgId)
    {
        // echo $imgId;
        $res = GoodImgs::find($imgId) -> delete();      

        if ($res) {
                
                return back() -> with('success','图片删除成功！');
            }else{

                return back() -> with('error','图片删除失败！');
            }    
    }
}   
