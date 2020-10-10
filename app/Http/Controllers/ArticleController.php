<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class ArticleController extends Controller
{
    public function article($id){
    	$articles = \App\Article::find($id);
        $articles = json_decode(json_encode($articles));
        return view('article', ['article'=>$articles], ['id'=>$id]);
        $value = Cache::rememberForever('article', function(){
            return \app\articles::all();
        }); 
    }
}