<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\Goods;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Cates;
use App\Models\GoodImgs;

class RecycleController extends Controller
{
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
        //
        // echo 'index';
        //永久删除
        // $recs = Goods::onlyTrashed() -> first() -> forceDelete();
        
        //取出所有回收站商品数据
        $data = Goods::onlyTrashed() -> paginate(4);
        // dd($data);
        return view('admin/goods/recindex',['goods' => $data,'cates' => self::getCates()]);

    }

    /**
     * Show the form for creating a new resource.
     * 恢复回收站的商品
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        // echo "create".$id;
        $res = Goods::withTrashed() -> where('goods_id',$id) -> restore();
        if ($res) {
            return back() -> with('success','宝贝已恢复！');
        }else{
            
            return back() -> with('error','宝贝恢复失败！');
        }
    }

    /**
     * Store a newly created resource in storage.
     *  商品上下架
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        //
        // echo $id;

        //============================单个上下架=============================
        if (isset($id)) 
        {
            # code...

            $good = Goods::find($id);

            $goodTop = $good -> goods_top;

            //通过三元判断变换上架字段的值
            $good -> goods_top = $goodTop == 'y' ? 'n' : 'y';

            //执行修改
            $res = $good -> save();

            if ($res) {
                
                $good -> goods_top == 'y' ? $with = '上架成功！' : $with = '下架成功！';
                return back() -> with('success',$with);
            }else{
                
                return back() -> with('error','上/下架失败！');
            }
        }


    

        // dd($goodTop);       
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
     * 永久删除回收站的商品数据
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // echo "destroy".$id;
        $res = Goods::onlyTrashed() -> find($id) ->forceDelete();
     
        return back() -> with('success','宝贝已永久删除！');
        
    }
}
