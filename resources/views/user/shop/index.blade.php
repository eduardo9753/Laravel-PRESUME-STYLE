@extends('layouts.app')


@section('body')

    <body>
        <!-- Topbar Start -->
        @include('template.user.topbar')
        <!-- Topbar End -->


        <!-- Navbar Start -->
        @include('template.user.navbar')
        <!-- Navbar End -->


        <!-- Page Header Start -->
        <div class="container-fluid bg-secondary mb-5">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
                <h1 class="font-weight-semi-bold text-uppercase mb-3">Nuestro Productos</h1>
                <div class="d-inline-flex">
                    <p class="m-0"><a href="{{ route('user.home.index') }}">Home</a></p>
                    <p class="m-0 px-2">-</p>
                    <p class="m-0">Productos</p>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Shop Start -->
        <div class="container-fluid pt-5">
            <div class="row px-xl-5">
                <!-- Shop Sidebar Start -->
                <div class="col-lg-3 col-md-12">

                    <!-- Category Start -->
                    <div class="border-bottom mb-4 pb-4">
                        <h5 class="font-weight-semi-bold mb-4">Filtrar por Categorias</h5>
                        <form>
                            @foreach ($categories as $category)
                                <div
                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                    <input type="checkbox" class="custom-control-input" id="color-{{ $category->id }}">
                                    <label class="custom-control-label"
                                        for="color-{{ $category->id }}">{{ $category->name }}</label>
                                </div>
                            @endforeach
                        </form>
                    </div>
                    <!-- Category End -->

                </div>
                <!-- Shop Sidebar End -->


                <!-- Shop Product Start -->
                <div class="col-lg-9 col-md-12">
                    <div class="row pb-3">
                        <div class="col-12 pb-1">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <form action="">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Buscar por nombre">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-transparent text-primary">
                                                <i class="fa fa-search"></i>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                                <div class="dropdown ml-4">
                                    <button class="btn border dropdown-toggle" type="button" id="triggerId"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sort by
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                        <a class="dropdown-item" href="#">Latest</a>
                                        <a class="dropdown-item" href="#">Popularity</a>
                                        <a class="dropdown-item" href="#">Best Rating</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- Componente de la lista de productos --}}
                        <x-user.product.product-list :products="$products" />
                        {{-- Componente de la lista de productos --}}
                        
                    </div>
                </div>
                <!-- Shop Product End -->
            </div>
        </div>
        <!-- Shop End -->

        <!-- Footer Start -->
        @include('template.user.footer')
        <!-- Footer End -->



    </body>
@endsection
