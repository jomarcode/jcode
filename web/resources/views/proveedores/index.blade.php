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
                    <li class="breadcrumb-item"><a href="#">Proveedores</a></li>
                    <li class="breadcrumb-item active">Index</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@include('proveedores.modal')

<div class="mt-3 row">
    @foreach($proveedores as $proveedore)
        @include('proveedores.modal-delete')
        <div class="col col-md-6 col-lg-6 mb-3">
            <div class="card shadow">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="{{asset('/img/proveedore/'.$proveedore->image)}}" alt="{{$proveedore->image}}" class="img-fluid rounded"  >
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h4 class="card-title">{{$proveedore->name}}</h4><hr>
                            <p class="card-text"><small class="text-muted">Fecha Ingreso:{{ $proveedore->created_at}}</small></p>
                            <p class="card-text"><small class="text-muted">Fecha Actualizado:{{ $proveedore->updated_at}}</small></p>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-info">
                    <a href="{{URL::route('proveedores.edit',$proveedore->id)}}">
                        <button type="button" class="btn btn-outline-info btn-sm ">
                            <i class="far fa-edit"></i>
                        </button>
                    </a>
                    <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modalEliminar-{{$proveedore->id}}">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </div>
            </div>
        </div>
    @endforeach
        </div>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Hola {{ Auth::user()->name }}</h4>
            <p>Si vas a publicar una Imagen de Proveedores porfavor sigue esta recomedación:<br>
                1-Para que el usuario tenga una mayor satisfaccion al ver
                la imagen porfavor que sus dimensiones sean de <strong>"720 x 1280"</strong>.<br>
                2-Que la imagen tenga un formato <strong>".jpg"</strong>.<br>
                3-Respete los caracteres de los campos solicitados.
            </p>
            <hr>
            <p class="mb-0">Que tengas un hermoso día Atte: JOMAR</p>
        </div>
</div>
@endsection
