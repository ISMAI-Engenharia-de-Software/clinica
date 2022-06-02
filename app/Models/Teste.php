<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    use HasFactory;

    public $table = 'teste';
    public $timestamps = false;

    protected $fillable = [
        'data',
        'tipo_teste',
        'resultado',
        'observacoes',
        'paciente_nif'];
}
