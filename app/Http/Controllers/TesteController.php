<?php

namespace App\Http\Controllers;

use App\Models\Teste;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class TesteController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        return view('teste.index', ['testes' => Teste::paginate(10)]);
    }

    public function pag_criar()
    {
        return view('teste.criar');
    }

    public function mostrar_reg(Teste $teste)
    {
        return view('teste.mostrar_reg', ['teste' => $teste]);
    }

    public function criar()
    {
        Teste::create($this->validateTeste());
        return (redirect(route('teste.index'))->with('success', 'Teste Criado'));
    }

    protected function validateTeste(?Teste $teste = null): array
    {
        $teste ??= new Teste();
        return request()->validate([
            'data' => 'required|date|before:now',
            'tipo_teste' => 'required',
            'resultado' => 'required',
            'observacoes' => 'required',
            'paciente_nif' => 'required'
        ]);
    }

    public function eliminar(Teste $teste)
    {
        $teste->delete();
        return redirect(route('teste.index'))->with('success','Teste Eliminado');
    }
}
