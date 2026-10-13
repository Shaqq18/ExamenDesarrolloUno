<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $fillable = [
        'nombre_completo',
        'correo_electronico',
        'telefono',
        'direccion',
        'puesto',
    ];
}
