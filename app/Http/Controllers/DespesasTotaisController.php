<?php

namespace App\Http\Controllers;

use App\Models\DespesasTotais;
use Illuminate\Http\Request;

class DespesasTotaisController extends Controller
{
    public function index() {
        return view('rel_dt.index', ['rels_dt' => DespesasTotais::paginate(15)]);
    }

    public function pag_criar() {
        return view('rel_dt.criar');
    }

    public function criar() {
        DespesasTotais::create();
        
    }

    public function calcularDespesas() {

    }
}
