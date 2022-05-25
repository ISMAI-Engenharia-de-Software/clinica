<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index() {
        return view('pacientes.index', ['pacientes' => Paciente::paginate(50)]);
    }

    public function create() {
        return view('pacientes.create');
    }
}
