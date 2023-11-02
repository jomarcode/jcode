<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use App\Models\Proveedores;
use App\Models\Publicofert;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PublicofertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ofertas = Publicofert::all();
        return view('ofertas.index', compact("ofertas"));
        //
    }
    public function ofertas(){
        $ofertas = publicofert::all();
        $productos = Productos::all();
        $proveedores = Proveedores::all();

        return view('index', compact('ofertas' , 'productos','proveedores'));

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
        $oferta = new publicofert();


        $oferta->name = request('titulo');
        $oferta->descripcion = request('texto');
        $oferta->slug          = Str::slug($request->get('name'));
        $oferta->visible       = request('visible') ? 1 : 0;

            if($request->hasFile('image')){
                $file = $request->image;
                $file->move(public_path(). '/img/ofertas', $file->getClientOriginalName());
                $oferta->image = $file->getClientOriginalName();
    }
        $oferta->save();
        return redirect('ofertas');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Publicofert $publicofert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('ofertas.edit',['oferta' => publicofert::findOrFail($id)]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $oferta = publicofert::findOrFail($id);
        $oferta->name = request('titulo');
        $oferta->descripcion = request('texto');
        if($request->hasFile('image')){
            $file = $request->image;
            $file->move(public_path(). '/img/ofertas', $file->getClientOriginalName());
            $oferta->image = $file->getClientOriginalName();
        }
        $oferta->update();
        return redirect('ofertas');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $oferta = publicofert::findOrFail($id);
        unlink(public_path('img/ofertas/'.$oferta->image));
        $oferta->delete();
        return redirect('ofertas');
        //
    }
}
