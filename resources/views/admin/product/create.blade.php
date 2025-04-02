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

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="lead text-center text-primary">INFORMACIÓN DEL CURSO</h2>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route' => 'admin.product.store']) !!}

                            @include('admin.product.partials.form')

                            <div class="mt-2">
                                {!! Form::submit('Crear Producto', ['class' => 'btn btn-primary text-white mt-3']) !!}
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
