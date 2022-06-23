<?php

namespace App\Http\Controllers;

use App\Models\GestaoContaAmbulatorio;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class GestaoContaAmbulatorioController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        return view('conta_ambulatorio.index', ['contaambulatorioo' => GestaoContaAmbulatorio::paginate(10)]);
    }

    public function pag_criar()
    {
        return view('conta_ambulatorio.criar');
    }

    public function mostrar_reg(GestaoContaAmbulatorio $conta_ambulatorio)
    {
        return view('conta_ambulatorio.mostrar_reg', ['conta_ambulatorio' => $conta_ambulatorio]);
    }

    public function criar()
    {
        GestaoContaAmbulatorio::create($this->validateGestao());
        return (redirect(route('conta_ambulatorio.index'))->with('success', 'Ambulatorio criado com sucesso'));
    }

    protected function validateGestao(?GestaoContaAmbulatorio $conta_ambulatorio = null): array
    {
        $conta_ambulatorio ??= new GestaoContaAmbulatorio();
        return request()->validate([
            'data' => 'required|date|before:now',
            'valor' => 'required'
        ]);
    }


    public function eliminar(GestaoContaAmbulatorio $conta_ambulatorio)
    {
        $conta_ambulatorio->delete();
        return redirect(route('conta_ambulatorio.index'))->with('success','Ambulatorio eliminado com sucesso');
    }
}
