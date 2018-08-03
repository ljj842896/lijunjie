<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
     public function __construct()
    {
       $this -> middleware('sys');
    }

    public function homeindex()
    {
        //前台文章浏览
        $article = Article::paginate(5);
        if ($article) {
            return view('home.article.index',['article_data'=>$article]);
        }else{
            return back() -> with('error','还未发布文章!');
        }
    }

    public function index()
    {
        //
        $article = Article::paginate(5);
       // dd($article);
        return view('admin.article.index',['data'=>$article]);
    }

    public function huishou()
    {
        $data = Article::onlyTrashed() -> get();
        
        return view('admin.article.hsz',['data' => $data]);
    }

    public function huifu($id)
    {
        $res = Article::onlyTrashed() -> where('id',$id) -> restore();
        if ($res) {
            return redirect('/article') -> with('success','恢复成功!');
        }else{
            return back() -> with('error','恢复失败!');
        }
    }

    public function cdsc($id)
    {
        $res = Article::onlyTrashed() -> where('id',$id) -> forceDelete();
        if ($res) {
            return redirect('/Admin/article/delindex') -> with('success','彻底删除成功!');
        }else{
            return back() -> with('error','彻底删除失败!');
        }
    }

    public function detail($id)
    {
        $data = Article::find($id);
        return view('admin.article.detail',['data'=>$data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user_detail = session('data');
       // dd($user_detail -> qx);
        if($user_detail -> qx == 1){
            return view('admin.article.create');
        }else{
            return back() -> with('error','非超管无法添加文章!');
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
        $data = $request -> except('_token');
//        dd($data);
        if ($request) {
            $article = new Article;
            $article -> anthor = $data['author'];
            $article -> title = $data['title'];
            $article -> content = $data['article_content'];
            $res = $article -> save();
            if($res) {
                return redirect('/article') -> with('success','添加成功!');
            }else{
                return back() -> with('error','保存失败!');
            }
        }else{
            return back() -> with('error','添加失败!');
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
        //
    }


    public function details($id)
    {
      $articles = Article::find($id);
      // dd($articles);
      return view('home.article.article',['articles_data' => $articles]);
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
        $data = Article::find($id);
        return view('admin.article.edit',['v' => $data]);
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
        $new_article = $request -> except('_token');
//        dd($new_article);
        if ($new_article) {
            $old_article = Article::find($id);
            //dd($old_article);
            if($new_article['title']){
                $old_article -> title = $new_article['title'];
            }
            if($new_article['content']){
                $old_article -> content = $new_article['content'];
            }
            $old_article -> save();
            return redirect('/article') -> with('success','修改成功!');

        }else{
            return back() -> with('error','数据获取失败!');
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
        $del = Article::find($id);
        $res = $del -> delete();
        if($res){
            return redirect('/article') -> with('success','删除成功!');
        }else{
            return back() -> with('error','删除失败!');
        }

    }

}
