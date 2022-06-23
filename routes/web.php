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

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'menuRelatorios'], function(){
  Route::get('/', 'MenuRelatorios@menu')->name('menuRelatorios.index');
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

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'servicos'], function(){
    Route::get('/','ServicosController@index')->name('servicos.index');
    Route::get('/criar_servico','ServicosController@pag_criar')->name('servicos.pag_criar');
    Route::post('/criar_servico','ServicosController@criar')->name('servicos.criar');
    Route::get('/{servico}/servico','ServicosController@mostrar')->name('servicos.mostrar');
    Route::delete('/{servico}/apagar_servico', 'ServicosController@apagar')->name('servicos.apagar');
    Route::get('/{servico}/editarServico','ServicosController@editar')->name('servicos.editar');
    Route::patch('/{servico}/editarServico','ServicosController@atualizar')->name('servicos.atualizar');
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

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'paciente'], function(){
    Route::get('/','PacienteController@index')->name('paciente.index');
    Route::get('/criar_paciente','PacienteController@pag_criar')->name('paciente.pag_criar');
    Route::post('/criar_paciente','PacienteController@criar')->name('paciente.criar');
    Route::get('/{paciente}/mostrar_reg','PacienteController@mostrar_reg')->name('paciente.mostrar_reg');
    Route::delete('/{paciente}/eliminar','PacienteController@eliminar')->name('paciente.eliminar');
    Route::get('/{paciente}/editar','PacienteController@editar')->name('paciente.editar');
    Route::patch('/{paciente}/atualizar','PacienteController@atualizar')->name('paciente.atualizar');
});

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'fat_servico'], function(){
    Route::get('/','FaturaServicoController@index')->name('fat_servico.index');
    Route::get('/criar_fat_servico','FaturaServicoController@pag_criar')->name('fat_servico.pag_criar');
    Route::post('/criar_fat_servico','FaturaServicoController@criar')->name('fat_servico.criar');
    Route::get('/{fat_servico}/mostrar_reg','FaturaServicoController@mostrar_reg')->name('fat_servico.mostrar_reg');
});

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'funcionario'], function(){
    Route::get('/','FuncionarioController@index')->name('funcionario.index');
    Route::get('/criar_funcionario','FuncionarioController@pag_criar')->name('funcionario.pag_criar');
    Route::post('/criar_funcionario','FuncionarioController@criar')->name('funcionario.criar');
    Route::get('/funcionario/mostrar','FuncionarioController@mostrar')->name('funcionario.mostrar');
    Route::delete('/{funcionario}/eliminar','FuncionarioController@eliminar')->name('funcionario.eliminar');
    Route::get('/{funcionario}/editar','FuncionarioController@editar')->name('funcionario.editar');
    Route::patch('/{funcionario}/atualizar','FuncionarioController@atualizar')->name('funcionario.atualizar');
  });


Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'relVservicos'], function(){
  Route::get('/','RelVenServicosController@index')->name('relVservicos.index');
  Route::get('/criar_relVservicos','RelVenServicosController@pag_criar')->name('relVservicos.pag_criar');
  Route::post('/criar_relVservicos','RelVenServicosController@criar')->name('relVservicos.criar');
  Route::get('/{relVservicos}/mostrar_ relVservicos','RelVenServicosController@mostrar')->name('relVservicos.mostrar');
});

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'relVAmbulatorio'], function(){
  Route::get('/','RelVenAmbulatorioController@index')->name('relVAmbulatorio.index');
  Route::get('/criar_relVAmbulatorio','RelVenAmbulatorioController@criar')->name('relVAmbulatorio.criar');
  Route::post('/criar_ relVAmbulatorio','RelVenAmbulatorioController@criar')->name('relVAmbulatorio.criar');
  Route::get('/{relVAmbulatorio}/mostrar_ relVAmbulatorio','RelVenAmbulatorioController@mostrar')->name('relVAmbulatorio.mostrar');
});

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'fat_ambulatorio'], function(){
    Route::get('/','ContaAmbulatorioController@index')->name('fat_ambulatorio.index');
    Route::get('/criar_fat_ambulatorio','ContaAmbulatorioController@pag_criar')->name('fat_ambulatorio.pag_criar');
    Route::post('/criar_fat_ambulatorio','ContaAmbulatorioController@criar')->name('fat_ambulatorio.criar');
    Route::get('/{fat_ambulatorio}/mostrar_fat_ambulatorio','ContaAmbulatorioController@mostrar_fat_ambulatorio')->name('fat_ambulatorio.mostrar_fat_ambulatorio');
  });

Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'conta_ambulatorio'], function(){
    Route::get('/','GestaoContaAmbulatorioController@index')->name('conta_ambulatorio.index');
    Route::get('/criar_conta_ambulatorio','GestaoContaAmbulatorioController@pag_criar')->name('conta_ambulatorio.pag_criar');
    Route::post('/criar_conta_ambulatorio','GestaoContaAmbulatorioController@criar')->name('conta_ambulatorio.criar');
    Route::get('/{conta_ambulatorio}/mostrar_reg','GestaoContaAmbulatorioController@mostrar_reg')->name('conta_ambulatorio.mostrar_reg');
  });

  Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'gestao_ambulatorio'], function(){
    Route::get('/','GestaoAmbulatorioController@index')->name('gestao_ambulatorio.index');
    Route::get('/criar_gestao_ambulatorio','GestaoAmbulatorioController@pag_criar')->name('gestao_ambulatorio.pag_criar');
    Route::post('/criar_gestao_ambulatorio','GestaoAmbulatorioController@criar')->name('gestao_ambulatorio.criar');
    Route::get('/{gestao_ambulatorio}/mostrar_reg','GestaoAmbulatorioController@mostrar_reg')->name('gestao_ambulatorio.mostrar_reg');
    Route::get('/{gestao_ambulatorio}/editar','GestaoAmbulatorioController@editar')->name('gestao_ambulatorio.editar');
    Route::patch('/{gestao_ambulatorio}/atualizar','GestaoAmbulatorioController@atualizar')->name('gestao_ambulatorio.atualizar');
  });

  Route::group(['namespace'=>'App\Http\Controllers', 'prefix'=>'fat_internamento'], function(){
    Route::get('/','FaturaInternamentoController@index')->name('fat_internamento.index');
    Route::get('/criar_fat_internamento','FaturaInternamentoController@pag_criar')->name('fat_internamento.pag_criar');
    Route::post('/criar_fat_internamento','FaturaInternamentoController@criar')->name('fat_internamento.criar');
    Route::get('/{fat_internamento}/mostrar_reg','FaturaInternamentoController@mostrar_reg')->name('fat_internamento.mostrar_reg');
  });
