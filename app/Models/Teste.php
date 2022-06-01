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
        'Data',
        'TipoTeste',
        'Resultado',
        'Observacoes',
        'Paciente_NIF'];
}
