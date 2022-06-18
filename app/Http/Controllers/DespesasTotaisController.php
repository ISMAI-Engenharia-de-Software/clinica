<?php

namespace App\Http\Controllers;

use App\Http\Requests\DespesasTotaisRequest;
use App\Models\DespesasTotais;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class DespesasTotaisController extends Controller
{
    public function index() {
        $rels = DespesasTotais::orderBy('data_criacao','desc')->paginate(10);
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
            $qInt = DB::table('internamento')->where('data', '>=', $dataInicial)->where('data', '<=', $dataFinal)->pluck('id');
            foreach ($qInt as $id) {
                $relDT += DB::table('internamento')->where('id', $id)->value('gastos');
            }
        }

        if ($req['ambulatorio'] == "1") {
            $qInt = DB::table('ambulatorio')->where('data', '>=', $dataInicial)->where('data', '<=', $dataFinal)->pluck('id');
            foreach ($qInt as $id) {
                $relDT += DB::table('ambulatorio')->where('id', $id)->value('gastos');
            }
        }

        if ($req['servicos'] == "1") {
            $qInt = DB::table('servico')->where('data', '>=', $dataInicial)->where('data', '<=', $dataFinal)->pluck('id');
            foreach ($qInt as $id) {
                $relDT += DB::table('servico')->where('id', $id)->value('gastos');
            }
        }

        $reqS['despesas_totais'] = (double)$relDT;
        $reqS['data_criacao'] = Carbon::now()->format('Y-m-d H:i:s');

        $rel=DespesasTotais::create($reqS);

        return redirect()->route('rel_dt.pag_rel', $rel->id)->with('success',"Relatório de Despesas Totais #$rel->id Criado com Sucesso");
    }

    public function pag_rel(DespesasTotais $rel) {
        return view('rel_dt.pag_rel', ['rel'=>$rel]);
    }

    public function apagar(DespesasTotais $rel) {
        $rel->delete();
        return redirect()->route('rel_dt.index')->with('success', "Relatório de Despesas Totais #$rel->id Apagado com Sucesso");
    } 
}
