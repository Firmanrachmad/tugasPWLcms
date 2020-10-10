<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function selamat(){
    	return "Selamat Datang";
    }
    public function about(){
    	return "1931710152 Firman Rachmad Caesar";
    }
    public function articles($id){
    	return "Halaman artikel dengan id " .$id;
    }
    
}