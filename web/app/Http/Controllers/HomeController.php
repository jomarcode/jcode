<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Clientes;
use App\Models\Productos;
use App\Models\publicofert;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user= Auth::user();
        $cons_user = User::count();
        $cons_ofertas = publicofert::count();
        $cons_productos = Productos::count();
        $cons_clientes = Clientes::count();
        return view('home',compact('user','cons_user','cons_ofertas','cons_productos','cons_clientes'));
    }
}
