<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    public $table = 'funcionario';

    protected $fillable = [
        'NIF',
        'Nome',
        'Idade',
        'Email',
        'Telemovel',
        'Especializacao',
        'Departamento_ID'];
}
