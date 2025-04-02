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
                    <table class="table table-bordered text-center mb-0" id="datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>EMAIL</th>
                                <th>ROL</th>
                                <th>DAR ROL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <span class="badge border border-light">
                                            @forelse ($user->getRoleNames() as $role)
                                                <p class="text-primary">{{ $role }}</p>
                                            @empty
                                                <p class="text-success">usuario sin rol</p>
                                            @endforelse
                                        </span>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-warning btn-rounded"
                                            href="{{ route('admin.user.edit', ['user' => $user]) }}">Asignar
                                            Rol</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>Sin Usuarios por ahora</td>
                                </tr>
                            @endforelse
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
