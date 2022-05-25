<?php

use App\Http\Controllers\TesteController;
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
    return view('welcome');
});

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'teste'], function(){
    Route::get('/','TesteController@index')->name('teste.index');
    Route::get('/criar_teste','TesteController@create')->name('teste.pag_criar');
    Route::post('/criar_teste','TesteController@store')->name('teste.criar');

});
