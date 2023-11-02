@extends('layouts.app')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Productos</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Productos</a></li>
                    <li class="breadcrumb-item"><a href="#">Editar</a></li>
                    <li class="breadcrumb-item active">{{$producto->name}}</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<form action="{{ route('producto.update', $producto->id) }}" method="post" enctype="multipart/form-data" class="row shadow">
    @csrf
    @method('PUT')

    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{ $producto->name }}">
                </div>
                <div class="form-group">
                    <label for="extract">Sub título</label>
                    <input type="text" name="extract" class="form-control" value="{{ $producto->extract }}">
                </div>
                <div class="form-group">
                    <label for="descriptions">Descripción</label>
                    <textarea name="descriptions" class="form-control" rows="6">{{ $producto->descriptions }}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="number" step="any" name="price" class="form-control" value="{{ $producto->price }}">
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="image">Imagen</label>
                    <input type="file" name="image" class="form-control-file">
                    @if($producto->image != "")
                        <img src="{{ asset('/img/productos/'.$producto->image) }}" alt="{{ $producto->image }}" class="img-fluid rounded mt-2">
                    @endif
                </div>
                <div class="form-group">
                    <label for="visible">Estatus:</label>
                    <input type="checkbox" name="visible" {{ $producto->visible == 1 ? 'checked' : '' }}>
                </div>
            </div>
        </div>
    </div>
     <hr>
    <div class="col-12">
        <div class="card shadow">
            <div class="card-footer text-muted small d-flex justify-content-between align-items-center">
                <span>{{ $producto->updated_at }}</span>
                <div>
                    <button type="submit" class="btn btn-outline-info shadow">
                        <i class="far fa-save"></i> Guardar
                    </button>
                    <a href="{{ URL::route('producto.index') }}" class="btn btn-outline-danger shadow ml-2">
                        <i class="far fa-window-close"></i> Cancelar
                    </a>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
