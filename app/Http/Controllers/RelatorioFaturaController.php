<?php

namespace App\Http\Controllers;

use App\Http\Requests\RelatorioFaturaRequest;
use App\Models\RelatorioFatura;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class RelatorioFaturaController extends Controller
{
    public function index() {
        $rels = RelatorioFatura::paginate(10);
        Paginator::useBootstrap();

        return view('rel_fat.index', compact('rels'));
    }

    public function pag_criar() {
        return view('rel_fat.pag_criar');
    }

    public function criar(RelatorioFaturaRequest $req) {
        $reqS = $req->validated();
        $dataInicial = $reqS['data_inicio']; $dataFinal = $reqS['data_final']; $relDT=0;

        if ($req['internamento'] == "1") {
            $qInt = DB::table('fat_internamento')->where('data', '>', $dataInicial)->where('data', '<', $dataFinal)->pluck('id');
            foreach ($qInt as $id) {
                $relDT += DB::table('fat_internamento')->where('id', $id)->value('valor');
            }
        }

        if ($req['ambulatorio'] == "1") {
            $qInt = DB::table('fat_ambulatorio')->where('data', '>', $dataInicial)->where('data', '<', $dataFinal)->pluck('id');
            foreach ($qInt as $id) {
                $relDT += DB::table('fat_ambulatorio')->where('id', $id)->value('valor');
            }
        }

        if ($req['servicos'] == "1") {
            $qInt = DB::table('fat_servico')->where('data', '>', $dataInicial)->where('data', '<', $dataFinal)->pluck('id');
            foreach ($qInt as $id) {
                $relDT += DB::table('fat_servico')->where('id', $id)->value('valor');
            }
        }

        $reqS['valor_total'] = (double)$relDT;

        $rel=RelatorioFatura::create($reqS);

        return redirect()->route('rel_fat.pag_rel', $rel->id)->with('success','Criado com Sucesso');
    }

    public function pag_rel(RelatorioFatura $rel) {
        return view('rel_fat.pag_rel', ['rel'=>$rel]);
    }

    public function apagar(RelatorioFatura $rel) {
        $rel->delete();
        return redirect()->route('rel_fat.index')->with('success', 'Apagado com Sucesso');
    } 
}
