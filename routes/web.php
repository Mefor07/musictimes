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

/*
route to list all albums
*/
Route::get('/albums', function () {
    $response = Http::get('https://jsonplaceholder.typicode.com/albums');
   
    return view('albums', [
        'heading' => 'Latest Listings',
        'albums'=> $response->json()
    ]);
    
});


/*
* Route to display list of albums per  album id
 */
Route::get('/albums/{id}/photos/{title}', function ($id, $title) {
    
    $response = Http::get('https://jsonplaceholder.typicode.com/albums/'.$id.'/photos');

    return view('detail', [
        'heading' => $title,
        'albums'=> $response->json()
    ]);
    
});


/*
route to list all premium albums
*/

Route::get('/zeroseven/premium', function () {
    $response = Http::get('https://jsonplaceholder.typicode.com/photos');


    return view('premium_albums', [
        'heading' => 'Latest Listings',
        'albums'=> $response->json()
    ]);
    
});




Route::get('/zeroseven/premium/{id}', function ($id) {
    $response = Http::get('https://jsonplaceholder.typicode.com/photos/'.$id);

    return view('premium_detail', [
        'heading' => 'Latest Listings',
        'album'=> $response->json()
    ]);
    
});