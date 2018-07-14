<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\user;
use App\Http\Requests\StoreBlogPostRequest;
use App\Http\Requests\LoginPostRequest;
use App\Http\Requests\InforPostRequest;
use DB;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admin.login');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 执行登录
     */
    public function exect(LoginPostRequest $request)
    {
        //获取对应的密码
       $uname = $request->input('user_name');   
        $passwords = $request->input('password');
        $data = user::where('user_name','=',$uname)->first();
        //获取对应的值
       
      
              session(['data'=>$data]);

              return redirect('/Admin')->with('success','登录成功');
      
    }
    //退出登录
    public function loginout()
    {

         $data = session()->flush();
         return redirect('/Admin/login');
    }


    //个人信息
    public function infor(){

         return view('admin.user.infor');
    }

    //修改个人信息
    public function revise(InforPostRequest $request){

       
                $data = $request->except('_token');
                $id = $data['user_id'];
                 
               
            if (empty($request['user_pic']))
            {

                $data['user_pic'] = session('data')->user_pic;

            }else{
            
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

     
             }
               
              
                $all=user::find($id)->update($data);

            if($all){
                  
                   return redirect('/Admin')->with('success','修改成功');

              }else{

                   return back()->with('error','修改失败');
              }
         }
    

    public function repass()
    {

        return view('admin.user.repass');
    }

    //密码修改
    public function reset(Request $request)
    {

            $data = $request->all();
            $id= $data['user_id'];
            $users = user::find($id);
            $pass = $users->password;//原密碼
            $oldpass = $data['password'];

           if(Hash::check($oldpass,$pass))
            { 
              if($data['password'] !== $data['newpassword'])
                {
                   
                    $users ->password = Hash::make($data['newpassword']);
                    $users ->save();

                    return redirect('/Admin')-> with('success','修改成功');   

                }else{
                    return back()->with('error','新密码不能与原密码重复'); 
                     }

                }else{

                    return back()->with('error','原密码不正确');
               }   
            }
    

}
