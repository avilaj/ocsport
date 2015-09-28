@extends('layout')
@section('scripts')
	@parent
        <!-- Shadowbox -->
        <link href="{{ URL::asset('javascripts/shadowbox-3.0.3/shadowbox.css') }}" rel="stylesheet" type="text/css" />  
        <script type="text/javascript" src="{{ URL::asset('javascripts/shadowbox-3.0.3/shadowbox.js') }}"></script>  
        <script type="text/javascript"> Shadowbox.init({ language: "es", players: ['img', 'html', 'iframe', 'qt', 'wmp', 'swf', 'flv'] }); </script>
@endsection
@section('content')
  		<div id="main">
        
            <!-- Inicio Banner -->
            <div id="top-banner">
                @if(isset($configuration->team_banner))
                    <img src="/imagecache/original/{{$configuration->image('team_banner')}}" />
                @endif
            </div>
            <!-- Fin Banner -->
            
            <!-- Inicio Team -->
            <div class="team">
            <div class="content">
                @foreach($team as $rider)
                <!-- Inicio Rider -->
            	<div class="rider">
                    
                    <!-- Inicio Columna Small -->
                    <div class="columna-small">
                    <div class="columna-content">
                    
                    	<!-- Inicio Info -->
                        <div class="rider-info">
                            <h3 class="light grey">{{ $rider->activity }}</h3>
                            <h2 class="bold color">{{ $rider->name }}</h2>
                            <p class="biography">
                            	{{ $rider->bio }}
                            </p>
                            @if(! empty($rider->facebook))
                            	<a href="{{ $rider->facebook }}" target="_blank" class="botones-small boton-line"><img src="/images/ico-facebook02.png"/></a>
                            @endif
                            @if(! empty($rider->twitter))
                            	<a href="{{ $rider->twitter }}" target="_blank" class="botones-small boton-line"><img src="/images/ico-twitter02.png"/></a>
                            @endif
                            @if(! empty($rider->instagram))
                            	<a href="{{ $rider->instagram }}" target="_blank" class="botones-small boton-line"><img src="/images/ico-instagram02.png"/></a>
                            @endif
                        </div>
                        <!-- Fin Info -->
                    
                    </div>
                    </div>
                    <!-- Fin Columna Small -->
                    
                    <!-- Inicio Columna Big -->
                    <div class="columna-big">
                    <div class="columna-content">
                    
                    	<!-- Inicio Foto -->
						@if ($rider->gallery)
                    	@foreach($rider->gallery->imagesCurated as $image)
	                        <div class="rider-pic">
		                        <div class="rider-pic-content">
		                            <div class=" rider-pic-bg view view-first" style="background-image:url(/imagecache/medium/{{ $image->src }})">
		                                <a href="#"><img src="images/marco3x2.png"/></a>	
		                                <div class="mask">
		                                    <div class="mask-content">
		                                    <a href="/imagecache/original/{{ $image->src }}" rel="shadowbox[galeria01]" title="" class="mask-icon"></a>
		                                    </div>
		                                </div>
		                            </div>
		                        
		                        </div>
	                        </div>
                        @endforeach
						@endif
                        <!-- Fin Foto -->
                    </div>
                    </div>
                    <!-- Fin Columna Big -->
                </div>
                <!-- Fin Rider -->
				<div class="separador-rider"></div>
            	@endforeach
            </div>
            </div>
            <!-- Fin Team -->
            
        </div>
@endsection