<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AlbumController extends Controller
{
    //list all albums

    public function index(){

        $response = Http::get('https://jsonplaceholder.typicode.com/albums');
       
        return view('albums', [
            'heading' => 'Latest Listings',
            'albums'=> $response->json()
        ]);
    }

    public function show($id, $title){
        $response = Http::get('https://jsonplaceholder.typicode.com/albums/'.$id.'/photos');

        return view('detail', [
            'heading' => $title,
            'albums'=> $response->json()
        ]);
    }


    public function premium(){
        
        $response = Http::get('https://jsonplaceholder.typicode.com/photos');

        return view('premium_albums', [
            'heading' => 'Latest Listings',
            'albums'=> $response->json()
        ]);
    }
}
