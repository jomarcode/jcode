<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores  = Proveedores::all();
        return view('proveedores.index', compact('proveedores'));
        /*$proveedores['proveedores']=Proveedores::all();
        return view('proveedores.index',$proveedores);*/
        //
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
        $request->validate([
            'image' => 'required|image'
        ]);
        $proveedore = new Proveedores();
        $proveedore->slug          = Str::slug($request->get('name'));
        $proveedore->name          = request('name');
        $proveedore->visible       = request('visible') ? 1 : 0;
            if($request->hasFile('image')){
                $file = $request->image;
                $file->move(public_path(). '/img/proveedore', $file->getClientOriginalName());
                $proveedore->image = $file->getClientOriginalName();
            }
        $proveedore->save();
        return redirect('proveedores');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedores $proveedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proveedore = Proveedores::findOrFail($id);
        return view('proveedores.edit',compact('proveedore'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $proveedore = Proveedores::findOrFail($id);
        $proveedore->name = request('name');
        if($request->hasFile('image')){
            $file = $request->image;
            $file->move(public_path(). '/img/proveedore', $file->getClientOriginalName());
            $proveedore->image = $file->getClientOriginalName();
        }
        $proveedore->update();
        return redirect('proveedores');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proveedore = Proveedores::findOrFail($id);
        unlink(public_path('img/proveedore/'.$proveedore->image));
        $proveedore->delete();
        return redirect('proveedores');
        //
    }
}
