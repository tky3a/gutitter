<?php

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
    return view('home/login');
});

// contents routes https://qiita.com/sympe/items/9297f41d5f7a9d91aa11
Route::resource('contents', 'ContentsController',  ['only' => ['index','create','store']]);
