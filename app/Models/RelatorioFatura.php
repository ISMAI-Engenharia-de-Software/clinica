<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatorioFatura extends Model
{
    use HasFactory;

    public $table = 'rel_faturas';
    public $timestamps = false;

    protected $fillable = [
        'data_inicio',
        'data_final',
        'internamento',
        'ambulatorio',
        'servicos',
        'valor_total',
    ];
}
