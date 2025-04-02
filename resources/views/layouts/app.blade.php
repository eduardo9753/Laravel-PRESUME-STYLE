<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Presume Style</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="moda , jeans para mujeres , blusas" name="keywords">
    <meta content="Moda femenina con estilo 💃 Pantalones, jeans, blusas y polos ✨¡Presume tu look!" name="description">

    <!--CDN CKEDITOR-->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>


    <!-- Favicon -->
    <link href="{{ asset('assets/img/Logo_Verito.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- CSS LOGIN-->
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">

    <!-- ESTILOS LIVEWIRE -->
    @livewireStyles
</head>

{{-- cuerpo --}}
<main>
    @yield('body')
    <!-- SCRIPT LIVEWIRE -->
    @livewireScripts
</main>

<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Contact Javascript File -->
<script src="{{ asset('assets/mail/jqBootstrapValidation.min.js') }}"></script>
<script src="{{ asset('assets/mail/contact.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets/js/main.js') }}"></script>



</html>
