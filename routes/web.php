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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/ospiti', 'TestController@home') 
    ->name('home');

Route::get('ospiti/{id}','TestController@show')
    ->name('show-ospite');

Route::get('ospiti-form','TestController@form')
    ->name('form');

Route::post('ospiti', 'TestController@store')
    ->name('store');