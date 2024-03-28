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

//Route::get('demo', function () {
//    return view('zeiss-demo-home');
//});
//
//Route::get('words-cloud', function () {
//    return view('zeiss-demo-words-cloud');
//});

Route::get('/', function () {
    return view('home');
});

Route::get('login', function () {
    return view('login');
});

Route::get('/words1', function () {
    return view('word-cloud1');
});
Route::get('/words2', function () {
    return view('word-cloud2');
});
Route::get('/words3', function () {
    return view('word-cloud3');
});
