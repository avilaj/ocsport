@extends('layout')
@section('scripts')
	@parent
	<!-- cloud-zoom -->
	<link href="{{ URL::asset('css/cloud-zoom.css') }}" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="{{ URL::asset('javascripts/cloud-zoom.1.0.2.min.js') }}"></script>
	<!-- AddThis -->          
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e7a99890df6b9b0" async="async"></script>
@endsection
@section('content')
<div id="main">

	<!-- Inicio Productos -->
	<div id="productos">
		<div class="content">

			<!-- Inicio Columna Small -->
			<div class="columna-small">
				<div class="columna-content2">

					<!-- Inicio Categorias -->
					<div class="categorias-tit">
						<span class="arrow2"></span>CATEGORIAS
					</div>

					<ul class="categorias-list" id="categorias">
						@foreach($categories as $category)
						<li><a href="{{$category->url}}">{{$category->name}}</a></li>
						@endforeach
					</ul>
					<!-- Fin Categorias -->

				</div>
			</div>
			<!-- Fin Columna Small -->

			<!-- Inicio Columna Big -->
			<div class="columna-big">
				<div class="columna-content2">


					<div class="breadcrumb">
						<a href="/catalogo">Productos</a> / <a href="{{$producto->category->url}}">{{$producto->category->name}}</a> / OC 202L
					</div>


					<!-- Inicio DetalleProducto -->
					<div id="detalleproducto">

						<!-- Inicio Columna Pic -->
						<div class="columna-pic">
							<div class="columna-pic-content">

								<!--zoom-section-->
								<div class="zoom-section"> 

									<!--image-->  
									<div class="zoom-small-content">
										<div class="zoom-small-image">
											<!-- @TODO: Imeplentar tamaños de imagenes  -->
											<a 	href='/imagecache/large/{{ $producto->imagesCurated[0] }}' class='cloud-zoom' id='zoom1' rel="position:'inside',showTitle:false,adjustX:-4,adjustY:-4">
												<img 	src="/imagecache/medium/{{ $producto->imagesCurated[0] }}"
														style="width:100%;"
														title="Your caption here" alt=''/>
											</a>
										</div>
									</div>
									@foreach($producto->imagesCurated as $image)
                                        <!--list-->
                                        <div class="tinylist"> 
                                        <div class="tinylist-content" style="background-image:url(/imagecache/small/{{$image}})"> 
                                        <a href='/imagecache/large/{{$image}}' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '/imagecache/medium/{{$image}}' ">
                                        <img class="zoom-tiny-image" src="/images/marco1x1.png"/>
                                        </a>
                                        </div>
                                        </div>
									@endforeach
								</div>
							</div>
						</div>
						<!-- Fin Columna Pic -->

						<!-- Inicio Columna Info -->
						<div class="columna-info">

							<h2 class="bold color">{{ $producto->title }}</h2>
							<h4 class="light grey">{{ $producto->subtitle }}</h4>

							<div class="descripcion">
								{!! $producto->description !!}
							</div>

							<h5 class="light grey">COLORES</h5>

							<div class="colores">
								@foreach($series as $opcion)
								<a href="{{ $opcion->url }}">
									@if( count($opcion->colors) )
									<div class="colores-info" style="background-color:{{ $opcion->colors[0]->hex }}">
										@if( count($opcion->colors) > 1 )
										<div class="triangle" style="border-bottom-color:{{ $opcion->colors[1]->hex }}"></div>
										@endif
									</div>
									@endif
								</a>
								@endforeach
							</div>

							<div class="precio">

								@if($producto->link)
								<a href="{{ $producto->link }}" class="botoncomprar">SHOP ONLINE</a>
								@endif
							</div>

							<!-- AddThis Button BEGIN -->
							<div id="compartir" class="addthis_sharing_toolbox">
							</div>
							<!-- AddThis Button END -->

							<h5 class="light grey">FICHA TECNICA</h5>

							<div class="fichatecnica">
								@if($producto->specs)
								@foreach($producto->specs as $spec)
									@if (!empty($spec->key) && !empty($spec->val))
									<div class="fichatecnica-cell semibold">{{$spec->key}}</div>
									<div class="fichatecnica-cell">{{$spec->val}}</div>
									@endif
								@endforeach
								@endif
							</div>

							<h5 class="light grey">DETALLES</h5>

							<div class="detalles">
								<p class="small">{!! $producto->details !!}</p>
							</div>

						</div>
						<!-- Fin Columna Info -->

					</div>
					<!-- Fin DetalleProducto -->

					<div id="producto-relacionado">
						<h3 class="bold color">PRODUCTOS RELACIONADOS</h3>
					</div>

					<!-- Inicio Tabla Productos -->
					<div class="producto-table">
						@foreach($productos_relacionados as $producto)
						<div class="producto-cell">
							<div class="producto-list marco-cel">

								<div class="view view-first">
									<div class="pic" style="background-image:url(/imagecache/small/{{ $producto->thumbnailCurated }})">
										<a href="#"><img src="/images/marco1x1.png" alt="" /></a>
									</div>
									<div class="mask">
										<div class="mask-content">
											<a href="{{$producto->url}}" class="mask-icon"></a>
										</div>
									</div>
								</div>

								<div class="nombre">
									<h4>{{ $producto->title }}</h4>
									<p class="grey">{{ $producto->subtitle }}</p>
								</div>
								@if($producto->price)
								<div class="precio">
									<p class="large">$ {{ $producto->price }}</p>
								</div>
								@endif

								<div class="color">
									@foreach($producto->colors as $color)
									<div class="color-info" style="background-color:{{$color->hex}}"></div>
									@endforeach
								</div>

							</div>
						</div>
						@endforeach
					</div>
					<!-- Fin Tabla Productos -->

					<!-- Inicio Paginación -->
					<ul class="pagination" id="pagination">
						<li><a href="javascript:history.back(1)">VOLVER</a></li>
					</ul>
					<!-- Fin Paginación -->


				</div>
			</div>
			<!-- Fin Columna Big -->

		</div>
	</div>
	<!-- Fin Productos -->




</div>
@endsection