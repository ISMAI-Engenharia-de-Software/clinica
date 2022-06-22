<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class FuncionarioController extends Controller
{

    public function index()
    {
        Paginator::useBootstrap();
        return view('funcionario.index', ['funcionariot' => Funcionario::paginate(10)]);
    }
    public function pag_criar()
    {
        return view('funcionario.criar');
    }
    public function mostrar(Funcionario $funcionario)
    {
        return view('funcionario.mostrar', ['funcionario' => $funcionario]);
    }
    public function criar()
    {
        Funcionario::create($this->validateFuncionario());
        return (redirect(route('funcionario.index'))->with('success', 'Funcionario criado com sucesso'));
    }

    protected function validateFuncionario(?Funcionario $funcionario = null): array
    {
        $funcionario ??= new Funcionario();
        return request()->validate([
            'nif' => 'required',
            'nome' => 'required',
            'idade' => 'required',
            'email' => 'required',
            'especializacao' => 'required',
            'departamento_id' => 'required'
        ]);
    }


    public function eliminar(Funcionario $funcionario)
    {
        $funcionario->delete();
        return redirect(route('funcionario.index'))->with('success','Funcionario eliminado com sucesso');
    }
}
