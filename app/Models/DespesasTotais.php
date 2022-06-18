<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DespesasTotais extends Model
{
    use HasFactory;

    public $table = 'rel_despesas';
    public $timestamps = false;

    protected $fillable = [
        'data_criacao',
        'data_inicio',
        'data_final',
        'internamento',
        'ambulatorio',
        'servicos',
        'despesas_totais',
    ];
}
