@extends('layouts.app')


@section('body')

    <body>
        <!-- Topbar Start -->
        @include('template.user.topbar')
        <!-- Topbar End -->


        <!-- Navbar Start -->
        @include('template.admin.navbar')
        <!-- Navbar End -->


        <!-- componente livewire marca -->
        @livewire('admin.category.categories')
        <!-- componente livewire brand -->


        <!-- Footer Start -->
        @include('template.user.footer')
        <!-- Footer End -->



    </body>
@endsection
