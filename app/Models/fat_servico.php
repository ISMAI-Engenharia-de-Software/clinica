<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fat_servico extends Model
{
    use HasFactory;

    protected $fillable = [
        'Data',
        'Valor',
        'Paciente_NIF'];
}
