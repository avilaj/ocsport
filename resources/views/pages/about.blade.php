@extends('pages/page-single')
@section('content')
<div id="main">
    <div id="top-banner">
        @if(isset($configuration->about_banner))
            <img src="/imagecache/original/{{$configuration->image('about_banner')}}" />
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
                    <h3 class="light grey">ABOUT</h3>
                    <h2 class="bold color">OC SPORT</h2>
                    <p>OC Sport tiene el placer de compartir su línea de productos con el público argentino desde el año 2006 apostando permanente a la calidad y diseño.</p>
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
                    <h3 class="light grey">A WAY OF LIFE</h3>
                    <div class="separador-rider"></div>
                </div>
                
                <div class="about-col left">
                <div class="left">
                    <p>Fundada en Orange County, California, OCSport refleja en sus colecciones la vanguardia de la moda de la costa oeste, gestada en la inmensidad de las playas del pacífico.</p>
                    <p>OCSport desarrolla productos para el transporte de los objetos que forman parte de tu vida cotidiana; para complementar tu manera de vestir, tu estilo; y para acompañarte en tus deportes a lo largo de todas las etapas de tu vida con la mayor eficiencia, comodidad y elegancia.</p>
                    <p>OCSport se compromete permanentemente con el desarrollo de deportes como el skateboarding, BMX y surf.</p>

                </div>
                </div>
                
                <div class="about-col right">
                <div class="right">
                    <a href="/productos"><img src="/uploads/about02.jpg"/></a>
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