<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Article;
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
           
              $data = $request->except('_token');
              $res = Article::create($data);
  
        if($res){

              return redirect('/Admin/article')->with('success','添加成功');

           }else{

              return back()->with('error','添加失败请重新添加');
           }
        
    }

   
}
