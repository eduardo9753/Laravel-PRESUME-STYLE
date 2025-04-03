@extends('layouts.app')


@section('body')

    <body class="body_login">

        <div class="container_login">

            <div class="image-section">
                <div class="home-container center-div">
                    <a class="btn btn-primary text-white" href="{{ route('user.home.index') }}">Pagina Principal</a>
                </div>
            </div>

            <div class="login-section">
                <div class="login-container center-div">
                    <div>
                        <h2 class="text-white text-center">Iniciar Sesión</h2>
                        <a class="gmail-login" href="{{ route('google.auth.redirect') }}"><i class="fab fa-google"></i>
                            Ingresar con Gmail</a>
                    </div>
                </div>
            </div>
        </div>


    </body>
@endsection
