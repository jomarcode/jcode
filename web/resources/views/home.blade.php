@extends('layouts.app')

@section('content')
<div class="content-header mt-4">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content text-center">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info shadow rounded">
                    <div class="inner">
                    <h3>{{$cons_user}}</h3>

                        <p>Usuarios</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success shadow rounded">
                    <div class="inner">
                        <h3>{{$cons_ofertas}}</h3>

                        <p>Ofertas Del dia</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-cash-register fa-2x"></i>
                    </div>
                    <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning shadow rounded">
                    <div class="inner">
                        <h3>{{$cons_productos}}</h3>

                        <p>Productos</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-box-open fa-2x"></i>
                    </div>
                    <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger shadow rounded">
                    <div class="inner">
                        <h3>{{$cons_clientes}}</h3>
                        <p>Clinetes</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-street-view fa-2x"></i>
                    </div>
                    <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col col-md-8 col-lg-4 ">
                <div class="card shadow">
                    <div class="card-header h5 text-primary">{{ __('BIENVENIDO') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Hola: {{ Auth::user()->name }} Has Iniciado Sesion de manera correcta
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
</div><!-- /.container-fluid --><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
