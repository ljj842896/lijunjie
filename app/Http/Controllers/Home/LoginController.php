<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\user;
use DB;
use Hash;
class LoginController extends Controller
{

   public function __construct()
    {
       $this -> middleware('sys');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {   
        
        return view('home.user.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exect(Request $request)
    {
          //浏览器用户名获取
          
          $user = $request->input('username');
          if(empty($user)){
               echo '3';
               return;
          }
          $data = user::where('user_name','=',$user)->first();
          if($data){   
                 echo '1';
                 return;
          }
          $phone = user::where('phone','=',$user)->first();
          if ($phone) {
                 echo '1';
                 return;
          }

          $email = user::where('email','=',$user)->first();
          if($email){
              echo '1';
                 return;
          }else{

              echo '2';
                return;
          }
    }
     public function entry(Request $request)
     {       
             $jihuo=$request->input('status');
             if($jihuo == 1){
                 return back()->with(['emailjihuo'=>'请输入正确的密码','jihuo'=>$jihuo]);
             }else{
            $user=$request->input('username');
            $users=user::where('user_name','=',$user)->first();
            $email=user::where('email','=',$user)->first();
            $phone=user::where('phone','=',$user)->first();
    
            if($users){
                $pass=$request->input('password');//前台密码
                if(Hash::check($pass,$users['password'])){
                         session(['users'=>$users]);
                         return redirect('/');
                    }else{
                         return back()->with(['error'=>'请输入正确的密码','userss'=>$user]);           
                  }
 
              }elseif($email){
                $pass=$request->input('password');//前台密码
                if(Hash::check($pass,$email['password'])){
                         session(['users'=>$email]);
                         return redirect('/');
                    }else{
                         return back()->with(['error'=>'请输入正确的密码','userss'=>$user]);           
                  }

            
              }elseif($phone){
                $pass=$request->input('password');//前台密码
                if(Hash::check($pass,$phone['password'])){
                         session(['users'=>$phone]);
                         return redirect('/');
                    }else{
                         return back()->with(['error'=>'请输入正确的密码','userss'=>$user]);           
                  }

              }else{

                    return back()->with();
              }
            }
     }   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginout()
    {
         $users = session()->flush();

         return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Informa()
    {

             $id = session('users')->user_id;
             $a  = user::where('user_id',$id)->first();
             $pic=$a['user_pic'];
             $user_name=$a['user_name'];
             $sex=$a['sex'];
             return view('home.user.informa',['pic'=>$pic,'user_name'=>$user_name,'sex'=>$sex]);
    }

     public function upload(Request $request)
     {
               
             $un=user::find(session('users')->user_id);

              $profile=$request->file('profile');
              $ext = $profile->getClientOriginalExtension();
              $temp_name = str_random(20);
              $name =  $temp_name.'.'.$ext;
              $un['user_pic']=$name;
              $res=$profile->move('./uploads/',$name);
              
              if ($res) {
                      $arr=[
                          'code'=>0,
                          'msg'=>'更改成功',
                          'data'=>[
                             'src'=>'/uploads/'.$name
                          ]

                      ];
              }else{

                      $arr=[

                          'code'=>1,
                          'msg'=>'更新失败',
                          'data'=>[
                             'src'=>''
                          ]

                      ];
                 }
                $un -> save();
                echo json_encode($arr); 
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function inforupdete(Request $request)
    {
         $username = $request->input('user_name');
         $sexs = $request->input('sex');
         $data=user::find(session('users')->user_id);
         $data->user_name=$username;
         $data->sex=$sexs;
         $data -> save();
         if($data){
             return back()->with('success','更新成功');
         }else{
             return back()->with('error','更新失败');
         }
    }

   

    public function userupdate(Request $request){
                
               $id = (session('users')->user_id);
               $users = user::find($id);
               $passs = $users['password'];//数据库密码
               $password =$request->input('password'); 
               $rpassword =$request->input('rpassword'); 

               if($password == $rpassword){

                   return back()->with('passerror','新密码不能与原密码重复');
               }else{
                     
                     $users['password'] = Hash::make($rpassword);
                     $res = $users->save();
                     if ($res) {
                          return back()->with('passup','修改成功');
                       }else{
                          return back()->with('passups','修改失败');
                       }  
               }
              
    }




    public function passupdate(){

          
             $id = session('users')->user_id;
             $a  = user::where('user_id',$id)->first();
             $pic=$a['user_pic'];
             $user_name=$a['user_name'];
             return view('home.user.passupdate',['pic'=>$pic,'user_name'=>$user_name]);



    }

    public function ajaxpass(Request $request){
           $id = (session('users')->user_id);
           $users = user::find($id);
           $passs= $users['password'];
           $homepass = $request->input('pass');
           if(Hash::check($homepass,$passs)){
                  echo '1';
           }else{
                  echo '2';
           }
          
    }

    public function lethe(){

           return view('home.user.lethe');
    }

    public function phones(Request $request){
       
            $phone = $request->input('phone');
            $data = user::where('phone',$phone)->first();

            if ($data) {
              echo '1';
            }else{
               echo '2';
            }
    }
    



         public function ajaxemail(Request $request){
                
               $username = $request->input('username');
                
                if (empty($username)) {
                  echo '3';
                }
               $res = user::where('user_name',$username)->first();
              
               if($res){
                    echo '1';
                }else{

                     echo '2';
                }

                 
          }
    
}
