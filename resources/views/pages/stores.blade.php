@extends('pages/page-single')
@section('scripts')
    @parent
        <script type="text/javascript" src="{{ URL::asset('javascripts/jquery.flexslider.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('owl-carousel/owl.carousel.js') }}"></script>
        <script>
            $(window).load(function(){
                $('#bannershome').flexslider({
                    animation: "slide",
                    slideshow: true,
                    directionNav: true,
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <link href="{{URL::asset('javascripts/shadowbox-3.0.3/shadowbox.css')}}" rel="stylesheet" type="text/css" />  
        <script type="text/javascript" src="{{URL::asset('javascripts/shadowbox-3.0.3/shadowbox.js')}}"></script>  
        <script type="text/javascript"> Shadowbox.init({ language: "es", players: ['img', 'html', 'iframe', 'qt', 'wmp', 'swf', 'flv'] }); </script>
@endsection
@section('content')
<div id="main">
    @if ($slides)
        @if (count($slides->images))
        <!-- Inicio Slides -->
        <div id="bannershome" class="flexslider">
            <ul class="slides">
                @foreach ($slides->images_curated as $slide)
                    <li><img src="/imagecache/original/{{ $slide->src }}" /></li>
                @endforeach
            </ul>
        </div>
        <!-- Fin Slides -->
        @endif
    @endif
    
    
    <!-- Inicio Team -->
    <div class="stores">
        <div class="content">
            @if (isset($stores))
                @foreach ($stores as $store)
                    <div class="rider">
                        <div class="columna-small">
                            <div class="columna-content">
                                <div class="rider-info">
                                    <h3 class="light grey">{{$store->subtitle}}</h3>
                                    <h2 class="bold color">{{$store->title}}</h2>
                                    {!! $store->description !!}
                                </div>
                            </div>
                        </div>
                        <div class="columna-big">
                            <div class="columna-content">
                                @if ($store->images)
                                    @foreach ($store->images_curated as $image)
                                        <div class="rider-pic">
                                            <div class="rider-pic-content">
                                                <div class=" rider-pic-bg view view-first" style="background-image:url(/imagecache/medium/{{ $image->src }})">
                                                    <a href="#"><img src="/images/marco3x2.png"/></a>    
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
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <!-- Fin Team -->
            
    <!-- Inicio Mapa -->      
    <iframe src="https://www.google.com/maps/d/embed?mid=zgjTv9AqtRl4.k-bFB059Es6c" width="100%" height="400"></iframe>
    <!-- Fin Mapa -->
</div>
@endsection