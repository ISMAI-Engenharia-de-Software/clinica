<?php

namespace App\Http\Controllers;

use App\Models\fat_servico;
use Illuminate\Http\Request;

class ImprimirController extends Controller
{
    //
    public function index() {
        return view('imprimir.index', ['imprimir' => fat_servico::paginate(20)]);
    }

    public function imprimir(fat_servico $fat_servico) {
        $fat_servico->create();
        return view('fat_servico.imprimir', ['fat_servico' => $fat_servico]);
    }


    

}
