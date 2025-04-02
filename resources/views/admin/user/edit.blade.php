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
                            <h2 class="lead text-center text-primary">ACTUALIZAR ROL</h2>
                        </div>
                        <div class="card-body">
                            {!! Form::model($user, ['route' => ['admin.user.update', $user], 'method' => 'put']) !!}

                            {!! Form::label('text', 'Usuario escogido', ['class' => 'control-label mb-2']) !!}
                            {!! Form::text('nombre', $user->name, ['class' => 'form-control mb-4', 'placeholder' => 'Nombre del usuario']) !!}

                            @foreach ($roles as $role)
                                <div>
                                    <label class="d-flex">
                                        {!! Form::radio('role', $role->id, $user->hasRole($role->id), ['class' => 'mr-1']) !!}
                                        {{ $role->name }}
                                    </label>
                                </div>
                            @endforeach

                            {!! Form::submit('Asignar Rol al usuario', ['class' => 'btn btn-primary text-white mt-4 btn-rounded']) !!}

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
