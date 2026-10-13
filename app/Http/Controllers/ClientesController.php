<?php

namespace App\Http\Controllers;
use App\Models\Clientes;
use Illuminate\Database\Eloquent\Model;




class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Clientes::all();
        dd($clientes);
    }

    public function create()
    {   
        return view('clientes.create');
    }



}
