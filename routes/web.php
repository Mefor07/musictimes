<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\Http;
use App\Http\Controllers\AlbumController;

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
Route::get('/albums', [AlbumController::class, 'index']);


/*
* Route to display list of albums per  album id(detail)
 */
Route::get('/albums/{id}/photos/{title}', [AlbumController::class, 'show']);


/*
route to list all premium albums
*/

Route::get('/albums/premium', [AlbumController::class, 'premium']);



/*
Route::get('/zeroseven/premium/{id}', function ($id) {
    $response = Http::get('https://jsonplaceholder.typicode.com/photos/'.$id);

    return view('premium_detail', [
        'heading' => 'Latest Listings',
        'album'=> $response->json()
    ]);
    
});
*/