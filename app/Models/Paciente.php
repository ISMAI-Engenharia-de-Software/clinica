<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    public $table = 'paciente';
    public $timestamps = false;
    protected $primaryKey = 'nif';
    protected $fillable = [
        'nif',
        'nome',
        'idade'];
}
