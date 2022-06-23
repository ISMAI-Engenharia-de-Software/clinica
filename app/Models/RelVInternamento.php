<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelVInternamento extends Model
{
  use HasFactory;

  public $table = 'rel_ven_internamento';

  protected $fillable = [
    'data_inicio',
    'data_final',
    'nome_paciente',
    'idade_paciente',
    'motivo',
    'hora',

  ];
}
