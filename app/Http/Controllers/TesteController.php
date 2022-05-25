<?php

namespace App\Http\Controllers;

use App\Models\Teste;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index() {
        return view('teste.index', ['testes' => Teste::paginate(10)]);
    }

    public function pag_criar() {
        return view('teste.criar');
    }

    public function criar() {
        Teste::create($this->validateTeste());
    }

    protected function validateTeste(?Teste $teste=null):array {
        $teste??=new Teste();
        return request()->validate([
            'Data'=>'required',
            'TipoTeste'=>'required',
            'Resultado'=>'required'
        ]);
    }
}
