@extends('layouts.fronted.categorias')


@section('navbar')
<nav class="navbar navbar-expand-lg bg-primary fixed-top">
    <div class="container-fluid">
        <a href="" class="logo">
            <img class="imgtamaño" src="#" alt="jomar">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/')}}">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact')}}">CONTACTENOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/productos')}}">PRODUCTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/nosotros')}}">NOSOTROS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="clearfix"></div>
@endsection
@section('banner')
<div class="banner">
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <div class="hero-text">
                    <h4>PAGINA <span>WEB</span></h4>
					    <br><br>
                        <h1 class="tipeo1">VARIEDAD DE PRODUCTOS</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('products')
<div class="container main mt-5">
    <h1 class="title_category">Escoja una de nuestras categorías</h1>
    <hr class="style4">
    <div class="row">
        @foreach($categorias as $categoria)
        <div class="col-md-4">
            <div class="card shadow">
                <img src="{{ asset('img/animado.jpg')}}" class="card-img-fluid rounded"  alt="Imagen de la categoría">
                <div class="card-body">
                    <h3 class="card-title">{{$categoria->name}}</h3>
                    <hr>
                    <p class="card-text">{{$categoria->descripcion}}</p>
                    <a class="btn btn-outline-info card_btn" href="{{ route('searchCategory', $categoria->slug)}}">
                        Productos
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

@section('footer')
<footer class="footer bg-primary mt-5">
    <div class="container text-white">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="l-footer">
                    <!--<img class="footer_img" src="{{asset('img/JD.png')}}" alt="J | Proyectos">-->
                    <h2 style="color: white" class="footer_img">JD</h2>
                    <p>Hola Soy J diseñador web esta pagina web esta totalmente gratis para que puedan implementar a algun proyecto universitario la unica condicion de uso es que mejoren algo a esta pagina web para que asi fortalezcan sus conocimientos.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <ul class="r-footer">
                    <li >
                        <h2>Social</h2>
                        <ul class="box list-unstyled">
                            <li class="button_social">
                                <i class="fab mr-2 fa-facebook"></i>
                                <a href="#" target="_blank">Facebook</a>
                            </li>
                            <li class="button_social">
                                <i class="fab mr-2 fa-twitter"></i>
                                <a href="#">Twitter</a>
                            </li>
                            <li class="button_social">
                                <i class="fab mr-2 fa-instagram"></i>
                                <a href="#" target="_blank">Instagram</a>
                            </li>
                            <li class="button_social">
                                <i class="fab mr-2 fa-linkedin-in"></i>
                                <a href="#" target="_blank">Linkedin</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <ul class="features list-unstyled">
                    <li>
                        <h2>Información</h2>
                        <ul class="box">
                            <li><a href="#">Políticas de Privacidad</a></li>
                            <li><a href="#">Trabaja con nosotros</a></li>
                        </ul>
                    </li>
                    <li>
                        <h2>Procedimiento de Pagos</h2>
                        <ul class="box">
                            <li><a type="button" class="btn btn-outline-info" data-toggle="modal" data-target=".bd-example-modal-xl" href="#">Ver mas</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="b-footer">
        <div class="container">
            <p class="text-center">Todos los Derechos reservados by <a href="#" target="_blank">©J-2023</a></p>
        </div>
    </div>
</footer>
@endsection
