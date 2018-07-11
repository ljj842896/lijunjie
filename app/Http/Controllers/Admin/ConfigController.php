<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Config;
class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.sys.config');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $config = Config::find(1);
        if ($request -> hasFile('sys_log')) 
        {
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
