<?php

namespace App\Http\Controllers;

use App\Models\GestaoAmbulatorio;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class GestaoAmbulatorioController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        return view('gestao_ambulatorio.index', ['gestao_ambulatorioo' => GestaoAmbulatorio::paginate(10)]);
    }

    public function pag_criar()
    {
        return view('gestao_ambulatorio.criar');
    }

    public function mostrar_reg(GestaoAmbulatorio $gestao_ambulatorio)
    {
        return view('gestao_ambulatorio.mostrar_reg', ['gestao_ambulatorio' => $gestao_ambulatorio]);
    }

    public function criar()
    {
        GestaoAmbulatorio::create($this->validateGestao());
        return (redirect(route('gestao_ambulatorio.index'))->with('success', 'Ambulatorio paciente criado com sucesso'));
    }

    protected function validateGestao(?GestaoAmbulatorio $gestao_ambulatorio = null): array
    {
        $gestao_ambulatorio ??= new GestaoAmbulatorio();
        return request()->validate([
            'data' => 'required|date|before:now',
            'procedimento' => 'required',
            'estado' => 'required',
            'gastos' => 'required',
            'paciente_nif' => 'required'
        ]);
    }


    public function eliminar(GestaoAmbulatorio $conta_ambulatorio)
    {
        $conta_ambulatorio->delete();
        return redirect(route('conta_ambulatorio.index'))->with('success','Ambulatorio paciente eliminado com sucesso');
    }
}
