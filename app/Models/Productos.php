<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
    ];

    public function pedidos()
    {
        return $this->hasMany(Pedidos::class, 'producto_id');
    }
}
