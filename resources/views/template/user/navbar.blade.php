<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
                data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Categorias</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>

            @php
                $isHome = Request::is('/');
                $navClass = $isHome
                    ? 'collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0'
                    : 'collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light';
            @endphp

            <nav id="navbar-vertical" class="{{ $navClass }}"
                @if (!$isHome) style="width: calc(100% - 30px); z-index: 1;" @endif>
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    @foreach ($categories as $category)
                        <a href="" class="nav-item nav-link"> {{ $category->name }} </a>
                    @endforeach
                </div>
            </nav>
        </div>

        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="{{ route('user.home.index') }}" class="text-decoration-none d-block d-lg-none">
                    <h1 class="font-weight-bold ">Presume<span
                            class="text-primary m-0 display-5 font-weight-semi-bold">Style</span></h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route('user.home.index') }}"
                            class="nav-item nav-link {{ request()->routeIs('user.home.index') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('user.shop.index') }}"
                            class="nav-item nav-link {{ request()->routeIs('user.shop.index') ? 'active' : '' }}">Productos</a>
                        <a href="{{ route('user.contact.index') }}"
                            class="nav-item nav-link {{ request()->routeIs('user.contact.index') ? 'active' : '' }}">Contactos</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        @auth
                            <a class="nav-item nav-link">
                                <form action="{{ route('admin.logout') }}" method="POST">
                                    @csrf
                                    <input type="submit" class="btn btn-danger" value="Salir">
                                </form>
                            </a>
                        @endauth

                        @guest
                            <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                            <a href="{{ route('login') }}" class="nav-item nav-link">Registrarme</a>
                        @endguest

                    </div>
                </div>
            </nav>
            {{-- fotos carousel --}}
            @if (Request::is('/'))
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 410px;">
                            <img class="img-fluid" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Variedad de Estilos
                                    </h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Vestido Moderno y
                                        Elegante</h3>
                                    <a href="{{ route('user.shop.index') }}" class="btn btn-light py-2 px-3">Ver
                                        Productos</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="{{ asset('assets/img/carousel-2.jpg') }}" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Pensando en ti</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Precio Razonable</h3>
                                    <a href="{{ route('user.shop.index') }}" class="btn btn-light py-2 px-3">Ver
                                        Productos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
