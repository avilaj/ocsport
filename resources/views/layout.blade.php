<!DOCTYPE html>
<html>
<head>

		<!-- Basic Page Needs
				================================================== -->
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
				<title>OC sport</title>
				<meta name="description" content="">
		<META NAME="keywords" CONTENT="">
		<link rel="image_src" href="http://www.ocsport.com.ar/images/ocsport.jpg" />
		<meta name="Distribution" content="Global">
		<meta name="Rating" content="General">
				
				<!-- Favicons
		================================================== -->
				<link rel="shortcut icon" href="/images/favicon.ico">
				
				<!-- Mobile Specific Metas
				================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

		<!-- Google Font
				================================================== -->
				<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300|Open+Sans:700,300,600,400')">
        		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		
				<!-- CSS
				================================================== -->
				<link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css?1')}}">
				<link rel="stylesheet" type="text/css" href="{{URL::asset('css/menu.css')}}">
				<link rel="stylesheet" type="text/css" href="{{URL::asset('css/flexslider.css')}}">
				<link rel="stylesheet" type="text/css" href="{{URL::asset('css/hover-effects.css')}}">
				<link rel="stylesheet" type="text/css" href="{{URL::asset('owl-carousel/owl.carousel.css')}}">
				<link rel="stylesheet" type="text/css" href="{{URL::asset('owl-carousel/owl.theme.css')}}">
				<link rel="stylesheet" type="text/css" href="{{URL::asset('css/jquery.mmenu.all.css')}}">
			@section('scripts')
				<!-- JS
				================================================== -->
				<script type="text/javascript" src="{{URL::asset('javascripts/jquery.mmenu.min.all.js')}}"></script>
				<script type="text/javascript" src="{{URL::asset('javascripts/mmenu.js')}}"></script>
				
		<!-- Menu Desplegable
		================================================== -->

		<script>
			$(document).ready(function() {
				$("#submenu").hide();
			
				$( ".open-menu" ).hover(function() {
					$( "#submenu" ).slideDown( 400, function() {
					// Animation complete.
					});
				});
			
				$( ".hide-submenu" ).mouseleave(function() {
					$( "#submenu" ).hide();
				});
				
				$( ".close-menu" ).hover(function() {
					$( "#submenu" ).hide();
				});

			});
	</script>
	
	@show
</head>

<body>
@section('menu')
<div class="content-website">


	<!-- Inicio Top
	================================================== -->
	<div id="top">
		<div class="content">
			
			<a id="menu-responsive" href="#menu">
				<span></span>
				<span></span>
				<span></span>
			</a>
			
			<div class="shop">
				<a href="#">SHOP ONLINE</a>
			</div>
			
			<div class="redes">
				<a href="https://www.facebook.com/OCSPORTARG" target="_blank"><img src="/images/ico-facebook.png"/></a>
				<a href="https://twitter.com/OCSPORT_ARG" target="_blank"><img src="/images/ico-twitter.png"/></a>
				<a href="https://instagram.com/ocsportargentina/" target="_blank"><img src="/images/ico-instagram.png"/></a>
			</div>
			
			<div class="contact">
				<a href="/contacto">CONTACTO</a>
			</div>
			
		</div>
	</div>
	<!-- Fin Top
	================================================== -->
	
	<!-- Inicio Header
	================================================== -->
	<div id="header">
		<div class="content">
			
			<div id="logo" class="close-menu">
				<a href="/"><img src="/images/ocsport-logo.png"/></a>
			</div>
			
			<ul class="menu" id="menu">
				<li><a class="open-menu" href="/productos">PRODUCTOS<span class="arrow"></span></a></li>
				<li><a class="close-menu" href="/team">TEAM</a></li>
				<li><a class="close-menu" href="/news">NEWS</a></li>
				<li><a class="close-menu" href="/about">ABOUT</a></li>
				<li><a class="close-menu" href="/garantia">GARANTIA</a></li>
				<li><a class="close-menu" href="/stores">STORES</a></li>
			</ul>
			<div id="search">
				<form action="{{ isset($categoria) ? $categoria->url : '/productos' }}">
					<input name="s" type="text" class="searchform" id="textfield" placeholder="Buscar..."/>
				</form>
			</div>
			
		</div>
	</div>
	<!-- Fin Header
	================================================== -->
	
	<!-- Inicio Menu Desplegable
	================================================== -->
	<div id="submenu" class="hide-submenu">
		<div class="content">
			
			<div class="columna-big">
				<div class="tit">NEW SEASON 2016</div>
				@foreach ($categories as $category)
				<div class="columna-item">
					<div class="item"><a href="{{$category->url}}">{{$category->name}}<span class="arrow2"></span></a></div>
				</div>
				@endforeach			
			</div>
			
			<div class="columna-small">
				<div class="tit">BEST SELLER {Falta hacer}</div>
				
				<div class="pic" style="background-image:url(/images/bestseller.jpg)">
					<a href="producto-mochila-oc-4004.php"><img src="/images/marco3x2.png"/></a>	
				</div>
				<div class="name">OC 4004 K</div>
				<div class="cat">Mochila 20"</div>
				
			</div>
			
			
		</div>
	</div>
