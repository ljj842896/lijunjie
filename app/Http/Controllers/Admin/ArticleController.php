<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('admin.article.article');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
           $arr['article'] = $request->input('article');
           $arr['content'] = $request->input('content');

           $article = DB::table('s_article')->insert($arr);
       
           if($article){
              return redirect('/Admin/article')->with('success','添加成功');
           }else{

              return back()->with('error','添加失败请重新添加');
           }
        
    }

   
}
