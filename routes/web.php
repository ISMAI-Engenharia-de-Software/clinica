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
    return view('welcome');
});

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'relatorioFaturas'], function(){
    Route::get('/','RelatorioFaturaController@index')->name('rel_fat.index');
    Route::get('/criar_relatorio','RelatorioFaturaController@pag_criar')->name('rel_fat.pag_criar');
    Route::post('/criar_relatorio','RelatorioFaturaController@criar')->name('rel_fat.criar');
    Route::get('/{rel}/relatorio','RelatorioFaturaController@pag_rel')->name('rel_fat.pag_rel');
    Route::delete('/{rel}/apagar_relatorio', 'RelatorioFaturaController@apagar')->name('rel_fat.apagar');
});

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'relatorioDespesas'], function(){
    Route::get('/','DespesasTotaisController@index')->name('rel_dt.index');
    Route::get('/criar_relatorio','DespesasTotaisController@pag_criar')->name('rel_dt.pag_criar');
    Route::post('/criar_relatorio','DespesasTotaisController@criar')->name('rel_dt.criar');
    Route::get('/{rel}/relatorio','DespesasTotaisController@pag_rel')->name('rel_dt.pag_rel');
    Route::delete('/{rel}/apagar_relatorio', 'DespesasTotaisController@apagar')->name('rel_dt.apagar');
});

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'teste'], function(){
    Route::get('/','TesteController@index')->name('teste.index');
    Route::get('/criar_teste','TesteController@pag_criar')->name('teste.pag_criar');
    Route::post('/criar_teste','TesteController@criar')->name('teste.criar');
    Route::get('/{teste}/mostrar_reg','TesteController@mostrar_reg')->name('teste.mostrar_reg');
    Route::delete('/{teste}/eliminar','TesteController@eliminar')->name('teste.eliminar');
});

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'marcacao'], function(){
    Route::get('/','MarcacaoController@index')->name('marcacao.index');
    Route::get('/criar_marcacao','MarcacaoController@pag_criar')->name('marcacao.pag_criar');
    Route::post('/criar_marcacao','MarcacaoController@criar')->name('marcacao.criar');
    Route::get('/{marcacao}/mostrar_reg','MarcacaoController@mostrar_reg')->name('marcacao.mostrar_reg');
    Route::delete('/{marcacao}/eliminar','MarcacaoController@eliminar')->name('marcacao.eliminar');
    Route::get('/{marcacao}/editar','MarcacaoController@editar')->name('marcacao.editar');
    Route::patch('/{marcacao}/atualizar','MarcacaoController@atualizar')->name('marcacao.atualizar');
});

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'fat_servico'], function(){
    Route::get('/','FaturaServicoController@index')->name('fat_servico.index');
    Route::get('/criar_fat_servico','FaturaServicoController@pag_criar')->name('fat_servico.pag_criar');
    Route::post('/criar_fat_servico','FaturaServicoController@criar')->name('fat_servico.criar');
    Route::get('/{fat_servico}/mostrar_reg','FaturaServicoController@mostrar')->name('fat_servico.mostrar');
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

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'relVAmbulatorio'], function(){
  Route::get('/','RelVenAmbulatorioController@index')->name('relVAmbulatorio.index');
  Route::get('/criar_relVAmbulatorio','RelVenAmbulatorioController@pag_criar')->name('relVAmbulatorio.pag_criar');
  Route::post('/criar_ relVAmbulatorio','RelVenAmbulatorioController@criar')->name('relVAmbulatorio.criar');
  Route::get('/{relVAmbulatorio}/mostrar_ relVAmbulatorio','RelVenAmbulatorioController@mostrar')->name('relVAmbulatorio.mostrar');
});

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'departamento'], function(){
    Route::get('/','DepartamentoController@index')->name('departamento.index');
    Route::get('/criar_departamento','DepartamentoController@pag_criar')->name('departamento.pag_criar');
    Route::post('/criar_departamento','DepartamentoController@criar')->name('departamento.criar');
    Route::get('/{departamento}/mostrar_reg','DepartamentoController@mostrar_reg')->name('departamento.mostrar_reg');
    Route::delete('/{departamento}/eliminar','DepartamentoController@eliminar')->name('departamento.eliminar');
    Route::patch('/{departamento}/atualizar','DepartamentoController@atualizar')->name('departamento.atualizar');
});
