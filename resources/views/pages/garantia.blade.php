@extends('pages/page-single')
@section('content')
<div id="main">
    <div id="top-banner">
        @if(isset($configuration->warranty_banner))
            <img src="/imagecache/original/{{$configuration->image('warranty_banner')}}" />
        @endif
    </div>
    <div class="garantia">
        <div class="content">
                <!-- Inicio Columna Small -->
                <div class="columna-small">
                <div class="columna-content">
                    <!-- Inicio Info -->
                    <div class="rider-info">
                        <h3 class="light grey">ORIGINAL OC</h3>
                        <h2 class="bold color">WARRANTY</h2>
                        <p>Nuestra empresa garantiza sus productos contra posibles defectos de material y fabricación sin caducidad temporal. A continuación pueden encontrar la información necesaria para guiarse y distinguir si el daño de su producto es una reparación con cobro ó aplica la cobertura de su garantía.</p>
                        <img src="/uploads/about01.jpg"/>
                    </div>
                    <!-- Fin Info -->
                
                </div>
                </div>
                <!-- Fin Columna Small -->
                
                <!-- Inicio Columna Big -->
                <div class="columna-big">
                <div class="columna-content">
                        
                        <div class="garantia-tit">
                        <h3 class="light grey">GARANTIA DE POR VIDA</h3>
                        <div class="separador-rider"></div>
                        </div>
                        
                        <div class="garantia-info">
                        <h2 class="bold color">1.</h2>
                        <p>Nuestra empresa garantiza sus productos contra posibles defectos de material y fabricación sin caducidad temporal. A continuación pueden encontrar la información necesaria para guiarse y distinguir si el daño de su producto es una reparación con cobro ó aplica la cobertura de su garantía.</p>
                        </div>
                        
                        <div class="garantia-info">
                        <h2 class="bold color">2.</h2>
                        <p>El mantenimiento o reparación en su producto puede llevarse acabo por cualquier compañía siempre y cuando no se haga uso de la garantía, sin embargo OCSPORT exige al consumidor que utilice únicamente Centros Autorizado de Servicio OCSPORT para que se pueda cubrir su garantía.</p>
                        </div>
                        
                        <div class="garantia-info">
                        <h2 class="bold color">3.</h2>
                        <p>Mantenimientos o reparaciones impropios o incorrectos realizados por terceros invalidan la garantía. Para asesorarse acerca de los pasos a seguir en casos de reparaciones o ejercicios de la garantía debe contactarse con nosotros por medio del formulario de contacto.</p>
                        </div>
                        
                        <div class="garantia-info">
                        <h2 class="bold color">4.</h2>
                        <p>En el caso de que el producto debiera ser reemplazado y no este disponible en existencia, OCSPORT tiene el compromiso de substituirlo por un producto similar.</p>
                        </div>
                        
                        <div class="garantia-info">
                        <h2 class="bold color">5.</h2>
                        <p>Daños secundarios y subsecuentes a la reparación son expresamente rechazados y no son cubiertos por la garantía. La garantía expresa aquí esta limitada al valor del producto. Especificaciones de fabricación están sujetas a cambio sin previo aviso.</p>
                        </div>
                        
                        <div class="garantia-info">
                        <h2 class="bold color">6.</h2>
                        <p>Las cerraduras están pensadas solo para prevenir aperturas accidentales y no necesariamente previenen el robo del producto o su contenido, tampoco roturas o daños causados por la aerolínea o personal del aeropuerto o autoridades gubernamentales.</p>
                        </div>

                </div>
                </div>
                <!-- Fin Columna Big -->
        </div>
    </div>
</div>
@endsection