@extends('layouts.fronted.product-details')

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
                    <a class="nav-link "  href="{{ url('/')}}">INICIO</a>
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
                        <h1 class="tipeo1">DESCRIPCIÓN:</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
<main class="container container_product  mt-3">
    <div class="row shadow">
        <div class="col-md-6 left-column">
            <img data-image="red" class="active img-fluid rounded" src="{{asset('/img/productos/'.$producto->image)}}" alt="Producto">
        </div>
        <!-- Right Column -->
        <div class="col-md-6 right-column">
            <!-- Product Description -->
            <div class="product-description">
                <span>{{$producto->visible == 1 ? "En Stock":"Agotado"}}</span>
                <h4>{{$producto->name}}</h4><hr>
                <p>{{$producto->extract}}</p>
            </div>

            <!-- Product Configuration -->
            <div class="product-configuration">
                <!-- Cable Configuration -->
                <div class="cable-config">
                    <span>Categoría: </span><br>
                    <div class="cable-choose">
                        <button class="btn btn-primary">
                            <a href="{{ route('searchCategory' , $producto->categoria->slug)}}" class="text-white">
                                {{$producto->categoria->name}}
                            </a>
                        </button>
                    </div>
                </div>
            </div><hr>

            <!-- Product Pricing -->
            <div class="product-price ">
                <span>S/{{$producto->price}}</span>
               <!-- Agregar esto en tu vista de detalle del producto -->
               <a href="#" id="pedido-button" class="btn btn-primary" data-toggle="modal" data-target="#pedido-modal">Realizar Pedido</a>

            </div>
        </div>
    </div>
</main>

<!-- Modal para Realizar el Pedido -->
<div class="modal fade" id="pedido-modal" tabindex="-1" role="dialog" aria-labelledby="pedidoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pedidoModalLabel">Realizar Pedido</h5>
                <button type="button bg-dark" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('pedido.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="d-flex justify-content-between mx-4">
                            <img data-image="red" class="active img-fluid rounded" src="{{asset('/img/productos/'.$producto->image)}}" alt="Producto" width="80px" height="80px">
                            <h4>{{$producto->name}}</h4>
                            <span>S/{{$producto->price}}</span><hr>
                        </div>
                        <div class="card py-1">
                            <div class="d-flex justify-content-between mx-4">
                                <h6 class="mb-0">Subtotal:</h6>
                                <p class="mb-0">{{ $producto->price }}</p>
                            </div><hr>
                            <div class="d-flex justify-content-between mx-4">
                                <h6 class="mb-0">Total:</h6>
                                <p class="mb-0">{{ $producto->price }}</p>
                            </div>
                        </div>
                    </div>
                    <h4>¡ A donde te enviamos el pedido ?</h4>

                    <div class="form-group">
                        <label for="nombre_cliente">Nombre:</label>
                        <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="dni">Dni:</label>
                        <input type="number" name="dni" id="dni" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular:</label>
                        <input type="number" name="celular" id="celular" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ciudad">Ciudad:</label>
                        <input type="text" name="ciudad" id="ciudad" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="direccion_entrega">Direccion entrega:</label>
                        <input type="text" name="direccion_entrega" id="direccion_entrega" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="referencia">Referencia:</label>
                        <input type="text" name="referencia" id="referencia" class="form-control" required>
                    </div>

                    <!-- Agregar otros campos para apellidos, DNI, celular, ciudad, dirección, referencia, etc. -->

                    {{-- <div class="form-group">
                        <label for="subtotal">Subtotal:</label>
                        <input type="text" name="subtotal" id="subtotal" class="form-control" value="{{ $producto->price }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="total">Total:</label>
                        <input type="text" name="total" id="total" class="form-control" value="{{ $producto->price }}" readonly>
                    </div> --}}

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" style="background-color: #00ff00">Completar Pedido</button>
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container py-2">
    <div class="media">
        <img width="100" height="100" src="{{asset('/img/productos/'.$producto->image)}}" class="img-fluid rounded"  class="align-self-start mr-3" alt="Producto">
        <div class="media-body">
            <h5 class="mt-0">Descripción:</h5>
            <p>{{$producto->descriptions}}</p>
        </div>
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
