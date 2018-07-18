<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\user;
use App\Http\Requests\StoreBlogPostRequest;
use App\Http\Requests\LoginPostRequest;

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
        // dd($data);
        //获取对应的值
       
        if (Hash::check($passwords,$data['password'])) {
           
            //添加login标记
            $data['login'] = true;
              
            session(['data'=>$data]);

              return redirect('/Admin')->with('success','登录成功');
        }else{
                 if(!$data)
                 {
                      
                      return back()->with('error','用户名不存在');

                  }

                  if(!Hash::check($passwords,$data['password']))
                   {
                       return back()->with('error','密码不对');

                   }
                
            }

       
    }
    //退出登录
    public function loginout()
    {

         $data = session()->flush();

         if (empty($data)) {
                return redirect('/Admin/login');
         }else{
            
         }
           
    }


    //个人信息
    public function infor(){

         return view('admin.user.infor');
    }

    //修改个人信息
    public function revise(StoreBlogPostRequest $request){

       
        $data = $request->except('_token');
       

        if ($request -> hasFile('user_pic')) {
            // dd($request -> hasFile('user_pic'));
            $profile = $request -> file('user_pic');
            // dd($profile);
            $ext = $profile -> getClientoriginalextension();
            // dd($ext); 
            $filename = time().str_random(10).$ext;
            // dd($filename);
            $res = $profile -> move('./uploads/',$filename);

            if ($res) {
                $data['user_pic'] = $filename;
            }else{
                return back() -> with('error','图像修改失败！');
            }
        }

        // dd($data['user_pic']);

        $id = $data['user_id'];
        
         $aaa=user::find($id)->update($data);
  
      
       if($aaa){
                  
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
                return back()->with('error','密码重复不正确'); 
                 }

            }else{

                return back()->with('error','原密码不正确');
           }   
        }
    

}
