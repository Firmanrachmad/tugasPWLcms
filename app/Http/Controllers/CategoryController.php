<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CategoryController extends Controller
{
    public function category(){
    	$articlesAll = \App\Article::paginate(2);
        return view('category')->with(compact('articlesAll')); 
    }
    public function __construct(){
        $this->middleware('auth');
    }
}
