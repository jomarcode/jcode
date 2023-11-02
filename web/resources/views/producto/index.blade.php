@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <h2 class="shadow">LISTA DE PRODUCTOS
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
        <a href="{{ route('producto.create')}}" class="btn btn-outline-info float-right shadow">
            <i class="fa fa-plus-circle"> Producto</i>
        </a>
    </h2>

    @if($search)
    <div class="alert alert-success" role="alert">
        El resultado de la búsqueda de <strong>'{{$search}}'</strong> son:.
    </div>
    @endif

    <div class="table-responsive shadow">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Sub título</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Estatus</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td>
                        <a href="{{URL::route('producto.edit',$producto->id)}}">
                            <button type="button" class="btn btn-outline-info shadow">
                                <i class="far fa-edit"></i>
                            </button>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('producto.destroy', $producto->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger shadow" onclick="return confirm('Estás Seguro de Eliminar Esta Producto?')">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <img class="rounded-circle" src="{{asset('/img/productos/'.$producto->image)}}" alt="{{$producto->image}}" width="30" height="30">
                    </td>
                    <td>{{$producto->name}}</td>
                    <td>{{$producto->categoria->name}}</td>
                    <td>{{$producto->extract}}</td>
                    <td>{{$producto->descriptions}}</td>
                    <td>{{ number_format( $producto->price,2)}}</td>
                    <td>{{$producto->visible == 1 ? "En Stock":"Agotado"}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$productos->links()}}
</div>
<br><br>

@endsection
