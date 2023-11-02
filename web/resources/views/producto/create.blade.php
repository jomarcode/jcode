@extends('layouts.app')
@section('content')
<div class="container ">
    <h1>
        Productos<small>[Agregar Productos]</small>
    </h1>

    <div class="row text-center shadow">
        <div class="col-12  col-md-12 col-lg-12">
            <div class="page">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <form action="{{ route('producto.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="control-label" for="categoria_id">CATEGORÍAS</label>
                    <select name="categoria_id" class="form-control" placeholder="Elija una categoria de producto">
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" class="form-control" required placeholder="Ingrese su Nombre">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="extract">Sub título</label>
                        <input type="text" name="extract" class="form-control" required placeholder="Ingrese su Sub título">
                    </div>
                </div>
                <div class="form-group">
                    <label for="descriptions">Descripción:</label>
                    <textarea name="descriptions" class="form-control" required maxlength="400"></textarea>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="price">Precio</label>
                        <input type="number" step="any" name="price" class="form-control" required placeholder="Ingrese su Nombre">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">Imagen:</label>
                        <input type="file" name="image" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="visible">Estatus:</label>
                    <input type="checkbox" name="visible" class="form-check-label">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary shadow">Guardar</button>
                    <a href="{{ route('producto.index') }}" class="btn btn-outline-danger shadow">ATRAS</a>
                </div><br>
            </form>
        </div>
    </div>
</div>
@endsection
