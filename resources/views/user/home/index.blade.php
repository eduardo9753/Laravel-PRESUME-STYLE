@extends('layouts.app')


@section('body')

    <body>
        <!-- Topbar Start -->
        @include('template.user.topbar')
        <!-- Topbar End -->


        <!-- Navbar Start -->
        @include('template.user.navbar')
        <!-- Navbar End -->


        <!-- Featured Start -->
        <div class="container-fluid pt-5">
            <div class="row px-xl-5 pb-3">
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                        <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">Producto de Calidad</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                        <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                        <h5 class="font-weight-semi-bold m-0">Envíos a domicilio</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                        <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">Devolución en 14 días</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                        <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">Soporte 24/7</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured End -->


        <!-- Categories Start -->
        <div class="container-fluid pt-5">
            <div class="row px-xl-5 pb-3">
                @foreach ($categories as $category)
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                            <p class="text-right">15 Products</p>
                            <a href="" class="cat-img position-relative overflow-hidden mb-3">
                                <img class="img-fluid" src="{{ asset('assets/img/cat-1.jpg') }}" alt="">
                            </a>
                            <h5 class="font-weight-semi-bold m-0"> {{ $category->name }} </h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Categories End -->


        <!-- Offer Start -->
        <div class="container-fluid offer pt-5">
            <div class="row px-xl-5">
                <div class="col-md-6 pb-4">
                    <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                        <img src="{{ asset('assets/img/offer-1.png') }}" alt="">
                        <div class="position-relative" style="z-index: 1;">
                            <h5 class="text-uppercase text-primary mb-3">Prendas de Alta Calidad</h5>
                            <h1 class="mb-4 font-weight-semi-bold">Look Asegurado</h1>
                            <a href="{{ route('user.shop.index') }}" class="btn btn-outline-primary py-md-2 px-md-3">Ver
                                Productos</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pb-4">
                    <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                        <img src="{{ asset('assets/img/offer-2.png') }}" alt="">
                        <div class="position-relative" style="z-index: 1;">
                            <h5 class="text-uppercase text-primary mb-3">Ropa a tu Medida</h5>
                            <h1 class="mb-4 font-weight-semi-bold">Para Toda Ocasión</h1>
                            <a href="{{ route('user.shop.index') }}" class="btn btn-outline-primary py-md-2 px-md-3">Ver
                                Productos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Offer End -->


        <!-- Products Start -->
        <div class="container-fluid pt-5">
            <div class="text-center mb-4">
                <h2 class="section-title px-5"><span class="px-2">
                        Productos de moda</span></h2>
            </div>
            <div class="row px-xl-5 pb-3">
                {{-- Componente de la lista de productos --}}
                <x-user.product.product-list :products="$products" />
                {{-- Componente de la lista de productos --}}
            </div>
        </div>
        <!-- Products End -->


        <!-- Subscribe Start -->
        <div class="container-fluid bg-secondary my-5">
            <div class="row justify-content-md-center py-5 px-xl-5">
                <div class="col-md-6 col-12 py-5">
                    <div class="text-center mb-2 pb-2">
                        <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Más Información</span></h2>
                        <p>Moda femenina con estilo 💃 Encuentra los mejores pantalones, jeans, blusas y polos para cada
                            ocasión. ✨ ¡Presume tu look con las últimas tendencias y siéntete increíble!</p>
                    </div>
                    <form action="{{ route('user.contact.index') }}" method="GET">
                        <div class="text-center">
                            <div class="">
                                <button class="btn btn-primary text-white px-4">Nuestra Marca</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->


        <!-- Products Start -->
        <div class="container-fluid pt-5">
            <div class="text-center mb-4">
                <h2 class="section-title px-5"><span class="px-2">Recién llegado</span></h2>
            </div>
            <div class="row px-xl-5 pb-3">
                {{-- Componente de la lista de productos --}}
                <x-user.product.product-list :products="$products" />
                {{-- Componente de la lista de productos --}}
            </div>
        </div>
        <!-- Products End -->


        <!-- Vendor Start -->
        <div class="container-fluid py-5">
            <div class="row px-xl-5">
                <div class="col">
                    <div class="owl-carousel vendor-carousel">
                        <div class="vendor-item border p-4">
                            <img src="{{ asset('assets/img/vendor-1.jpg') }}" alt="">
                        </div>
                        <div class="vendor-item border p-4">
                            <img src="{{ asset('assets/img/vendor-2.jpg') }}" alt="">
                        </div>
                        <div class="vendor-item border p-4">
                            <img src="{{ asset('assets/img/vendor-3.jpg') }}" alt="">
                        </div>
                        <div class="vendor-item border p-4">
                            <img src="{{ asset('assets/img/vendor-4.jpg') }}" alt="">
                        </div>
                        <div class="vendor-item border p-4">
                            <img src="{{ asset('assets/img/vendor-5.jpg') }}" alt="">
                        </div>
                        <div class="vendor-item border p-4">
                            <img src="{{ asset('assets/img/vendor-6.jpg') }}" alt="">
                        </div>
                        <div class="vendor-item border p-4">
                            <img src="{{ asset('assets/img/vendor-7.jpg') }}" alt="">
                        </div>
                        <div class="vendor-item border p-4">
                            <img src="{{ asset('assets/img/vendor-8.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vendor End -->


        <!-- Footer Start -->
        @include('template.user.footer')
        <!-- Footer End -->



    </body>
@endsection
