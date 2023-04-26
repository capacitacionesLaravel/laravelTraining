<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos= Pedido::all();
        return view('pedidos.index',compact('pedidos'));
    }

    public function crear()
    {
        return view('pedidos.crear');
    }

    public function guardar(Request $request)
    {
        $pedido = new Pedido();
        $pedido->fill($request->all());
        $pedido->save();

        return redirect()->route('pedidos.index');
    }
}
