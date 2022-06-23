<?php

namespace App\Http\Controllers;

use App\Models\FaturaInternamento;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class FaturaInternamentoController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        return view('fat_internamento.index', ['fatinternamentoo' => FaturaInternamento::paginate(10)]);
    }

    public function pag_criar()
    {
        return view('fat_internamento.criar');
    }

    public function mostrar_reg(FaturaInternamento $fat_internamento)
    {
        return view('fat_internamento.mostrar_reg', ['fat_internamento' => $fat_internamento]);
    }

    public function criar()
    {
        FaturaInternamento::create($this->validateInternamento());
        return (redirect(route('fat_internamento.index'))->with('success', 'Fatura criada'));
    }

    protected function validateInternamento(?FaturaInternamento $fat_internamento = null): array
    {
        $fat_internamento ??= new FaturaInternamento();
        return request()->validate([
            'data' => 'required|date|before:now',
            'valor' => 'required',
            'paciente_nif' => 'required'
        ]);
    }
}
