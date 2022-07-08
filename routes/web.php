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

Route::get('/', function () {
    $comics = config('comics');
    return view('home-page', compact('comics'));
})->name('home');

Route::get('comics/{id}', function ($id) {
    $comics = config('comics');

    if($id >= count($comics)){
        abort('404');
    }
     
    $singleComic = $comics[$id];

    return view('comics-page', compact('singleComic'));

})->where('id', '[0-9]+')->name('fumetto');