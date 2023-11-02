<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $clientes = Clientes::all();
        $search =$request->get('search');
        return view('clientes.index' ,compact('clientes','search'));
        //
    }
    public function clientes(){

        $clientes = Clientes::all();
        return view('nosotros',
                    ['clientes' => $clientes]);

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
        $cliente = new Clientes();


        $cliente->visible       = request('visible') ? 1 : 0;
        $cliente->slug = Str::slug($request->get('name'));
        $cliente->name = request('nombre');
            if($request->hasFile('image')){
                $file = $request->image;
                $file->move(public_path(). '/img/clientes', $file->getClientOriginalName());
                $cliente->image = $file->getClientOriginalName();
            }
        $cliente->save();
        return redirect('clientes');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('clientes.edit',['cliente' => Clientes::findOrFail($id)]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->name = $request->get('nombre');
        if($request->hasFile('image')){
            $file = $request->image;
            $file->move(public_path(). '/img/clientes', $file->getClientOriginalName());
            $cliente->image = $file->getClientOriginalName();
        }
        $cliente->update();
        return redirect('clientes');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = Clientes::findOrFail($id);
        unlink(public_path('img/clientes/'.$cliente->image));
        $cliente->delete();
        return redirect('clientes');
        //
    }
}
