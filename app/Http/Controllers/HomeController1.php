<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomeController1 extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articlesAll = Article::all(); 
        $articles = json_decode(json_encode($articlesAll));
        return view('home1')->with(compact('articlesAll'));
        $value = Cache::remember('articles', function(){ 
            return \App\Article::all();
        });
        return view ('index'); 
    }
}
