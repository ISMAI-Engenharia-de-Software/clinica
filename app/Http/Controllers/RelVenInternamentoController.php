<?php

namespace App\Http\Controllers;

use Illuminate\Http\RelVInternamentoRequest;
use App\Models\RelVInternamento;
use App\Http\Controllers\Paginator;
use Illuminate\Support\Facades\DB;

class RelVenInternamentoController extends Controller
{

  public function index()
  {
      Paginator::useBootstrap();
      return view('relVInternamento.index', ['relVInternamento' => RelVInternamento::paginate(10)]);
  }
  public function criar()
  {
      return view('relVInternamento.criar');
  }
  public function mostrar(RelVInternamento $relVInternamento)
  {
      return view('relVInternamento.mostrar', ['relVInternamento' => $relVInternamento]);
  }

}
