<?php

namespace App\Http\Controllers;

use App\Models\FaturaServico;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class FaturaServicoController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        return view('fat_servico.index', ['fatservicoo' => FaturaServico::paginate(10)]);
    }

    public function pag_criar()
    {
        return view('fat_servico.criar');
    }

    public function mostrar_reg(FaturaServico $fat_servico)
    {
        return view('fat_servico.mostrar_reg', ['fat_servico' => $fat_servico]);
    }

    public function criar()
    {
        FaturaServico::create($this->validateServico());
        return (redirect(route('fat_servico.index'))->with('success', 'Fatura criada'));
    }

    protected function validateServico(?FaturaServico $fat_servico = null): array
    {
        $fat_servico ??= new FaturaServico();
        return request()->validate([
            'data' => 'required|date|before:now',
            'valor' => 'required',
            'paciente_nif' => 'required'
        ]);
    }

}
