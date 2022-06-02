<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelVenServicos extends Model
{
    use HasFactory;

    public $table = 'RelVenServicos';

    protected $fillable = [
        'nome',
        'tipo',
        'condicoes',
        'gastos',
        'paciente_nif'];
}
