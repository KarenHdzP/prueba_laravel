<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //
    protected $table = 'estudiantes';
    protected $fillable = [
        'nombre_estudiante',
        'apellidos',
        'edad',
        'correo_electronico',
        'telefono',
        'grupo_id'
    ];

}
