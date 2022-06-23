<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RelVenAmbulatorio;
use App\Http\Controllers\Paginator;
use Illuminate\Support\Facades\DB;

class RelVenAmbulatorioController extends Controller
{

  public function index()
  {
      Paginator::useBootstrap();
      return view('relVAmbulatorio.index', ['relVAmbulatorio' => RelVenAmbulatorio::paginate(10)]);
  }
  public function criar()
  {
      return view('relVAmbulatorio.criar');
  }
  public function mostrar(RelVenAmbulatorio $relVAmbulatorio)
  {
      return view('relVAmbulatorio.mostrar', ['relVAmbulatorio' => $relVAmbulatorio]);
  }

}
