<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
class NewsController extends Controller
{
public function getData(){
    $client = new Client();
    $request = $client->get('https://newsapi.org/v2/top-headlines?country=us&apiKey=9b5818f9c56341639109a5216c91d593');
    $response = $request->getBody();
    $result = json_decode($response);
    return view('home',['artikel'=>$result->articles]);
    }
public function searchData(Request $request){
    $client = new Client();
    $query = $request->keyword;
    $req = $client->get('https://newsapi.org/v2/top-headlines?country=us&apiKey=9b5818f9c56341639109a5216c91d593&q='.$query);
    $response = $req->getBody();
    $result = json_decode($response);
    return view('home',['artikel'=>$result->articles]);
    }
}    