<div class="container-fluid mb-1">
    <div class="row border-top px-xl-5">

        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="{{ route('admin.product.index') }}" class="text-decoration-none d-block d-lg-none">
                    <h1 class="font-weight-bold ">Presume<span
                            class="text-primary m-0 display-5 font-weight-semi-bold">Style</span></h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route('admin.product.index') }}"
                            class="nav-item nav-link {{ request()->routeIs('admin.product.index') ? 'active' : '' }}">Productos</a>
                        <a href="{{ route('admin.category.index') }}"
                            class="nav-item nav-link {{ request()->routeIs('admin.category.index') ? 'active' : '' }}">Categorias</a>
                        <a href="{{ route('admin.brand.index') }}"
                            class="nav-item nav-link {{ request()->routeIs('admin.brand.index') ? 'active' : '' }}">Marcas</a>
                        <a href="{{ route('admin.roles.index') }}"
                            class="nav-item nav-link {{ request()->routeIs('admin.roles.index') ? 'active' : '' }}">Roles</a>
                        <a href="{{ route('admin.user.index') }}"
                            class="nav-item nav-link {{ request()->routeIs('admin.user.index') ? 'active' : '' }}">Usuarios</a>
                        <a href="{{ route('admin.size.index') }}"
                            class="nav-item nav-link {{ request()->routeIs('admin.size.index') ? 'active' : '' }}">Tallas</a>
                        <a href="{{ route('admin.box.index') }}"
                            class="nav-item nav-link {{ request()->routeIs('admin.box.index') ? 'active' : '' }}">Caja</a>

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

                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
