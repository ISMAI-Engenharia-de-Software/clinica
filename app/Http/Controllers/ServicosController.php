<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicosRequest;
use App\Models\Servicos;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ServicosController extends Controller
{
    public function index()
    {
        $servicos = Servicos::orderBy('data','desc')->paginate(10);
        Paginator::useBootstrap();
        return view('servicos.index', compact('servicos'));
    }

    public function pag_criar()
    {
        return view('servicos.criar');
    }

    public function criar(ServicosRequest $req)
    {
        $servico=Servicos::create($req->validated());
        return redirect()->route('servicos.mostrar', $servico->id)->with('success',"Serviço #$servico->id Criado com Sucesso" );
    }

    public function mostrar(Servicos $servico)
    {
        return view('servicos.mostrar', ['servico' => $servico]);
    }

    public function editar(Servicos $servico)
    {
        return view('servicos.editar',['servico'=>$servico]);
    }

    public function atualizar(Servicos $servico, ServicosRequest $req)
    {
        $servico->update($req->validated());
        return redirect()->route('servicos.index')->with('success',"Serviço #$servico->id Atualizado com Sucesso");
    }

    public function apagar(Servicos $servico)
    {
        $servico->delete();
        return redirect()->route('servicos.index')->with('success',"Serviço #$servico->id Eliminado com Sucesso");
    }
}
