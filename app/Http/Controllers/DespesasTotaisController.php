<?php

namespace App\Http\Controllers;

use App\Http\Requests\DespesasTotaisRequest;
use App\Models\DespesasTotais;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class DespesasTotaisController extends Controller
{
    public function index() {
        $rels = DespesasTotais::paginate(10);
        Paginator::useBootstrap();

        return view('rel_dt.index', compact('rels'));
    }

    public function pag_criar() {
        return view('rel_dt.pag_criar');
    }

    public function criar(DespesasTotaisRequest $req) {
        $reqS = $req->validated();
        $dataInicial = $reqS['data_inicio']; $dataFinal = $reqS['data_final']; $relDT=0;

        if ($req['internamento'] == "1") {
            $qInt = DB::table('internamento')->where('data', '>', $dataInicial)->where('data', '<', $dataFinal)->pluck('id');
            foreach ($qInt as $id) {
                $relDT += DB::table('fat_internamento')->where('id', $id)->value('gastos');
            }
        }

        if ($req['ambulatorio'] == "1") {
            $qInt = DB::table('ambulatorio')->where('data', '>', $dataInicial)->where('data', '<', $dataFinal)->pluck('id');
            foreach ($qInt as $id) {
                $relDT += DB::table('ambulatorio')->where('id', $id)->value('gastos');
            }
        }

        if ($req['servicos'] == "1") {
            $qInt = DB::table('fat_servico')->where('data', '>', $dataInicial)->where('data', '<', $dataFinal)->pluck('id');
            foreach ($qInt as $id) {
                $relDT += DB::table('fat_servico')->where('id', $id)->value('gastos');
            }
        }

        $reqS['despesas_totais'] = (double)$relDT;

        $rel=DespesasTotais::create($reqS);

        return redirect()->route('rel_dt.pag_rel', $rel->id)->with('success','Criado com Sucesso');
    }

    public function pag_rel(DespesasTotais $rel) {
        return view('rel_dt.pag_rel', ['rel'=>$rel]);
    }

    public function apagar(DespesasTotais $rel) {
        $rel->delete();
        return redirect()->route('rel_dt.index')->with('success', 'Apagado com Sucesso');
    } 
}
