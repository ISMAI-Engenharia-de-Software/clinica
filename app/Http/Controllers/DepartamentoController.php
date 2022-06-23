<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Http\Requests\RequestDepartamento;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class DepartamentoController extends Controller
{

    public function index()
    {
        $departamentot = Departamento::paginate(60);
        Paginator::useBootstrap();

        return view('Departamento.index', compact('departamentot'));
    }
    public function pag_criar()
    {
        return view('departamento.criar');
    }
    public function mostrar_reg(Departamento $departamento)
    {
        return view('departamento.mostrar_reg', ['departamento' => $departamento]);
    }
    public function criar(DepartamentoRequest $fdepartamento)
    {
        $departamentot = $departamento->validated();
        $departamento= Funcionario::create($departamentot);
        return (redirect(route('departamento.index'))->with('success', 'Departamento criado com sucesso'));
    }
}
