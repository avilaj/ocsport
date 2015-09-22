@extends('layout')
@section('content')
<div id="main">

	<!-- Inicio Latest-news -->
	<div id="latest-news">
		<div class="content">

			<!-- Inicio Contenedor News Destacadas-->
			<div class="contenedor-news">
				<div class="table">
					<div class="row">
					@if ($destacadas)
						@foreach ($destacadas as $destacada)
							<!-- Inicio News Destacada-->
							<div class="cell" id="news01-pic" style="background-image:url(/imagecache/medium/{{ $destacada->thumbnailCleaned }})">
							</div>

							<div class="cell"  id="news01-info">
								<div class="news-picmobile" style="background-image:url(/imagecache/medium/{{ $destacada->thumbnailCleaned }})">
									<img src="images/marco3x2.png" alt="" />
								</div>
								<div class="news-content">
									<h5 class="white">LATEST NEWS</h5>
									<h3 class="white">{{ $destacada->title }}</h3>
									<p class="color-dark">{{ $destacada->date }}</p>
									<p class="black">{{ $destacada->short_text }}</p>
									<a href="{{ $destacada->url }}" class="botones boton-blanco">VER MAS</a>
								</div>
							</div>
						@endforeach
					@endif
					</div>
				</div>
				{!! $news->render() !!}
			</div>
			<!-- Fin Contenedor News Destacada-->

		</div>
	</div>
	<!-- Fin Latest-news -->

	<!-- Inicio News List -->
	<div id="news">
		<div class="content">

			<!-- Inicio Contenedor News-->
			<div class="news-table">
				@if ($news)
					@foreach ($news as $post)
						<!-- Inicio News -->
						<div class="news-cell">
							<div class="news-cell-content">

								<div class="news-pic" style="background-image:url(/imagecache/small/{{ $post->thumbnailCleaned }})">
									<a href="{{ $post->url }}"><img src="images/marco3x2.png" alt="" /></a>
								</div>

								<div class="news-info">
									<h3 class="color">{{ $post->title }}</h3>
									<p class="grey">{{ $post->date }}</p>
									<p>{{ $post->short_text }}</p>
									<a href="{{ $post->url }}" class="botones boton-color">VER MAS</a>
								</div>
							</div>
						</div>
						<!-- Fin News -->
					@endforeach
				@endif
			</div>
			<!-- Fin Contenedor News-->


		</div>
	</div>
	<!-- Fin News List -->

</div>
@endsection