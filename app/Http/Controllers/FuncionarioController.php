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
        return view('funcionario.index', ['funcionario' => Funcionario::paginate(40)]);
    }
    public function pag_criar()
    {
        return view('funcionario.criar');
    }
    public function mostrar_reg(Funcionario $funcionario)
    {
        return view('funcionario.mostrar_reg', ['funcionario' => $funcionario]);
    }
    public function criar()
    {
        Funcionario::create($this->validateFuncionario());
        return (redirect(route('funcionario.index'))->with('success', 'Funcionario criado com sucesso'));
    }
}
