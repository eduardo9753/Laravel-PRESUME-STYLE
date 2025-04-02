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
                    {!! Form::model($role, ['route' => ['admin.permissions.update', $role], 'method' => 'put']) !!}

                    @include('admin.role.partials.form')

                    {!! Form::submit('Actualizar Permisos', ['class' => 'btn btn-primary text-white mt-2']) !!}

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
