<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Helper;

class AlbumController extends Controller
{
    //list all albums
    public function index(){
        //retrieve base url via the use of helper class
        /*'https://jsonplaceholder.typicode.com/albums'*/
        $baseUrl = Helper::getBaseUrl();
        $response = Http::get($baseUrl);

       
        return view('albums', [
            'heading' => 'Latest Listings',
            'albums'=> $response->json()
        ]);
    }

    public function show($id, $title){
        $baseUrl = Helper::getBaseUrl();
        $response = Http::get($baseUrl.'/'.$id.'/photos');

        return view('detail', [
            'heading' => $title,
            'albums'=> $response->json()
        ]);
    }


    public function premium(){
        $baseUrl = Helper::getBasePhotoUrl();
        $response = Http::get($baseUrl);

        return view('premium_albums', [
            'heading' => 'Latest Listings',
            'albums'=> $response->json()
        ]);
    }
}
