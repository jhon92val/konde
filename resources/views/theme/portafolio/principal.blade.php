@extends("theme.portafolio.layout")
@section("titulo")
Jesús Konde
@endsection

@section('contenido')
    @include('theme/portafolio/slider')
    @include('theme/portafolio/perfil')
    @include('theme/portafolio/counters')
    @include('theme/portafolio/servicios')
    @include('theme/portafolio/estudios')
    @include('theme/portafolio/portafolio')
    @include('theme/portafolio/clientes')
    @include('theme/portafolio/post')
    @include('theme/portafolio/contacto')
    @include('theme/portafolio/mapa')
@endsection