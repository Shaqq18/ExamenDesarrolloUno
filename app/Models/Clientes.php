<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'nombre_completo',
        'correo_electronico',
        'telefono',
        'direccion',
    ];

    public function pedidos()
    {
        return $this->hasMany(Pedidos::class, 'cliente_id');
    }
}
