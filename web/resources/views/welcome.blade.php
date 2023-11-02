@extends('layouts.fronted.index')

@section('navbar')
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-hover">
    <div class="container-fluid">
        <a href="" class="logo">
            <img class="imgtamaño" class="img-fluid" src="#" alt="jomar">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/')}}">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact')}}">CONTACTENOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/productos')}}">PRODUCTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/nosotros')}}">NOSOTROS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
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
                    <h1 class="tipeo1">JOMARCRUZ</h1>
                    <h1 class="tipeo2"><span class="type"></span></h1>
                    <div class="botonesinfo">
                        <a href="" class="btn btn-outline-primary hero-btn">MAS INFORMACIÓN</a>
                        <a href="{{ url('/productos')}}" class="btn btn-outline-secondary hero-btn2 btn1">VER PRODUCTOS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="whatsapp-float">
        <a href="https://wa.me/940557994?text=Hola%20interesado%20en%20tu%20producto" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

</div>
@endsection
@section('cards_service')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service shadow rounded">
                    <i class="fas fa-percent fa-4x"></i>
                    <h4 class="title_services">Ofertas del Día</h4>
                    <p class="description_services">Ofertas especiales</p><br>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-x3">Ver mas</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service ">
                <div class="service shadow rounded">
                    <i class="fas fa-shopping-cart fa-4x"></i>
                    <h4 class="title_services">Entrega Inmediata</h4>
                    <p class="description_services">Servicio de entrega inmediata</p><br>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl2">Ver mas</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service ">
                <div class="service shadow rounded">
                    <i class="fas fa-user-check fa-4x"></i>
                    <h4 class="title_services">Clientes Satisfechos</h4>
                    <p class="description_services">Nuestros clientes felices</p>
                    <a href="{{ url('/nosotros')}}" class="btn_modal_wel mt-5">Ver mas</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service shadow rounded">
                    <i class="fas fa-thumbs-up fa-4x"></i>
                    <h4 class="title_services">Múltiples Formas de Pago</h4>
                    <p class="description_services">Diferentes tipos de pago</p>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl">Ver mas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('cards')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6 mb-3 shadow">
            <div class="single-content">
                <img src="{{ asset('img/categoria/cat1.jpg')}}" alt="Categorias Higienika Oficce Perú">
                <div class="text-content">
                    <h3>Productos de Celulares</h3>
                    <hr class="style2">
                    <h5>Para el hogar y oficina</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 shadow">
            <div class="single-content">
                <img src="{{ asset('img/categoria/cat2.jpg')}}" alt="Categorias Higienika Oficce Perú">
                <div class="text-content">
                    <h3>Artículos de Oficina</h3>
                    <hr class="style2">
                    <h5>Artículos de oficina de las mejores marcas</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 shadow">
            <div class="single-content">
                <img src="{{ asset('img/categoria/cat3.jpg')}}" alt="Categorias Higienika Oficce Perú">
                <div class="text-content">
                    <h3>Repuestos De Moviles</h3>
                    <hr class="style2">
                    <h5>Distribuimos Partes y repuestos</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 shadow">
            <div class="single-content">
                <img src="{{ asset('img/categoria/cat4.jpg')}}" alt="Categorias Higienika Oficce Perú">
                <div class="text-content">
                    <h3>Artículos de Laptops</h3>
                    <hr class="style2">
                    <h5>Artículos Laptops de trabajo</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title5')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2" >
            <div class="proveedor-title">
                <h5 style="color: black">CONOCE A</h5>
                <h3 style="color: rgb(255, 218, 8)">NUESTROS PROVEEDORES</h3>
                <hr>
            </div>
        </div>
    </div>
</div>
@endsection
@section('Proveedores')
<div class="container">
    <div class="carousel">
        <div class="row">
            <div class="col col-md-6 col-lg-6">
                <div id="carousel_prove" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($proveedores as $index => $proveedore)
                        <div class="carousel-item {{$index === 0 ? 'active' : ''}}">
                            <div class="item">
                                <div class="content">
                                    <h1>{{$proveedore->name}}</h1>
                                </div>
                                <div class="img">
                                    <img src="{{asset('/img/proveedore/'.$proveedore->image)}}" class="img-fluid rounded" alt="">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carousel_prove" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel_prove" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('title2')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="testimonial-title">
                <h5>CONOCE</h5>
                <h3>NUESTROS PRODUCTOS</h3>
                <hr>
            </div>
        </div>
    </div>
</div>
@endsection

