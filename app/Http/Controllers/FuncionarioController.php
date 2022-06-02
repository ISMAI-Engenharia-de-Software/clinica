<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
