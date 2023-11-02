@extends('layouts.fronted.nosotros')

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
                    <a class="nav-link" href="{{ url('/productos')}}">PRODUCTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/nosotros')}}">NOSOTROS</a>
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
						<br>
						<br>
                        <h1 class="tipeo1">COMUNÍCATE CON NOSOTROS</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foda')
<div class="nosotros_body">
<div class="nosotros_container">
    <div class="nosotros_card shadow">
        <div class="nosotros_imbBx"  data-text="¿Quienes Somos?">
            <i class="fas fa-5x fa-question"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>¿Quienes somos?</h3>
                <p>Hola Soy J diseñador web esta pagina web .
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card  shadow">
        <div class="nosotros_imbBx" data-text="¿Nuestra Misión?">
            <i class="fas fa-5x fa-user-friends"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>Nuestra Misión</h3>
                <p>Establecer una relación con nuestros clientes distribuyendo nuestros productos con eficiencia,rapidez, buenos precios y buscando la mejora continua para contribuir con su desarrollo y el de nuestros colaboradores.
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card shadow">
        <div class="nosotros_imbBx" data-text="¿Nuestra Visión?">
            <i class="fas fa-5x fa-chart-bar"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>Nuestra Visión</h3>
                <p>Consolidarnos como una de las empresas líderes en distribución de artículos no estratégicos a nivel nacional,
                    reconocida por su compromiso y responsabilidad.
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card shadow ">
        <div class="nosotros_imbBx" data-text="¿Porque escogernos?">
            <i class="fas fa-5x fa-money-bill-wave"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>¿Porque escogernos?</h3>
                <p>Contamos con una amplia experiencia en ventas de productos y a los mejores precios de fábrica para la satisfacción del cliente.
                </p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('clientes')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($clientes as $cliente)
                    <div class="swiper-slide">
                        <img class="client_img img-fluid" src="{{asset('/img/clientes/'.$cliente->image)}}" alt="{{$cliente->image}}">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<footer class="footer bg-primary  mt-5">
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
@section('title')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="testimonial-title">
                <h5>CLIENTES </h5>
                <h3>QUE CONFÍAN EN NOSOTROS</h3>
                <hr class="style1">
            </div>
        </div>
    </div>
</div>
@endsection
@section('title2')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="testimonial-title">
                <h5>CONOCE</h5>
                <h3>MÁS ACERCA DE NOSOTROS</h3>
                <hr class="style1">
            </div>
        </div>
    </div>
</div>
@endsection
