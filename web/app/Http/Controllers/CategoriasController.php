<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoriaEditRequest;

use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categorias::all();
        return view('categoria.index', compact('categorias'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:categorias|max:255|regex:/^[\pL\s\-]+$/u'
        ]);

        $categoria = Categorias::create([
            'name' => $request->get('name'),
            'slug' => Str::slug($request->get('name')),
            'descripcion' => $request->get('descripcion')
        ]);

        $messege = $categoria ? 'Categoria agregada correctamente' : 'la cetegoria no se agrego';
        return redirect()->route('categoria.index')->with('messege', $messege);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorias $categoria)
    {
        return $categoria;
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categoria = Categorias::findOrFail($id);
        return view('categoria.edit' , ['categoria' => $categoria]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriaEditRequest $request, $id)
    {
        $categoria = Categorias::findOrFail($id);
        $categoria->name = $request->get('name');
        $categoria->slug = Str::slug($request->get('name'));
        $categoria->descripcion = $request->get('descripcion');

        $categoria->update();

        return redirect('/categoria');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categoria = Categorias::find($id);
        $categoria ->delete();
        return redirect()->back();
        //
    }
}
