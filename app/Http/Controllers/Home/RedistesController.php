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
              return view('home.user.emailzhuce',['email'=>$email,'cemail'=>'cemail','id'=>$id]); 
             
          }else{
                echo "失败";     
          }
          

    }
      


     //激活邮件
          public function getJihuo($id,$token,Request $request){
               
                

                  $user = DB::table('s_users')->where('user_id',$id)->first();

                   if($user['token']==$token){

                           if($user['status']==1){

                                   $res = DB::table('s_users')->where('user_id',$id)->update(['status'=>2,'token'=>str_random(50)]);

                            if($res){
                                echo "11111";
                            }else{

                                 echo "失败";
                            }
                        }else{

                             echo "已经激活";
                        }
                   }else{

                         echo '链接失效';
                   }

            }


      //发送邮件
      
      static public function sendmail($email,$id,$token)
      {     
            
            Mail::send('home.user.email', ['id'=>$id,'token'=> $token], function ($m) use ($email) {
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
    public function emailzhuce(Request $request)
    {
        $id=$request->input('id');
        $data=user::where('user_id',$id)->first();
        $data['user_name']=$request->input('user_name');
        $data['phone']=$request->input('phone');
        $jihuos = $data['status'];

            
       if($data->save()){
       return redirect('/login')->with(['emailjihuo'=>'请激活后登录时','jihuo'=>$jihuo]);
        /* $emailjihuo='注册成功请在邮箱里激活后再登录';
         return view('home.user.login',['emailjihuo'=>$emailjihuo,'jihuo'=>$jihuo]);*/
         /* $emailjihuo='注册成功请在邮箱里激活后再登录';
          return view('home.user.login',['emailjihuo'=>$emailjihuo,'jihuos'=>$jihuos]);*/
        }else{

                    
                  return back()->with('noupdate','添加失败');
        }
                
        
    }
}
