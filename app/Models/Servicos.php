<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicos extends Model
{
    use HasFactory;

    public $table = 'servico';
    public $timestamps = false;

    protected $fillable = [
        'data',
        'nome',
        'tipo',
        'condicoes',
        'gastos',
        'paciente_nif',
    ];
}
