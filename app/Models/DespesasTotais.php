<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DespesasTotais extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_inicio',
        'data_final',
        'internamento',
        'ambulatorio',
        'servicos',
    ];
}
