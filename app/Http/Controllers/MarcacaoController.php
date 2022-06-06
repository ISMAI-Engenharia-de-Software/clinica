<?php

namespace App\Http\Controllers;

use App\Models\Marcacao;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class MarcacaoController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        return view('marcacao.index', ['marcacoes' => Marcacao::paginate(10)]);
    }

    public function pag_criar()
    {
        return view('marcacao.criar');
    }

    public function mostrar_reg(Marcacao $marcacao)
    {
        return view('marcacao.mostrar_reg', ['marcacao' => $marcacao]);
    }

    public function criar()
    {
        Marcacao::create($this->validateMarcacao());
        return (redirect(route('marcacao.index'))->with('success', 'Marcação Criada'));
    }

    protected function validateMarcacao(?Marcacao $marcacao = null): array
    {
        $marcacao ??= new Marcacao();
        return request()->validate([
            'data' => 'required|date|after:now',
            'motivo' => 'required',
            'paciente_nif' => 'required',
            'funcionario_nif' => 'required'
        ]);
    }

    public function eliminar(Marcacao $marcacao)
    {
        $marcacao->delete();
        return redirect(route('marcacao.index'))->with('success','Marcação Eliminada');
    }
}
