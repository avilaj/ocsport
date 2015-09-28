@extends('pages/page-single')
@section('content')
<div id="main">
    <div id="top-banner">
        @if(isset($configuration->subscription_banner))
            <img src="/imagecache/original/{{$configuration->image('subscription_banner')}}" />
        @endif
    </div>
    <!-- Inicio Team -->
    <div class="about">
        <div class="content">
            <!-- Inicio Columna Small -->
            <h1>Gracias {{isset($name) ? $name : ''}} por suscribirte a nuestro newsletter!</h1>
            <p>Cada tanto te enviaremos las mejores promos y noticias!</p>
        </div>
        <!-- Fin Team -->

    </div>
    @endsection