@section('products')
<div class="container">
    <div class="row">
        @foreach($productos as $producto)
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="producst_body autoplay">
                <div class="wrapper shadow">
                    <div class="container">
                        <img src="{{asset('/img/productos/'.$producto->image)}}" class="img-fluid"  alt="{{$producto->image}}" >
                        <div class="bottom">
                            <div class="left">
                                <div class="details">
                                    <h2 class="txt_products">{{$producto->name}}</h2>
                                    <p>S/{{$producto->price}}</p>
                                </div>
                                <div class="buy text-center">
                                    <a href="{{route('product-details', $producto->slug)}}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="fas fa-plus"></i></div>
                        <div class="contents">
                            <h1>{{$producto->extract}}</h1>
                            <h5 style="color: white">{{$producto->descriptions}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('footer')
<footer class="footer bg-primary">
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
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="testimonial-title">
                <h5>CONOCE</h5>
                <h3>NUESTRAS CATEGORÍAS</h3>
                <hr class="style1">
            </div>
        </div>
    </div>
</div>
@endsection
<!--MODALS-->
@section('modals')
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center modal-title" id="exampleModalCenterTitle">Formas de pago</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="principalPagos">
                    <div id="contenedor" class="row_p">
                        <div id="naranja" class="">
                            <img class="popou_img"src="{{ asset('img/pagos.jpg')}}" alt="">
                        </div>
                        <div id="verde" class="content_pagos">
                            <h2 class=" frm_pagos text-center">FORMAS DE PAGO</h2>
                <hr class="style3">

                <div id="price">
                    <!--price tab-->
                    <div class="plan">
                      <div class="plan-inner">
                        <div class="entry-title">
                          <h3>BCP</h3>
                          <div class="price"><i class="mt-3 fa-2x fas fa-credit-card"></i>
                          </div>
                        </div>
                        <div class="entry-content">
                          <ul>
                            <li>Número de cuenta</li>
                            <li>******************</li>
                            <li>N° de cta. interbancaria</li>
                            <li>*********************</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end of price tab-->
                    <!--price tab-->
                    <div class="plan basic">
                      <div class="plan-inner">
                        <div class="entry-title">
                          <h3>BBVA</h3>
                          <div class="price"><i class="mt-3 fa-2x fas fa-credit-card"></i>
                          </div>
                        </div>
                        <div class="entry-content">
                          <ul>
                            <li>Número de cuenta</li>
                            <li>*******************</li>
                            <li>N° de cta. interbancaria</li>
                            <li>**********************</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end of price tab-->
                    <!--price tab-->
                    <div class="plan standard">
                      <div class="plan-inner">
                        <div class="entry-title">
                          <h3>Yape</h3>
                          <div class="price"><i class="mt-3 fa-2x fas fa-mobile-alt"></i>
                          </div>
                        </div>
                        <div class="entry-content">
                          <ul>
                            <li>Número de Billetera Electronica</li>
                            <li>999 086 095</li>
                            <li>.</li>
                            <li>.</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end of price tab-->
                </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<div class="modal fade modal fade bd-example-modal-xl2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div id="contenedor" class="row_p">
            <div id="naranja" class="">
                <img class="popou_img"src="{{ asset('img/entrega.jpg')}}" alt="">
            </div>
            <div id="verde" class="content_pagos">
                <h2 class=" frm_pagos text-center">REALIZAMOS DELIVERY ESPECIAL</h2>
                <hr class="style3">
                <h5>Primero se envía la cotización al cliente, luego de ello el cliente envía la orden de compra por medio de nuestro correo y a las 24 horas
                    se le realiza el envío de los productos dentro de Lima sin costo alguno, a provincia se aplica un adicional.</h5>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal fade bd-example-modal-x3" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="text-center modal-title" id="exampleModalCenterTitle">OFERTAS DEL DÍA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="principal">
                @foreach($ofertas as $oferta)
                <div id="contenedor" class="row_p">
                    <div id="naranja" class="">
                        <img class="img-fluid rounded"src="{{asset('/img/ofertas/'.$oferta->image)}}" alt="{{$oferta->image}}">
                    </div>
                    <div id="verde" class="content_pagos">
                        <strong><h2 class=" frm_pagos text-center">{{$oferta->titulo}}</h2></strong>
                        <br>
                        <h4>{{$oferta->texto}}</h4>
                        <button type="button" class="btnwssp btn btn-outline-success btn-lg">
                            <a target="none" href="{{$oferta->titulo}}">
                               Preguntar
                            </a>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class='icon-scroll'></div>
    <h6 style="color: white" class="text-center">Si hay más promociones por favor siga bajando</h6>
</div>
@endsection
