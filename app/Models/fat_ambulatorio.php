<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fat_ambulatorio extends Model
{
    use HasFactory;

    public $table = 'fat_ambulatorio';
    public $timestamps = false;

    protected $fillable = [
        'data',
        'valor',
        'paciente_nif'

    ];
}


