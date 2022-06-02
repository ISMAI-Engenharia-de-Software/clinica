<?php

namespace App\Http\Controllers;

use App\Models\fat_servico;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class ImprimirController extends Controller
{
    //
    public function index() {
        Paginator::useBootstrap();
        return view('fat_servico.index', ['fat_servico' => fat_servico::paginate(20)]);
    }

    public function pag_criar()
    {
        return view('fat_servico.criar');
    }
    
    public function mostrar(fat_servico $fat_servico)
    {
        return view('fat_servico.mostrar', ['fat_servico' => $fat_servico]);
    }

    public function criar() {
        fat_servico::create($this->validatefat_servico());
        return (redirect(route('fat_servico.mostrar'))->with('success', 'Fatura criada com sucesso'));  
    }
}

