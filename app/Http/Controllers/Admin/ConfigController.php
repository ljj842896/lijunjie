<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Config;
class ConfigController extends Controller
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
    public function index()
    {
        //
        $config = Config::find(1);
        // dd($config);
        return view('admin.sys.index',['config' => $config]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.sys.config');
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

        // dd($data);
        //判断id为1的数据是否存在
        if (isset(Config::find(1) -> id)) {
            //存在则修改

           

        }else{
            //否则添加
            if ($request -> hasFile('sys_log')) 
            {

                $config = new Config;
                //准备文件对象
                $profile = $request -> file('sys_log');
                $prefix = time().str_random(10);
                $ext = $profile -> getClientOriginalExtension();
                $logo_name = $prefix.'.'.$ext;
                $profile -> move('./uploads/sys',$logo_name);
                $config -> sys_title = $data['sys_title'];
                $config -> sys_keyword = $data['sys_keyword'];
                $config -> sys_file = $data['sys_file'];
                $config -> sys_log = $logo_name;
                $res = $config -> save();
                }else{
                return back() -> with('error','请选择网站Logo图片!');
            }
            if ($res) {
                return redirect('/Admin/config') -> with('success','修改配置成功!');
            }else{
                return back() -> with('error','修改配置失败!');
            }

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
        $data = Config::find(1);
        return view('admin.sys.edit',['data'=>$data]);
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
            $data = $request ->except('_token');
            // dd($data['sys_close']);
         if ($request -> hasFile('sys_log')) 
            {
                     $config = Config::find(1);
                    //准备文件对象
                    $profile = $request -> file('sys_log');
                    $prefix = time().str_random(10);
                    $ext = $profile -> getClientOriginalExtension();
                    $logo_name = $prefix.'.'.$ext;
                    $profile -> move('./uploads/sys',$logo_name);
                    $config -> sys_title = $data['sys_title'];
                    $config -> sys_keyword = $data['sys_keyword'];
                    $config -> sys_file = $data['sys_file'];
                    $config -> sys_close = $data['sys_close'];
                    $config -> sys_log = $logo_name;

                    $res = $config -> save();
                }else{
                return back() -> with('error','请选择网站Logo图片!');
            }
            if ($res) {
                return redirect('/Admin/config') -> with('success','修改配置成功!');
            }else{
                return back() -> with('error','修改配置失败!');
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
    }
}
