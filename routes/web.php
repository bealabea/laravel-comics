<?php

use Illuminate\Support\Facades\Route;

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


Route::view('/', 'home')->name('home');

// la pagina comics contiene un array
Route::get('/comics', function () {
    $data = config("comics");  
    return view('comics', compact("data"));
})->name('comics');

Route::get('/comics/{id}', 'ComicDetailController@read')->name('comic.details');

Route::view('/characters', 'characters')->name('characters');
Route::view('/movies', 'movies')->name('movies');
Route::view('/tv', 'tv')->name('tv');
Route::view('/videos', 'videos')->name('videos');
Route::view('/games', 'games')->name('games');
Route::view('/fans', 'fans')->name('fans');
Route::view('/news', 'news')->name('news');
Route::view('/shop', 'shop')->name('shop');
