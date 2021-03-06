<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelVenServicos extends Model
{
  use HasFactory;

  public $table = 'rel_ven_servicos';

  protected $fillable = [
    'data_inicio',
    'data_final',
    'nif_paciente',
    'nome_paciente',
    'tipo_servico',
    'preco',
    'anotacoes'
  ];
}
