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
    Route::get('/criar_fatura_servico','FaturaServicoController@pag_criar')->name('fat_servico.pag_criar');
    Route::post('/criar_fatura_servico','FaturaServicoController@criar')->name('fat_servico.criar');
    Route::get('/{fatura_servico}/mostrar_reg','FaturaServicoController@mostrar')->name('fat_servico.mostrar');
});

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'funcionario'], function(){
    Route::get('/','FuncionarioController@index')->name('funcionario.index');
    Route::get('/criar_funcionario','FuncionarioController@pag_criar')->name('funcionario.pag_criar');
    Route::post('/criar_funcionario','FuncionarioController@criar')->name('funcionario.criar');
    Route::get('/{funcionario}/mostrar_reg','FuncionarioController@mostrar_reg')->name('funcionario.mostrar_reg');
});

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'relVServicos'], function(){
  Route::get('/','RelVenServicosController@index')->name('relVServicos.index');
  Route::get('/criar_relVServicos','RelVenServicosController@pag_criar')->name('relVServicos.pag_criar');
  Route::post('/criar_ relVServicos','RelVenServicosController@criar')->name('relVServicos.criar');
  Route::get('/{relVServicos}/mostrar_ relVServicos','RelVenServicosController@mostrar')->name('relVServicos.mostrar');
});