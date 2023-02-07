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
        $baseUrl = Helper::getBaseUrl();
        $response = Http::get($baseUrl);

        //validate request url
        if($response->getStatusCode() !== 200){
            abort(404);
        }else{

            return view('albums', [
                'heading' => 'Latest Listings',
                'albums'=> $response->json()
            ]);
        }

       
        
    }

    //show album details
    public function show($id, $title){

        //retrieve base url via the use of helper class
        $baseUrl = Helper::getBaseUrl();
        $response = Http::get($baseUrl.'/'.$id.'/photos');

        //validate request url
        if($response->getStatusCode() !== 200){
            abort(404);
        }else{
            
            return view('detail', [
                'heading' => $title,
                'albums'=> $response->json()
            ]);
        }

        
    }


    //show premium albums
    public function premium(){

        //retrieve base url via the use of helper class
        $baseUrl = Helper::getBasePhotoUrl();
        $response = Http::get($baseUrl);

        //validate request url
        if($response->getStatusCode() !== 200){
            abort(404);
        }else{

            return view('premium_albums', [
                'heading' => 'Latest Listings',
                'albums'=> $response->json()
            ]);
        }

        
    }
}
