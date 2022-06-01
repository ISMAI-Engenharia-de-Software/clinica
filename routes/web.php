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

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'teste'], function(){
    Route::get('/','TesteController@index')->name('teste.index');
    Route::get('/criar_teste','TesteController@pag_criar')->name('teste.pag_criar');
    Route::post('/criar_teste','TesteController@criar')->name('teste.criar');
    Route::get('/{teste}/mostrar_reg','TesteController@mostrar_reg')->name('teste.mostrar_reg');
    Route::delete('/{teste}/eliminar','TesteController@eliminar')->name('teste.eliminar');
});

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'fat_servico'], function(){
    Route::get('/','FaturaServicoController@index')->name('fat_servico.index');
    Route::get('/','FaturaServicoController@pag_criar')->name('fat_servico.pag_criar');
    Route::post('/','FaturaServicoController@criar')->name('fat_servico.criar');
    Route::get('/{fatura_servico}','FaturaServicoController@mostrar')->name('fat_servico.mostrar');
});

