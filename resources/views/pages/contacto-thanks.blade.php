@extends('pages/page-single')
@section('content')
<div id="main">
    <div id="top-banner">
        @if(isset($configuration->contact_banner))
            <img src="/imagecache/original/{{$configuration->image('contact_banner')}}" />
        @endif
    </div>
    <!-- Inicio Team -->
    <div class="about">
        <div class="content">
            <!-- Inicio Columna Small -->
            <h1>Gracias {{isset($nombre) ? $nombre : ' por comunicarte'}}!</h1>
            <p>Hemos recibido tu mensaje y pronto te vamos a responder!</p>
        </div>
        <!-- Fin Team -->

    </div>
    @endsection