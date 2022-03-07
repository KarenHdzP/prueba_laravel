<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos';
    protected $fillable = [
        'semestre',
        'grupo',
        'turno'
    ];
}
