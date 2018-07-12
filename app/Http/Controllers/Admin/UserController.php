<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogPostRequest;
use App\Models\user;
use DB;
use Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $users = user::all();
           
          return view('admin.user.index',['users'=>$users]);
          
    }

    /**
     * Show the form for creating a new resource.
     *添加页面
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //echo "string";
          return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(StoreBlogPostRequest $request)
    {
            //获取值
            $data = $request->except('_token');
            $password = $request->input('password');

            
            //把密码进行加密
            $data['password'] = Hash::make( $password);
            
           
            /**/
            //复制变量
            $profile = $data['user_pic'];
            //获取图片的后缀名
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称随机起名
            $temp_name = str_random(20);
            //拼接全名
            $name =  $temp_name.'.'.$ext;
            //重新赋值方便以存储
            $data['user_pic']=$name;
            //使用move进行上传设置上传的地址和 文件的名字
            $profile -> move('./uploads/',$name);
            //使用模板存储
           $data = user::create($data);
            
              if($data){
                  
                   return redirect('/Admin/user')->with('success','添加成功');

              }else{
                   return back()->with('error','添加失败');
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
           
          $data = user::where('user_id',$id)->first();
          
          return view('admin.user.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * //$user = Admin::find(1);
    //$user->username = 'jack';
    //$bool = $user->save();
    //dd($bool);
     */
    public function update(StoreBlogPostRequest $request, $id)
    {
            

          $data = user::find($id);

          $data->user_name=$request['user_name'];
          $data->email=$request['email'];
          $data->sex=$request['sex'];
          $data->phone=$request['phone'];
          $data->user_pic=$request['user_pic'];
          $data->user_address=$request['user_pic'];
          $data->qx=$request['qx'];
        
           
            if($data -> save()){
                  
                   return redirect('/Admin/user')->with('success','修改成功');

              }else{
                   return back()->with('error','修改失败');
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

         $data = user::where('user_id','=',$id)->delete();
          if($data){
                  
                   return redirect('/Admin/user')->with('success','删除成功');

              }else{
                   return back()->with('error','删除失败');
              }
    }
}
