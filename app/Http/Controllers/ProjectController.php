<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

global $baseUrl, $api;
$baseUrl = "https://api.nomics.com/v1/currencies/ticker?key=";
$api = "df87f0731def2f83a8539a2735b4c31ee2b6f0b5";


class ProjectController extends Controller
{
   
    public function getData(Request $request){
        //$baseUrl = "https://api.nomics.com/v1/currencies/ticker?key=";
        //$api = "df87f0731def2f83a8539a2735b4c31ee2b6f0b5";
        global $baseUrl, $api;
        $responce = Http::get("{$baseUrl}{$api}&interval=1d,30d&convert=USD&per-page=100&page=1");
        return view('index', ['responce' => $responce->json()]);
    }

    public function about(Request $request){
        return view('about');
    }
}
