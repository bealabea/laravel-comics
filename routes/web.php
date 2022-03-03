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
$navbar = config('navbar-items');

Route::view('/', 'home', compact('navbar'))->name('home');
Route::view('/comics', 'comics', compact('navbar'))->name('comics');
Route::view('/characters', 'characters', compact('navbar'))->name('characters');
Route::view('/movies', 'movies', compact('navbar'))->name('movies');
Route::view('/tv', 'tv', compact('navbar'))->name('tv');
Route::view('/videos', 'videos', compact('navbar'))->name('videos');
Route::view('/games', 'games', compact('navbar'))->name('games');
Route::view('/fans', 'fans', compact('navbar'))->name('fans');
Route::view('/news', 'news', compact('navbar'))->name('news');
Route::view('/shop', 'shop', compact('navbar'))->name('shop');
