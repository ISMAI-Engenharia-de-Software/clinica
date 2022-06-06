<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelVenAmbulatorio extends Model
{
  use HasFactory;

  public $table = 'rel_ven_ambulatorio';

  protected $fillable = [
    'data_inicio',
    'data_final',
    'nif_paciente',
    'nome_paciente',
    'procedimento',
    'preco',
    'anotacoes'
  ];
}
