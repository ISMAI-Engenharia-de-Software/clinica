<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelVenAmbulatorio extends Controller
{
  public function index()
  {
      Paginator::useBootstrap();
      return view('relVAmbulatorio.index', ['relVAmbulatorio' => RelVenAmbulatorio::paginate(40)]);
  }
  public function pag_criar()
  {
      return view('relVAmbulatorio.criar');
  }
  public function mostrar(RelVenAmbulatorio $relVAmbulatorio)
  {
      return view('relVAmbulatorio.mostrar', ['relVAmbulatorio' => $relVAmbulatorio]);
  }
}
