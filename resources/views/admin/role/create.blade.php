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
                    {!! Form::open(['route' => 'admin.permissions.store']) !!}

                    @include('admin.role.partials.form')

                    {!! Form::submit('Crear Permisos', ['class' => 'btn btn-primary mt-2 text-white']) !!}

                    {!! Form::close() !!}
                </div>

            </div>
        </div>
        <!-- Cart End -->

        <!-- Footer Start -->
        @include('template.user.footer')
        <!-- Footer End -->



    </body>
@endsection
