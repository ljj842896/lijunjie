<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Cates;
use App\Models\Ads;
use DB;
class AdController extends Controller
{
     public function __construct()
    {
       $this -> middleware('login');
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
        
        $absdata = Ads::paginate(5);
        // dd($absdata);
        return view('admin.ad.index',['absdata' => $absdata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //获取分类信息
        return view('admin.ad.create',['cates' => self::getCates(0)]);
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
        $data = $request -> except('_token');
        $catid = $request -> input('cat_id');
        $ads = new Ads;
        if (!$request -> input('cat_id')) {
            return back() -> with('error','请选择轮播图的分类!');
        }
        if ($request -> hasFile('ad_img')) 
        {
            $profile = $request -> file('ad_img');
            $ad_name = date('Ymd',time()).str_random(15);
            $ext = $profile -> getClientOriginalExtension();
            $name = $ad_name.'.'.$ext;
            $profile -> move('./uploads/ad',$name);
            $ads -> ad_img = $name;
            $ads -> cat_id = $catid;
            $ads -> save();
            return redirect('/Admin/ad') -> with('success','添加成功!');
        }else
        {
            return back() -> with('error','请上传一张小于2M的轮播图片!');
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
        $abs = Ads::find($id);
        return view('admin.ad.edit',['cates' => self::getCates(0),'abs' => $abs]);
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
        $data = $request -> except('_token');
        $ads = Ads::find($id);
        if ($request -> has('cat_id') && $request -> hasFile('ad_img')) 
        {
            $pic = $request -> file('ad_img');
            $pic_name = date('Ymd',time()).str_random(15);
            $pic_ext = $pic -> getClientOriginalExtension();
            $picname = $pic_name.'.'.$pic_ext;
            $pic -> move('./uploads/ad/',$picname);
            
            $ads -> ad_img = $picname;
            $ads -> cat_id = $data['cat_id'];
            $res = $ads -> save();
            if ($res) {
                return redirect('/Admin/ad') -> with('success','修改成功!');
            }else{
                return back() -> with('errot','修改失败!');
            }
        }else{
            return back() -> with('error','请选择分区和轮播图!');
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
        $del = Ads::find($id);
        $del -> delete();
        return redirect('/Admin/ad')->with('success','删除成功!');
    }
}
