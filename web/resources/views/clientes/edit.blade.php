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
                    <li class="breadcrumb-item">Cliente</li>
                    <li class="breadcrumb-item">Index</li>
                    <li class="breadcrumb-item active"><a href="#">Editar</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<form action="{{ route('clientes.update', $cliente->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card text-center mx-auto" style="width: 400px;">
        <div class="card-header">
            <input type="text" name="nombre" class="form-control" value="{{ $cliente->nombre }}">
        </div>
        <div class="form-group cold-md-6">
            <label>Imagen</label><br>
            <input type="file" name="image">
            @if($cliente->image != "")
                <img src="{{ asset('/img/clientes/'.$cliente->image) }}" alt="{{ $cliente->image }}" height="150px" width="50px" class="card-img-top">
            @endif
        </div>
        <div class="card-footer text-muted small">
            {{ $cliente->updated_at }}
            <button type="submit" class="btn btn-info">
                <i class="far fa-save"></i>
            </button>
            <a href="{{ URL::route('clientes.index') }}">
                <button type="button" class="btn btn-danger float-right mr-1">
                    <i class="far fa-window-close"></i>
                </button>
            </a>
        </div>
    </div>
</form>
@endsection
