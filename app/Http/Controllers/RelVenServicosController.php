<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class RelVenServicosController extends Controller
{
  public function index()
  {
      Paginator::useBootstrap();
      return view('relVServicos.index', ['relVServicos' => RelVenServicos::paginate(40)]);
  }
  public function pag_criar()
  {
      return view('relVServicos.criar');
  }
  public function mostrar(RelVenServicos $relVServicos)
  {
      return view('relVServicos.mostrar', ['relVServicos' => $relVServicos]);
  }
}
