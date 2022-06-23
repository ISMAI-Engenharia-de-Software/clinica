<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GestaoAmbulatorio extends Model
{
    use HasFactory;

    public $table = 'ambulatorio';
    public $timestamps = false;

    protected $fillable = [
        'data',
        'procedimento',
        'estado',
        'gastos',
        'paciente_nif'];
}
