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

                <div class="col-md-4">
                    {{-- LLAMADA DEL COMPONENTE ASIDE --}}
                    @component('components.admin.product.aside-product')
                        {{-- Puedes pasar datos al componente si es necesario --}}
                        @slot('product', $product)
                    @endcomponent
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="lead text-center text-primary">INFORMACIÓN DEL CURSO</h2>
                        </div>
                        <div class="card-body">
                            {!! Form::model($product, [
                                'route' => ['admin.update.edit', $product],
                                'method' => 'put',
                                'files' => true,
                            ]) !!}

                            @include('admin.product.partials.form')

                            <div class="mt-2">
                                {!! Form::submit('Actualizar Producto', ['class' => 'btn btn-primary text-white mt-3']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Cart End -->

        <script src="{{ asset('js/admin/product/ckEditorProduct.js') }}"></script>

        <!-- Footer Start -->
        @include('template.user.footer')
        <!-- Footer End -->



    </body>
@endsection
