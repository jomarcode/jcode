@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Categorías</a></li>
                    <li class="breadcrumb-item active">Index</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container mt-5">
    <h2>LISTA DE CATEGORÍAS DE LOS PRODUCTOS
        <a href="{{ route('categoria.create')}}" class="btn btn-outline-info shadow">
            <i class="fa fa-plus-circle"> Categorías</i>
        </a>
    </h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover shadow">
            <thead>
                <tr>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                <tr>
                    <td>
                        <a href="{{route('categoria.edit',$categoria->id)}}" class="btn btn-outline-success shadow">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Eliminar">
                            <button type="button" class="btn btn-outline-danger shadow" data-toggle="modal" data-target="#modalEliminar-{{$categoria->id}}">
                                <i class="fas fa-eraser"></i>
                            </button>
                        </div>
                        <div class="modal fade" id="modalEliminar-{{$categoria->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hola {{ Auth::user()->name }} </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Estas seguro que quieres eliminar esta Categoría?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-info shadow" data-dismiss="modal">Error mio..</button>
                                        <form action="{{ route('categoria.destroy', $categoria->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger shadow">Eliminar Categoría</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>{{$categoria->name}}</td>
                    <td>{{$categoria->descripcion}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<br><br>
<div class="alert alert-danger shadow" role="alert">
    <h4 class="alert-heading">Hola {{ Auth::user()->name }}</h4>
    <h4>Si vas a Eliminar una <strong>"categoría "</strong>tener en cuenta estas recomendaciones:<br>
        1-Al momento de eliminar una categoría se va a realizar la eliminación de "</strong>.todos los productos que poseen esa categoría"</strong>.<br>
        2-Es Mejor actualizar y cambiar los datos que eliminar una categoría. <br>
        3-No Elimine una categoría a no se por motivos mayores.
    </h4>
    <hr>
    <p class="mb-0">Que tengas un hermoso día Atte: JOMAR</p>
</div>
@endsection
