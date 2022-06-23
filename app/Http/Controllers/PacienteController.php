<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class PacienteController extends Controller
{
    public function index() {
        Paginator::useBootstrap();
        return view('paciente.index', ['pacientes' => Paciente::paginate(25)]);
    }
    
    public function pag_criar()
    {
        return view('paciente.criar');
    }

    public function mostrar_reg(Paciente $paciente)
    {
        return view('paciente.mostrar_reg', ['paciente' => $paciente]);
    }

    public function criar()
    {
        Paciente::create($this->validatePaciente());
        return (redirect(route('paciente.index'))->with('success', 'Paciente adicionado'));
    }

    protected function validatePaciente(?Paciente $paciente = null): array
    {
        $paciente ??= new Paciente();
        return request()->validate([
            'nif' => 'required|unique:paciente,nif|max:9|min:9',
            'nome' => 'required',
            'idade' => 'required|numeric|gt:0|lt:160'
        ]);
    }
    public function eliminar(Paciente $paciente)
    {
        $paciente->delete();
        return redirect(route('paciente.index'))->with('success','Paciente Eliminado');
    }
}
