<?php

namespace App\Http\Controllers;

use App\Models\RelVenServicos;
use App\Http\Requests\RelVenServicosRequest;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class RelVenServicosController extends Controller
{

    public function index()
    {
        $relVservico = RelVenServicos::paginate(10);
        Paginator::useBootstrap();

        return view('relVservicos.index', compact('relVservico'));
    }
    public function pag_criar()
    {
        return view('relVservicos.criar');
    }
    public function mostrar(RelVenServicos $relVservicos)
    {
        return view('relVservicos.mostrar', ['relVservicos' => $relVservicos]);
    }
    public function criar(RelVenServicosRequest $relVservicos)
    {
        $relVservico = $relVservicos->validated();
        $relVservicos= RelVenServicos::create($relVservico);
        return (redirect(route('relVservicos.index'))->with('success', 'Relatorio vendas de serviço criado com sucesso'));
    }

    public function eliminar(RelVenServicos $relVservicos)
    {
        $relVservicos->delete();
        return redirect(route('relVservicos.index'))->with('success','Relatorio vendas de serviço eliminado com sucesso');
    }
}
