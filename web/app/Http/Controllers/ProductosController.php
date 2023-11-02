<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Http\Requests\SaveProductoRequest;
use Illuminate\Support\Str;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request){
            $query = trim($request->get('search'));
            $productos = Productos::where('name','LIKE','%'. $query.'%')
            ->orderBy('id','asc')
            ->simplePaginate(5);
            return view('producto.index',['productos' => $productos , 'search' => $query]);
        }
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categorias::all();
        return view('producto.create',compact('categorias'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveProductoRequest $request)
    {
        $producto = new Productos();

        $producto->categoria_id  = $request->get('categoria_id');
        $producto->name          = request('name');
        $producto->slug          = Str::slug($request->get('name'));
        $producto->descriptions  = request('descriptions');
        $producto->extract       = request('extract');
        $producto->price         = request('price');
            if($request->hasFile('image')){
                $file = $request->image;
                $file->move(public_path(). '/img/productos', $file->getClientOriginalName());
                $producto->image = $file->getClientOriginalName();
        $producto->visible       = request('visible') ? 1 : 0;
    }
        $producto->save();
        return redirect('producto/');

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('producto.edit',['producto' => Productos::findOrFail($id)]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $producto = Productos::findOrFail($id);

        $producto->categoria_id  = auth()->id();
        $producto->name          = $request->get('name');
        $producto->slug          = Str::slug($request->get('name'));
        $producto->descriptions  = $request->get('descriptions');
        $producto->extract       = $request->get('extract');
        $producto->price         = $request->get('price');
            if($request->hasFile('image')){
                $file = $request->image;
                $file->move(public_path(). '/img/productos', $file->getClientOriginalName());
                $producto->image = $file->getClientOriginalName();
            }
        $producto->visible       = $request->get('visible') ? 1 : 0;
        $producto->update();
        return redirect('producto/');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Productos::find($id);
        unlink(public_path('img/productos/'.$producto->image));
        $producto->delete();
        return redirect('producto/');
        //
    }
}
