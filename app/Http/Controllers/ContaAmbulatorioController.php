<?php

namespace App\Http\Controllers;

use App\Models\fat_ambulatorio;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class ContaAmbulatorioController extends Controller
{
    //
    public function index() {
        Paginator::useBootstrap();
        return view('fat_ambulatorio.index', ['fat_ambulatorio' => fat_ambulatorio::paginate(10)]);
    }

    public function pag_criar()
    {
        return view('fat_ambulatorio.criar');
    }

    public function mostrar_fat_ambulatorio(fat_ambulatorio $fat_ambulatorio)
    {
        return view('fat_ambulatorio.mostrar_fat_ambulatorio', ['fat_ambulatorio' => $fat_ambulatorio]);
    }

    public function criar() {
        fat_ambulatorio::create($this->validatefat_ambulatorio());
        return (redirect(route('fat_ambulatorio.mostrar_fat_ambulatorio'))->with('success', 'Fatura criada com sucesso'));
    }

    protected function validateTeste(?fat_ambulatorio $fat_ambulatorio = null): array
    {
        $fat_ambulatorio ??= new fat_ambulatorio();
        return request()->validate([
            'data' => 'required|date|before:now',
            'valor' => 'required'
        ]);
    }
}
