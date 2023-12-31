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
                    <li class="breadcrumb-item">Ofertas</li>
                    <li class="breadcrumb-item">Index</li>
                    <li class="breadcrumb-item active"><a href="#">Editar</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<form action="{{ route('ofertas.update', $oferta->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card text-center mx-auto" style="width: 400px;">
        <div class="card-header">
            <input type="text" name="titulo" class="form-control" required value="{{ $oferta->titulo }}">
        </div>
        <div class="card-body">
            <textarea name="texto" id="" class="form-control" required rows="6">{{ $oferta->texto }}</textarea>
        </div>
        <div class="form-group cold-md-6">
            <label>Imagen</label>
            <br>
            <input type="file" name="image">
            @if($oferta->image != "")
                <img src="{{asset('/img/ofertas/'.$oferta->image)}}" alt="{{$oferta->titulo}}" height="300px" width="50px" class="card-img-top">
            @endif
        </div>
        <div class="card-footer text-muted small">
            {{ $oferta->updated_at }}
            <button type="submit" class="btn btn-info">
                <i class="far fa-save"></i>
            </button>
            <a href="{{URL::route('ofertas.index')}}">
                <button type="button" class="btn btn-danger float-right mr-1">
                    <i class="far fa-window-close"></i>
                </button>
            </a>
        </div>
    </div>
</form>
@endsection
