@extends('layout')
@section('content')
<div id="main">
	<div id="top-banner">
		@if($categoria->banner)
			<img src="/imagecache/original/{{$categoria->banner}}">
		@endif
	</div>
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
			<div class="columna-big">
				<div class="columna-content2">
					<div class="breadcrumb">
						<a href="/catalogo">Catálogo</a>
						@if($categoria)
						 / <a href="{{$categoria->url}}">{{$categoria->name}}</a>
						@endif
					</div>
					<div class="categorias-nombre">
						<h2 class="bold color">{{$categoria->name}}</h2>
						<p>{{ $categoria->description }}</p>
					</div>


					<div class="producto-table">
					@foreach($productos as $producto)


							<!-- Inicio Item -->
							<div class="producto-cell">
								<div class="producto-list marco-cel">

									<div class="view view-first">
										<div class="pic" style="background-image:url(/imagecache/small/{{$producto->thumbnailCurated}})">
											<a href="#"><img src="/images/marco1x1.png" alt="" /></a>
										</div>
										<div class="mask">
											<div class="mask-content">
												<a href="{{ $producto->url }}" class="mask-icon"></a>
											</div>
										</div>
									</div>

									<div class="nombre">
										<h4>{{ $producto->title }}</h4>
										<p class="grey">{{ $producto->subtitle }}</p>
									</div>

									<div class="precio">
										<p class="large">$ {{$producto->price}}.-</p>
									</div>

									<div class="color">
										@foreach($producto->colors as $color)
											<div class="color-info" style="background-color:{{ $color->hex }}">	</div>
										@endforeach
									</div>

								</div>
							</div>
							<!-- Fin Item -->
					@endforeach
					</div>
					{!! $productos->render() !!}
				</div>
			</div>


		</div>
	</div>
</div>
@endsection