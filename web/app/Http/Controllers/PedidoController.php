<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use App\Models\Productos;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index(Request $request)
    {
        $pedido = Pedido::all();
        return view('pedido.index',compact('pedido'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedido.create');
    }

    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'dni' => 'required',
            'celular' => 'required',
            'ciudad' => 'required',
            'direccion_entrega' => 'required',
            'referencia' => 'required',
        ]);

        // Recupera los datos del formulario
        // $nombre = $request->input('nombre');
        // $apellidos = $request->input('apellidos');
        // $dni = $request->input('dni');
        // $celular = $request->input('celular');
        // $ciudad = $request->input('ciudad');
        // $direccion_entrega = $request->input('direccion_entrega');
        // $referencia = $request->input('referencia');

        // Crea un nuevo pedido
        $pedido = new Pedido();
        $pedido->producto = request('producto');
        $pedido->nombre_cliente = request('nombre');
        $pedido->apellidos_cliente =request('apellidos_cliente');
        $pedido->dni = request('dni');
        $pedido->celular = request('celular');
        $pedido->ciudad = request('ciudad');
        $pedido->direccion_entrega = request('direccion_entrega');
        $pedido->referencia = request('referencia');
        $pedido->cantidad_producto = 1;
        $pedido->precio_unitario = request('subtotal');
        $pedido->subtotal = request('subtotal');
        $pedido->total = request('total');
        $pedido->save();

        return redirect()->back();
    }
}
