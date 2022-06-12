<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Http\Requests\FuncionarioRequest;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class FuncionarioController extends Controller
{

    public function index()
    {
        $funcionariot = Funcionario::paginate(10);
        Paginator::useBootstrap();

        return view('funcionario.index', compact('funcionariot'));
    }
    public function pag_criar()
    {
        return view('funcionario.criar');
    }
    public function mostrar_reg(Funcionario $funcionario)
    {
        return view('funcionario.mostrar_reg', ['funcionario' => $funcionario]);
    }
    public function criar(FuncionarioRequest $funcionario)
    {
        $funcionariot = $funcionario->validated();
        $funcionario= Funcionario::create($funcionariot);
        return (redirect(route('funcionario.index'))->with('success', 'Funcionario criado com sucesso'));
    }

    public function eliminar(Funcionario $funcionario)
    {
        $funcionario->delete();
        return redirect(route('funcionario.index'))->with('success','Funcionario eliminado com sucesso');
    }
}
