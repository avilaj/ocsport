@extends('layout')
@section('scripts')
@parent
       
        <!-- Owl Carousel Assets
        ================================================== -->
		<script type="text/javascript" src="{{ URL::asset('owl-carousel/owl.carousel.js') }}"></script>
        <script>
        	$(document).ready(function() {
        		$("#owl-demo").owlCarousel({
        			autoPlay : false,
        			navigation : true,
        			navigationText : false,
        			pagination : false,
        			slideSpeed : 300,
        			paginationSpeed : 400,
        			singleItem : true,
        			autoHeight : true,
        			transitionStyle:"fade",
      			});
        	});
        </script>
        <!-- AddThis -->          
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e7a99890df6b9b0" async="async"></script>
@endsection
@section('content')
<div id="main">

	<!-- Inicio News-Detail -->
	<div id="news-detail">
		<div class="content">

			<!-- Inicio Columna Mid -->
			<div class="columna-mid">
				<div class="columna-content">

					<!-- Inicio Slide -->
					<div id="owl-demo" class="owl-carousel">
					@if ($post->gallery)
						@foreach($post->gallery->videos as $video)
							<div class="item">
								{!! $video !!}
							</div>
						@endforeach
						@foreach($post->gallery->images_curated as $image)
							<div class="item">
								<img src="/imagecache/medium/{{$image->src}}">
							</div>
						@endforeach
					@endif

					</div>
					<!-- Fin Slide -->

				</div>
			</div>
			<!-- Fin Columna Mid -->

			<!-- Inicio Columna Mid -->
			<div class="columna-mid">
				<div class="columna-content">

					<!-- AddThis Button BEGIN -->
					<div id="compartir-news" class="addthis_sharing_toolbox">
					</div>
					<!-- AddThis Button END -->

					<h2 class="color">{{ $post->title }}</h2>
					<p class="grey">{{ $post->date }}</p>
					<div class="info"> {!! $post->text !!} </div>

							<!-- Inicio Paginación -->
							<ul class="pagination" id="news-back">
								<li><a href="javascript:history.back(1)">VOLVER</a></li>
							</ul>
							<!-- Fin Paginación -->

						</div>
					</div>
					<!-- Fin Columna Mid -->

				</div>
			</div>
			<!-- Fin News-Detail -->


		</div>
		@endsection