@extends('layouts.app')

@section('content')
<div class="container mt-5 shadow ">
    <h2>LISTA DE USUARIOS DEL SISTEMA
        <form class="form-inline ml-3 float-right">
            <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" name="search" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                    <button class="input-group-text" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </h2>
    <h6>
        @if($search)
        <div class="alert alert-success" role="alert">
            El resultado de la búsqueda de <strong>'{{$search}}'</strong> son:.
        </div>
      @endif

    </h6>
    <table class="table table-striped table-bordered table-hover shadow" >
        <thead>
            <tr class="text-center">
            <th scope="col" >Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col" >Gestión</th>
            <!--<th scope="col">Actualizacion</th>
            <th scope="col">Gestion</th>-->
            </tr>
        </thead>
        <tbody >
            @foreach($users as $user)
            <tr  class="text-center">
                <th scope="row" >{{$user->id}}</th>
                <td >{{$user->name}}</td>
                <td >{{$user->email}}</td>

                <!--<td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>-->
                <td>


                    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#userModal{{$user->id}}">
                        <i class="far fa-eye"></i>
                    </button>
                    <td><button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar{{$user->id}}">
                        <i class="fas fa-trash"></i>
                    </button></td>

                </td>
            </tr>
            @include('usuarios.info')
            @endforeach
        </tbody>
    </table>
</div>
@endsection
