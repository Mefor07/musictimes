<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/zeroseven', function () {
    $response = Http::get('https://jsonplaceholder.typicode.com/albums');
    //return view('albums');//$response;

    return view('albums', [
        'heading' => 'Latest Listings',
        'albums'=> $response->json()
    ]);
    

    //return count($response->json());
});


Route::get('/zeroseven/premium', function () {
    $response = Http::get('https://jsonplaceholder.typicode.com/photos');
    //return view('albums');//$response;

    return view('premium_albums', [
        'heading' => 'Latest Listings',
        'albums'=> $response->json()
    ]);
    

    //return count($response->json());
});




Route::get('/zeroseven/detail/{id}', function ($id) {
    
    $response = Http::get('https://jsonplaceholder.typicode.com/albums/'.$id);
    

    return view('detail', [
        'heading' => 'Latest Listings',
        'album'=> $response->json()
    ]);

   
    
});


Route::get('/zeroseven/premium/{id}', function ($id) {
    $response = Http::get('https://jsonplaceholder.typicode.com/photos/'.$id);
    //return view('albums');//$response;

    return view('premium_detail', [
        'heading' => 'Latest Listings',
        'album'=> $response->json()
    ]);
    

    //return count($response->json());
});