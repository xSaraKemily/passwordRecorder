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
//
//Route::get('/menu', function () {
//    return view('menu');
//});

Route::get('/cadastros', function () {
    return view('cadastros');
});

Auth::routes();
 // 28058012
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('senha', 'SenhaController');
