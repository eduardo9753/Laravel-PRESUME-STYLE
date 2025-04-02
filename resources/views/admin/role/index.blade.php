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
                    <a href="{{ route('admin.permissions.create') }}" class="btn btn-primary text-white mb-2">Nuevo Permiso</a>
                    <table class="table table-bordered text-center mb-0" id="datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>PERMISOS</th>
                                <th>ELIMINAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>

                                    <td>
                                        <a class="btn btn-primary text-white"
                                            href="{{ route('admin.roles.edit', ['role' => $role]) }}">Editar
                                        </a>
                                    </td>

                                    <td>
                                        <form action="{{ route('admin.roles.destroy', ['role' => $role]) }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-dark">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>Sin Roles por ahora</td>
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
