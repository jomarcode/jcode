<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use App\Models\Categorias;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categorias::all();
        $productos = Productos::all();

        return view('categorias', compact('categorias' , 'productos'));
        //
    }
    public function searchCategory($slug){
        $categorias = Categorias::where('slug' , $slug)->pluck('id')->all();
        $productos = Productos::where('categoria_id',$categorias)
                    ->orderBY('id', 'DESC')
                    ->simplePaginate(6);
        return view('productos', compact('categorias' , 'productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $producto = Productos::where('slug', $slug)->first();
        return view('product-details', compact('producto'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
