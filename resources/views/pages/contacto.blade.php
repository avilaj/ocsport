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
            <div class="columna-small">
                <div class="columna-content">
                    <!-- Inicio Info -->
                    <div class="rider-info">
                        <h3 class="light grey">CONTACTO</h3>
                        <h2 class="bold color">OC SPORT</h2>
                        <p>Para comunicarse con nosotros puede hacerlo por medio del siguiente formulario o bien de la siguiente manera:<br>
                            Tel: +54 11-4554-8658 / +54 11-4554-8650 <br>
                            E-mail: <a href="mailto:ventas@ocsport.com.ar">ventas@ocsport.com.ar</a></p>
                        </div>
                        <!-- Fin Info -->
                    </div>
                </div>
                <!-- Fin Columna Small -->

                <!-- Inicio Columna Big -->
                <div class="columna-big">
                    <div class="columna-content">
                        <div class="garantia-tit">
                            <h3 class="light grey">ENVIANOS TU MENSAJE</h3>
                            <div class="separador-rider"></div>
                        </div>

                        <div class="about-col left">
                            <div class="left">

                                <div class="formulario-contacto">
                                    <form action="/contacto" method="post" name="contact" id="contact">      
                                        <input class="form" id="nombre" type="text" name="nombre" placeholder="Nombre" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Nombre'" required="" value="{{ isset($nombre) ? $nombre : '' }}">
                                        <input class="form" id="email" type="email" name="email" placeholder="E-mail" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'E-mail'" required="" value="{{ isset($email) ? $email : ''  }}">
                                        <input class="form" id="telefono" type="text" name="telefono" placeholder="Tel&eacute;fono" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Tel&eacute;fono'" required="" value="{{ isset($telefono) ? $telefono : ''  }}">
                                        <input class="form" id="asunto" type="text" name="asunto" placeholder="Asunto" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Asunto'" required="" value="{{ isset($asunto) ? $asunto : ''  }}">
                                    </div>

                                </div>
                            </div>

                            <div class="about-col right">
                                <div class="right">

                                    <div class="formulario-contacto">
                                        <textarea class="form" id="mensaje" style="height:137px;" type="text" name="mensaje" placeholder="Mensaje"  onfocus="this.placeholder = ''" onBlur="this.placeholder = 'Mensaje'" required="" value="{{ isset($mensaje) ? $mensaje : ''  }}"></textarea>
                                        <input class="boton-form-contacto" id="enviar" type="submit" name="submit" value="ENVIAR">  
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                    </form>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <!-- Fin Columna Big -->


            </div>
        </div>
        <!-- Fin Team -->

    </div>
    @endsection