<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPostRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\user;
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
       

    }
      
      //发送邮件
      
      static public function sendmail($email,$id,$token)
      {     
            
            Mail::send('home.user.email', [], function ($m) use ($email) {
             $m->to($email)->subject('BiYao 注册邮件，欢迎加入必要');
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
          $url = 'http://106.ihuyi.com/webservice/sms.php?method=Submit&account=C32346016&password=731b866851f7ea32684cfae2d8711120&mobile='.$phone.'&format=json&content=您的验证码是：'.$str.'。请不要把验证码泄露给其他人。 ';
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         curl_setopt($ch , CURLOPT_URL , $url);
         $res = curl_exec($ch);
         $arr = json_decode($res , true);
         echo $arr['code'];
    }

    /**
     * Display the specified resource.
     *注册执行
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function storephone(Request $request)
    {        
                $pho = $request->input('phone');
                if (session('phonecode') != $request->input('phonecode')) {
               
                 return back()->with(['error'=>'验证码不匹配','pho'=>$pho]);
                 
           }else{

                if ($request->input('password')!=$request->input('password_confirmation')) {
                       return back()->with(['pass'=>'密码不相等','pho'=>$pho]);
                 }else{
                        
                       $passs = $request->input('password');
                       
                       //return redirect('')->with(['pho'=>$pho,'passs'=>$passs]);
                       session(['pho'=>$pho,'passs'=>$passs,'chenggong'=>'注册成功']);
                       
                       return view('home.user.zhuinfor');

                 }
           
          }
    }

  public function letheupdate(Request $request){

              $phone = $request->input('phone');        
              session(['phe'=>$phone]);  
              $phonecode = $request->input('phonecode');
               if (session('phonecode') != $request->input('phonecode')) {
                    return back()->with(['yanerror'=>'验证码不匹配','phone'=>$phone]);
               }else{
                    return view('home.user.passset');
               }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function client(Request $request)
    {
            
        $users = $request->except(['_token','password']);
         

         $password = $request->input('password');
         $users['password'] = Hash::make( $password);
         $users = user::create($users);
         if($users){
              
              session(['users'=>$users]);
              return redirect('/')->with('logincheng','登录成功');

         }else{

              return back()->with('shibai','填写有误请重新填写');

         }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function passset(Request $request)
    {
               $news = $request->input('newpassword');
               $newpassword = Hash::make($news);
               $phes =session('phe');
               $data = user::where('phone',$phes)->first();
               $data['password']=$newpassword;
               $data->save();
               if($data){

                     return redirect('/login')->with('loginss','设置成功请重新登录');
               }else{

                     return bakc()->with();
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