@show

@yield('content')

@section('footer')
<!-- Inicio Footer
================================================== -->
<div id="footer">
	<div class="content">
		
		<!-- Inicio Columna Small -->
		<div class="columna-small">
			<div class="columna-content">
				
				<h5 class="white">SOCIAL</h5>
				<a href="https://www.facebook.com/OCSPORTARG" target="_blank"><img src="{{URL::asset('/images/ico-facebook.png')}}"/></a>
				<a href="https://twitter.com/OCSPORT_ARG" target="_blank"><img src="{{URL::asset('/images/ico-twitter.png')}}"/></a>
				<a href="https://instagram.com/ocsportargentina/" target="_blank"><img src="{{URL::asset('/images/ico-instagram.png')}}"/></a>

			</div>
		</div>
		<!-- Fin Columna Small -->
		
		<!-- Inicio Columna Small -->
		<div class="columna-small" id="subscribe">
			<div class="columna-content">
				
				<h5 class="white">NEWSLETTER</h5>
				<div class="formulario">
					<form action="/subscribir" method="post" name="contact" id="contact">      
						<input class="form" id="nombre" type="text" name="name" placeholder="Nombre" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Nombre'" required="">
						<input class="form" id="email" type="text" name="email" placeholder="E-mail" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'E-mail'" required="">
						<input class="boton-form" id="enviar" type="submit" name="submit" value="SUBSCRIBE">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</form>
				</div>
				

			</div>
		</div>
		<!-- Fin Columna Small -->

		<!-- Inicio Columna Small -->
		<div class="columna-small">
			<div class="columna-content">
				
				<h5 class="white">CONTENT</h5>
				<div class="tree">
					<div class="tree-left">
						<a href="/" class="boton-tree">Home</a>
						<a href="/productos" class="boton-tree">Productos</a>
						<a href="/team" class="boton-tree">Team</a>
						<a href="/news" class="boton-tree">News</a>
					</div>
				</div>
				<div class="tree">
					<div class="tree-right">
						<a href="/about" class="boton-tree">About</a>
						<a href="/garantia" class="boton-tree">Garant&Iacute;a</a>
						<a href="/stores" class="boton-tree">Stores</a>
						<a href="/contacto" class="boton-tree">Contacto</a>
					</div>
				</div>

			</div>
		</div>
		<!-- Fin Columna Small -->

		<!-- Inicio Columna Small -->
		<div class="columna-small">
			<div class="columna-content">
				
				<div class="ventasmayoristas">
					<a href="/ventasmayoristas"><img src="/imagecache/original/{{ $configuration->ventas_mayoristas_image}}"/></a>
				</div>

			</div>
		</div>
		<!-- Fin Columna Small -->

	</div>
</div>
	<!-- Fin Footer
	================================================== -->
	
	<!-- Inicio Copyright
	================================================== -->
	<div id="copyright">
		<div class="content">
			
			<div id="logo-footer">
				<img src="/images/ocsport-logofooter.png"/>
			</div>
			<div class="copyright-info">
				Copryright 2015 OC Sport - Todos los derechos reservados. Todos los logos, productos, marcas y nombres aqui utilizados son propiedad registrada. Design by: <a href="http://www.controlzstudios.com/" target="_blank">Control.Z studios</a>
			</div>
			
		</div>
	</div>
	<!-- Fin Copyright
	================================================== -->
	
</div>
<!-- Fin Content-website -->

<!--START NAVIGATION RESPONSIVE-->
<nav id="menu">
	<ul>
		<li><a href="/">HOME</a></li>
		<li><a href="/productos">PRODUCTOS</a>
			
			<ul>
				@foreach ($categories as $category)
					<li><a href="{{$category->url}}">{{$category->name}}</a></li>
				@endforeach
			</ul>
			
			<li><a href="/team">TEAM</a></li>
			<li><a href="/news">NEWS</a></li>
			<li><a href="/about">ABOUT</a></li>
			<li><a href="/garantia">GARANTIA</a></li>
			<li><a href="/stores">STORES</a></li>
			<li><a href="/contacto">CONTACTO</a></li>
		</ul>
	</nav>
	
<!--END NAVIGATION RESPONSIVE-->
@show
</body>
</html>