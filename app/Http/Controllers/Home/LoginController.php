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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {   
        
        return view('home.login.login');
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
          }else{
                 echo '2';
                 return;
          }
     
    }
     public function entry(Request $request)
     {
            $user=$request->input('username');
            $pass=$request->input('password');//前台密码
            $users=user::where('user_name','=',$user)->first();
            if(Hash::check($pass,$users['password'])){
                     session(['users'=>$users]);
                     return redirect('/');
                }else{
                     return back()->with(['error'=>'请输入正确的密码','userss'=>$user]);       
              }
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
