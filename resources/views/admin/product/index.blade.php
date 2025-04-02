@extends('layouts.app')


@section('body')

    <body>
        <!-- Topbar Start -->
        @include('template.user.topbar')
        <!-- Topbar End -->


        <!-- Navbar Start -->
        @include('template.admin.navbar')
        <!-- Navbar End -->


        <!-- Cart Start -->
        <div class="container-fluid">
            <div class="row px-xl-5">
                <div class="col-lg-12 table-responsive mb-5">
                    <a href="{{ route('admin.product.create') }}" class="btn btn-primary text-white mb-2">Nuevo Producto</a>
                    <table class="table table-bordered text-center mb-0">
                        <thead class="bg-secondary text-dark">
                            <tr>
                                <th>Producto</th>
                                <th>Precio de Compra</th>
                                <th>Precio de Venta</th>
                                <th>Cantidad</th>
                                <th>Remover</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            @foreach ($products as $product)
                                <tr>
                                    <td class="align-middle"><img src="{{ asset('assets/img/product-1.jpg') }}" alt=""
                                            style="width: 50px;">
                                        {{ $product->name }}</td>
                                    <td class="align-middle">{{ $product->purchase_price }}</td>
                                    <td class="align-middle">{{ $product->sale_price }}</td>
                                    <td class="align-middle">{{ $product->purchase_price }}</td>
                                    <td class="align-middle"><button class="btn btn-sm btn-primary"><i
                                                class="fa fa-times"></i></button></td>
                                    <td class="align-middle"><a class="btn btn-sm btn-dark"
                                            href="{{ route('admin.product.edit', ['product' => $product]) }}">Editar</a></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- Cart End -->

        <!-- Footer Start -->
        @include('template.user.footer')
        <!-- Footer End -->



    </body>
@endsection
