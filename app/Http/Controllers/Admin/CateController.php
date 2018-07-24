<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use DB;
use App\Models\Cates;
use App\Models\Goods;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CateController extends Controller
{
     public function __construct()
    {
       // $this -> middleware('login');
    }


    public function ajaxCates()
    {
         
        $cat_id = isset($_GET['id']) ? $_GET['id'] : null;


        if (isset($cat_id)) {
            # code...
            $data = DB::select('select * from s_cates where cat_id = ?',[$cat_id]);
        }

        $name = isset($_GET['name']) ? $_GET['name'] : null;
        if (isset($name)) {
             $p = '%'.$name.'%';
            $data = DB::select('select * from s_cates where cat_name like ?',[$p]);
        }

        // dd($data);
        
        // dd($data[1]['cat_id']);
        echo json_encode($data);
    }

    public static function getCates($id)
    {
        //使用原生函数拼接一个新字段，通过其升序排列         
        if ($id) {
            $data = Cates::select('cat_id','cat_name','cat_pid','cat_path',DB::raw("concat(cat_path,',',cat_id) as paths")) -> orderby('paths','asc') -> paginate($id);
            
        }else{
            $data = Cates::select('cat_id','cat_name','cat_pid','cat_path',DB::raw("concat(cat_path,',',cat_id) as paths")) -> orderby('paths','asc') -> paginate();

        }

         
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
       // dd(self::getCates());
        return view('admin/cate/index',['data' => self::getCates(6)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin/cate/create',['data' => self::getCates(200)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //验证数据是否存在
        if ($request -> input('cat_name')) {
            // echo 'true';   
            $data = $request -> except('_token');

            // dd($data);
            $cate = new Cates;
            $cate -> cat_name = $data['cat_name'];
            $cate -> cat_pid = $data['cat_pid'];
            
            //判断所选父id是否为0，为0则是路径则为0，否则为父级路径拼接父级id            
            if ($data['cat_pid'] == 0) {
                
                $cate -> cat_path = '0';
            }else{

                $res = Cates::where('cat_id',$data['cat_pid']) -> first();
                $cate -> cat_path = $res->cat_path.','.$res->cat_id;
                // $cate -> cat_path = $res[''];
            }
            $res = $cate -> save();
            if ($res) {
                
                // return redirect('/Admin/cate') -> with('success','分类添加成功！');
                return back() -> with('success','分类添加成功！');
            }else{

            }


        }else{
            return back() -> with('error','请输入分类名称!');
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
        $cate = Cates::find($id);
        // dd($cate);

        $pid = Cates::where('cat_pid',$id) -> first();
         if ($pid) {
             $login = true;
         }else{
             $login = false;
         }
         // dd($login);
        return view('/admin/cate/edit',['cate' => $cate,'data' => self::getCates(200),'login' => $login]);
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
        // dd($id);
        //验证数据是否存在
            $cate = Cates::find($id);
            // dd($cate);
        if ($request -> has('cat_name')) {

           // dump($request -> has('cat_name'));
            // dd($data);
            $cate -> cat_name = $request -> input('cat_name');
        } 


        if ($request -> has('cat_pid')) {
           
           // dump($request -> has('cat_pid'));
            // dd($data);
            $cate -> cat_pid = $request -> input('cat_pid');

            if ($request['cat_pid'] == 0) {
                
                $cate -> cat_path = '0';
            }else{

                $res = Cates::where('cat_id',$request['cat_pid']) -> first();
                $cate -> cat_path = $res->cat_path.','.$res->cat_id;
                // $cate -> cat_path = $res[''];
            }

        } 
            
            

            $res = $cate -> save();
            if ($res) {
                
                return redirect('/Admin/cate') -> with('success','分类修改成功！');
            }else{

                return back() -> with('error','分类修改失败！');
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
        // echo $id;
        $cates = Cates::where('cat_pid',$id) -> first();
        // dd($cates);
        $goods = Goods::where('cat_id',$id) -> first();
        if (empty($goods)) {
                    # code...
                if (empty($cates)) {

                    $res = Cates::find($id) -> delete();
                    if ($res) {
                        return back() -> with('success','删除成功！');
                    }else{

                        return back() -> with('error','删除失败！');
                    }
                }else{
                   
                    return back() -> with('error','警告：该分类下有子分类，不允许删除！');
                }
        }else{
            
                return back() -> with('error','警告：该分类下有商品，不允许删除！');
        }

                
    }
}
