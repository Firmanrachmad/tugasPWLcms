<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Gate;


class ArticleController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    public function article($id){
    	$articles = \App\Article::find($id);
        $articles = json_decode(json_encode($articles));
        return view('article', ['article'=>$articles], ['id'=>$id]);
        $value = Cache::rememberForever('article', function(){
            return \app\articles::all();
        }); 
    }
    public function index()
    {
        $article = Article::all();
        return view('manage',['article' => $article]);
    }
    public function add()
    {
        return view('addarticle');
    }
    public function create(Request $request)
    {
        Article::create([
        'title' => $request->title,
        'content' => $request->content,
        'featured_image' => $request->image
        ]);
    return redirect('/manage');
    }
    public function edit($id)
    {
        $article = Article::find($id);
        return view('editarticle',['article'=>$article]);
    }
    public function update($id, Request $request)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->featured_image = $request->image;
        $article->save();
        return redirect('/manage');
    }
    public function delete($id)
    {
    $article = Article::find($id);
    $article->delete();
    return redirect('/manage');
    }
    
}