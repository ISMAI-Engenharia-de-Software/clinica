<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marcacao extends Model
{
    use HasFactory;

    public $table = 'marcacao';
    public $timestamps = false;

    protected $fillable = [
        'data',
        'motivo',
        'paciente_nif',
        'funcionario_nif'];
}
