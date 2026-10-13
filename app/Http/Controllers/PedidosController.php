<?php

namespace App\Http\Controllers;
use App\Models\Pedidos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index()
    {
        $pedidos = Pedidos::all();
        dd($pedidos);
    }
}
