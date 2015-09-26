@extends('layout')
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
									
									<div class="pic" style="background-image:url(/images/team.jpg)">
										<a href="team.php" class="destacado-hover">
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
									
									<div class="pic" style="background-image:url(/images/garantiab.jpg)">
										<a href="garantia.php" class="destacado-hover">
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
									
									<div class="pic" style="background-image:url(/images/stores.jpg)">
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
						<img src="/images/pic-big.jpg"/>
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
										<div class="cell" id="news0{{$key + 1}}-pic" style="background-image:url(/imagecache/medium/{{ $post->thumbnailCurated }})">
										</div>
										
										<div class="cell"  id="news0{{$key + 1}}-info">
											<div class="news-picmobile" style="background-image:url(/imagecache/small/{{ $post->thumbnailCurated }})">
												<img src="images/marco3x2.png" alt="" />
											</div>
											<div class="news-content">
												<h5>LATEST NEWS</h5>
												<h3>{{ $post->title }}</h3>
												<p class="date">{{ $post->created_at }}</p>
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