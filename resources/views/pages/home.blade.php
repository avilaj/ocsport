@extends('layout')
@section('scripts')
	@parent
	<script type="text/javascript" src="{{URL::asset('javascripts/jquery.flexslider.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('owl-carousel/owl.carousel.js')}}"></script>
	<style>
		#owl-demo .item{ background: #ffffff; padding: 0px 20px; margin-right: 1px; text-align: center;}
		.owl-carousel .owl-wrapper-outer { background-color: #cccccc; box-shadow: 0px 0 0 2px #ffffff inset;}
	</style>

	<script type="text/javascript">
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
		$(document).ready(function() {
			var owl = $("#owl-demo");
			owl.owlCarousel({
				navigationText : false,
				itemsCustom : [
				[0, 1],
				[450, 1],
				[600, 1],
				[800, 1],
				[1000, 3],
				[1200, 3],
				[1400, 3],
				[1600, 3]
				],
				navigation : true
			});
		});
	</script>
@endsection
@section('content')
				<!-- Inicio Main
				================================================== -->
				<div id="main">
					
					<!-- Inicio Slides -->
					<div id="bannershome" class="flexslider">
						<ul class="slides">
						@if($home_banner->videos)
							@foreach ($home_banner->videos as $item)
								<li>{{$item}}</li>
							@endforeach
						@endif
						@if($home_banner->images)
							@foreach ($home_banner->imagesCurated as $item)
								@if($item->url)
									<li><a href="{{$item->url}}"><img src="/imagecache/original/{{$item->src}}"></a></li>
								@else
									<li><img src="/imagecache/original/{{$item->src}}"></li>
								@endif
							@endforeach
						@endif
						</ul>
					</div>
					<!-- Fin Slides -->
					
					<!-- Inicio Home-producto -->
					<div id="home-producto">
						<div class="content">
							
							<!-- Inicio Columna Small -->
							<div class="columna-small">
								<div class="columna-content">
									
									<!-- Inicio Temporada -->
									<div id="temporada">
										<h3 class="light grey">{{$home_collection_banner->subtitle}}</h3>
										<h2 class="bold color">{{$home_collection_banner->title}}</h2>
										<p>{{$home_collection_banner->description}}</p>
										<a href="/productos" class="botones boton-gris">VER COLECCION</a>
									</div>
									<!-- Fin Temporada -->
									
								</div>
							</div>
							<!-- Fin Columna Small -->
							
							<!-- Inicio Columna Big -->
							<div class="columna-big">
								<div class="columna-content">
									
									<!-- Inicio Slide productos -->
									<div id="owl-demo" class="owl-carousel">
										@foreach ($products as $product)
										<div class="item">
											<div class="producto-list">
												
												<div class="view view-first">
													<div class="pic" style="background-image:url(/imagecache/medium/{{ $product->thumbnailCurated }})">
														<a href="#"><img src="images/marco1x1.png" alt="" /></a>
													</div>
													<div class="mask">
														<div class="mask-content">
															<a href="{{ $product->url }}" class="mask-icon"></a>
														</div>
													</div>
												</div>
												
												<div class="nombre">
													<h4>{{$product->title}}</h4>
													<p class="grey">{{$product->subtitle}}</p>
												</div>
												@if($product->price)
													<div class="precio">
														<p class="large">$ {{$product->price}}</p>
													</div>
												@endif
												
												<div class="color">
												@foreach ($product->colors as $color)
													<div class="color-info" style="background-color:{{$color->hex}}"> </div>
												@endforeach
												</div>
												
											</div>
										</div>
										@endforeach
									</div>
									<!-- Fin Slide Productos -->
								</div>
							</div>
							<!-- Fin Columna Big -->

						</div>
					</div>
					<!-- Fin Home-producto -->
					
					<!-- Inicio Home-destacados -->
					<div id="home-destacados">
						<div class="content">
							
							<!-- Inicio Columna Small -->
							<div class="columna-33">
								<div class="columna-content">
									
									<div class="pic" style="background-image:url(/imagecache/original/{{$configuration->home_octeam_image}})">
										<a href="/team" class="destacado-hover">
											<img src="/images/marco3x2.png" alt="" />
											<div class="circle">
												<div class="info-team">
													<img src="/images/ico-team.png"/>
													<h3>OC TEAM</h3>
												</div>
											</div>
										</a>
									</div>
									
								</div>
							</div>
							<!-- Fin Columna Small -->
							
							<!-- Inicio Columna Small -->
							<div class="columna-33">
								<div class="columna-content">
									
									<div class="pic" style="background-image:url(/imagecache/original/{{ $configuration->home_ocwarranty_image}})">
										<a href="/garantia" class="destacado-hover">
											<img src="/images/marco3x2.png" alt="" />
											<div class="circle">
												<div class="info-warranty">
													<h4 class="color light">ORIGINAL OC</h4>
													<h3>WARRANTY</h3>
												</div>
											</div>
										</a>
									</div>
									
								</div>
							</div>
							<!-- Fin Columna Small -->
							
							<!-- Inicio Columna Small -->
							<div class="columna-33">
								<div class="columna-content">
									
									<div class="pic" style="background-image:url(/imagecache/original/{{ $configuration->home_ocstores_image}})">
										<a href="/stores" class="destacado-hover">
											<img src="/images/marco3x2.png" alt="" />
											<div class="circle">
												<div class="info-stores">
													<img src="/images/ico-stores.png"/>
													<h3>OC STORES</h3>
												</div>
											</div>
										</a>
									</div>
									
								</div>
							</div>
							<!-- Fin Columna Small -->
							
						</div>
					</div>
					<!-- Fin Home-destacados -->
					
					<!-- Inicio Home-banner -->
					<div id="home-banner">
						<img src="/imagecache/original/{{ $configuration->home_middle_banner_image}}"/>
					</div>
					<!-- Fin Home-destacados -->
					
					<!-- Inicio Home-news -->
					<div id="home-news">
						<div class="content">
							
							<!-- Inicio Contenedor News -->
							<div class="contenedor-news">
								<div class="table">
									<div class="row">
										
										@foreach ($news as $key => $post)
										<!-- Inicio News -->
										<div class="cell" id="news0{{$key + 1}}-pic" style="background-image:url(/imagecache/medium/{{ $post->thumbnail_image }})">
										</div>
										
										<div class="cell"  id="news0{{$key + 1}}-info">
											<div class="news-picmobile" style="background-image:url(/imagecache/small/{{ $post->thumbnail_image }})">
												<img src="images/marco3x2.png" alt="" />
											</div>
											<div class="news-content">
												<h5>LATEST NEWS</h5>
												<h3>{{ $post->title }}</h3>
												<p class="date">{{ $post->date }}</p>
												<p class="text">{{ $post->short_text }}</p>
												<a href="{{ $post->url }}" class="botones boton-mas">VER MAS</a>
											</div>
										</div>
										@endforeach
										<!-- Fin News -->

									</div>
								</div>
							</div>
							<!-- Fin Contenedor News -->


						</div>
					</div>
					<!-- Fin Home-news -->
					
					
				</div>
			<!-- Fin Main
			================================================== -->
@endsection