<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Links;
class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $links = Links::paginate(5);
        return view('/admin.links.index',['links' => $links]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/admin.links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> except('_token');
        $links = new Links;
        if ($request -> hasFile('link_logo') && $request -> has('link_url') && $request -> has('link_name') && $request -> has('link_depict')) 
        {
            //创建文件上传对象
            $profile = $request -> file('link_logo');
            //处理文件名称,拼接后缀
            $ext = $profile -> getClientOriginalExtension();
            $temp_name = date('Ymd',time()).str_random(10);
            $name = $temp_name.'.'.$ext;
            //移动到upload目录下,重命名
            $profile -> move('./uploads/',$name);
            //执行添加
            $links -> link_logo = $name;
            $links -> link_name = $data['link_name'];
            $links -> link_depict = $data['link_depict'];
            $links -> link_url = $data['link_url'];
            $links -> save();
            return redirect('/Admin/link')->with('success','添加成功!');
        }else
        {
            return back() -> with('error','初次添加请填写完整信息!');
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
        $links = Links::find($id);
    
        return view('admin.links.edit',['links' => $links]);
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
        $links = Links::find($id);
        if ($request -> hasFile('link_logo')) 
        {
            //创建文件上传对象
            $profile = $request -> file('link_logo');
            //处理文件名称,拼接后缀
            $ext = $profile -> getClientOriginalExtension();
            $temp_name = date('Ymd',time()).str_random(10);
            $name = $temp_name.'.'.$ext;
            //移动到upload目录下,重命名
            $profile -> move('./uploads/',$name);
            //执行添加
            $links -> link_logo = $name;
            $links -> link_name = $data['link_name'];
            $links -> link_depict = $data['link_depict'];
            $links -> link_url = $data['link_url'];
            $links -> save();
            return redirect('/Admin/link') -> with('success','修改成功!');
        }else{
            //执行添加
            $links -> link_name = $data['link_name'];
            $links -> link_depict = $data['link_depict'];
            $links -> link_url = $data['link_url'];
            $links -> save();
            return redirect('/Admin/link')->with('success','修改成功!');
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
        //硬删除
        $flight = Links::find($id);
        $flight->delete();
        return redirect('/Admin/link')->with('success','删除成功!');
    }
}
