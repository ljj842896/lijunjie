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
    public function index(Request $request)
    {
 
             
            $user_name = $request->input('user_name','');
          if(empty($user_name)){
                 $users = user::paginate(4);

             }else{

                 $users = user::where('user_name', 'like',$user_name.'%')->paginate(4);
                 
             }

           return view('admin.user.index',['users'=>$users,'user_name'=>$user_name]);

 
    }

    /**
     * Show the form for creating a new resource.
     *添加页面
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //设置用户登录权限
         if (session('data')->qx=='1') {
           
          return view('admin.user.create');

         }else{

             return back()->with('error','当前用户没有添加权限');
         }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 执行添加
     */
     public function store(StoreBlogPostRequest $request)
    {
            //获取值
            $data = $request->except('_token');
            $password = $request->input('password');

            
            //把密码进行加密
            $data['password'] = Hash::make( $password);
            
            
            if (empty($data['user_pic'])){
               
                   
                 return back()->with('error',' 请添加头像');
                   
 
            }else{
              


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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $data = user::find($id);

           return view('admin.user.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 跳转用户修改页面
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
     * 执行修改
     */
    public function update(StoreBlogPostRequest $request, $id)
    {
            

            $data = user::find($id);

            $data->user_name=$request['user_name'];
            $data->email=$request['email'];
            $data->sex=$request['sex'];
            $data->phone=$request['phone'];
            $data->user_address=$request['user_address'];
            $data->qx=$request['qx'];
             
             if(empty($request['user_pic'])){
                
                 $data->user_pic = session('data')->user_pic;

             }else{

                $profile=$request['user_pic'];
                //获取图片的后缀名
                $ext = $profile->getClientOriginalExtension();
                // 处理文件名称随机起名
                $temp_name = str_random(20);
                //拼接全名
                $name =  $temp_name.'.'.$ext;
                //重新赋值方便以存储
                
                //使用move进行上传设置上传的地址和 文件的名字
                $profile -> move('./uploads/',$name);
                $data->user_pic=$name;
              
             } 
              
            if ($data -> save())
            {
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
     * 执行删除
     */
    public function destroy($id)
    {
 
              if (session('data')->qx=='3') {

                return back()->with('error','当前用户没有删除权限');

              }else{

                  $data = user::where('user_id','=',$id)->delete();

                      if($data)
                     {
                           return redirect('/Admin/user')->with('success','删除成功');

                      }else{
                           return back()->with('error','删除失败');
                      }
              }
    }

    public function destroys()
    {
        

            $id = request()->input('id');
            $aa = explode(',',$id);
            $users = user::destroy($aa);
            if($users)
                     {
                          return redirect('/Admin/user')->with('success',$users.'条数据删除成功');

                    }else{
                         return back()->with('error','删除失败');
                     }
    }
}
