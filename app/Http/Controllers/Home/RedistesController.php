<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPostRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;
use DB;
use Mail;
class RedistesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function register()
    {
         return view('home.user.register');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function emails(Request $request)
    {

         if($request->input('password')!=$request->input('password_confirmation')){
 
               return back()->with('error','密码失败');

         }
         $arr['email'] = $request->input('email');
         $arr['password'] = Hash::make($request->input('password'));
         $arr['token'] = str_random(50);
         $id = DB::table('s_users')->insertGetId($arr);
     
         if($id){
          $token = $arr['token'];
          $email = $arr['email'];
               
             self::sendmail($email,$id,$token);
                echo "cheng";
          }else{
             
                echo "bai";

          }

    }
      
      //发送邮件
      
      static public function sendmail($email,$id,$token)
      {
            Mail::send('home.user.email', [], function ($m) use ($email) {
            //$m->from('hello@app.com', 'Your Application');

             $m->to($email)->subject('BiYao 注册邮件，点击激活');

            });

      }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 手机注册ajax
     */
    public function getSendcode(Request $request)
    {
       
         $phone = $request->input('phone','15910543236');
         $str = rand(1000,9999);
         session(['phonecode'=>$str]);  
          $url = 'http://106.ihuyi.com/webservice/sms.php?method=Submit&account=C13487006&password=52dbfd377fef8097743cc220ad59199d&mobile='.$phone.'&format=json&content=您的验证码是：'.$str.'。请不要把验证码泄露给其他人。 ';
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         curl_setopt($ch , CURLOPT_URL , $url);
         $res = curl_exec($ch);
         $arr = json_decode($res , true);
         echo $arr['code'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function storephone(Request $request)
    {        
                $pho = $request->input('phone');
  

                if ($request->input('password')!=$request->input('password_confirmation')) {
                       return back()->with(['pass'=>'密码不匹配','pho'=>$pho]);
                 }else{
                        
                       $passs = $request->input('password');
                       
                       //return redirect('')->with(['pho'=>$pho,'passs'=>$passs]);
                       session(['pho'=>$pho,'passs'=>$passs,'chenggong'=>'注册成功']);
                       
                       return view('home.user.zhuinfor');

                 }
           

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
