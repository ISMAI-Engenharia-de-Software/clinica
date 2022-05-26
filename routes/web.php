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

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'rel_dt'], function(){
    Route::get('/','DespesasTotaisController@index')->name('rel_dt.index');
    Route::get('/criar_teste','DespesasTotaisController@create')->name('rel_dt.pag_criar');
    Route::post('/criar_teste','DespesasTotaisController@store')->name('rel_dt.criar');
});
