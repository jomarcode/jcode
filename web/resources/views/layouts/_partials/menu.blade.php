 <div id="#">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow">
            <div class="container">
                <a href="{{ url('/') }}" class="brand-link">
                    <img src="#" alt=" logo" class="brand-image img-circle"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light">JOMAR</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto text-center">
                                <li class="nav-item">
                                    <a href="{{url('home')}}" class="{{ Request::path() === '/home' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="text-info  fas fa-home"></i>
                                        <p>Inicio</p>
                                    </a>
                                </li>


                                    <li class="nav-item">
                                        <a href="{{url('usuarios')}}"
                                            class="{{ Request::path() === 'usuarios' ? 'nav-link active ' : 'nav-link' }}">
                                            <i class="text-info  fas fa-users"></i>
                                            <p>
                                                Usuarios
                                                <?php $users_count = DB::table('users')->count(); ?>
                                                <span class="right badge badge-danger">{{ $users_count ?? '0' }}</span>
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item admin">
                                        <a href="{{url('#')}}"
                                            class="{{ Request::path() === 'roles' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="text-info fas fa-user-tag"></i>
                                            <p>
                                                Roles
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item admin">
                                        <a href="{{url('clientes')}}"
                                            class="{{ Request::path() === 'clientes/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="text-info fas fa-user-friends"></i>
                                            <p>
                                                Clientes
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item admin">
                                        <a href="{{url('proveedores')}}"
                                            class="{{ Request::path() === 'proveedores' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="text-info fas fa-user-friends"></i>
                                            <p>
                                                Proveedores
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item admin">
                                        <a href="{{url('ofertas')}}"
                                            class="{{ Request::path() === 'ofertas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="text-info fas fa-star"></i>
                                            <p>
                                                Ofertas del dia
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="{{url('categoria')}}"
                                            class="{{ Request::path() === 'Categorias' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="text-info fas fa-shopping-bag"></i>
                                            <p>
                                            Categorias
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('producto')}}"
                                            class="{{ Request::path() === 'producto' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="text-info fas fa-shopping-basket"></i>
                                            <p>
                                            Productos
                                            <?php $product_count = DB::table('productos')->count(); ?>
                                                <span class="right badge badge-danger">{{ $product_count ?? '0' }}</span>
                                            </p>
                                        </a>
                                    </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto shadow rounded">
                        <!-- Authentication Links -->
                        @guest
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
