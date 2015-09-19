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
							@foreach ($home_banner->images as $item)
								@if($item->url)
									<li><a href="{{$item->url}}"><img src="{{$item->src}}"></a></li>
								@else
									<li><img src="{{$item->src}}"></li>
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
										<a href="productos.php" class="botones boton-gris">VER COLECCION</a>
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
										
										<!-- Inicio Item -->
										<div class="item">
											<div class="producto-list">
												
												<div class="view view-first">
													<div class="pic" style="background-image:url(images/productos/oc-3003/01-small.jpg)">
														<a href="#"><img src="images/marco1x1.png" alt="" /></a>
													</div>
													<div class="mask">
														<div class="mask-content">
															<a href="producto-mochila-oc-3003.php" class="mask-icon"></a>
														</div>
													</div>
												</div>
												
												<div class="nombre">
													<h4>OC 3003 E</h4>
													<p class="grey">Mochila 19"</p>
												</div>
												
												<div class="precio">
													<p class="large">$ 569.-</p>
												</div>
												
												<div class="color">
													<div class="color-info" style="background-color:#414230"> </div>
													<div class="color-info" style="background-color:#666666"> </div>
												</div>
												
											</div>
										</div>
										<!-- Fin Item -->
										
										<!-- Inicio Item -->
										<div class="item">
											<div class="producto-list">
												
												<div class="view view-first">
													<div class="pic" style="background-image:url(images/productos/oc-300h/01-small.jpg)">
														<a href="#"><img src="images/marco1x1.png" alt="" /></a>
													</div>
													<div class="mask">
														<div class="mask-content">
															<a href="producto-mochila-oc-300h.php" class="mask-icon"></a>
														</div>
													</div>
												</div>
												
												<div class="nombre">
													<h4>OC 300H E</h4>
													<p class="grey">Mochila 18"</p>
												</div>
												
												<div class="precio">
													<p class="large">$ 569.-</p>
												</div>
												
												<div class="color">
													<div class="color-info" style="background-color:#000000"> </div>
												</div>
												
											</div>
										</div>
										<!-- Fin Item -->
										
										<!-- Inicio Item -->
										<div class="item">
											<div class="producto-list">
												
												<div class="view view-first">
													<div class="pic" style="background-image:url(images/productos/oc-4004/01-small.jpg)">
														<a href="#"><img src="images/marco1x1.png" alt="" /></a>
													</div>
													<div class="mask">
														<div class="mask-content">
															<a href="producto-mochila-oc-4004.php" class="mask-icon"></a>
														</div>
													</div>
												</div>
												
												<div class="nombre">
													<h4>OC 4004 K</h4>
													<p class="grey">Mochila 20"</p>
												</div>
												
												<div class="precio">
													<p class="large">$ 569.-</p>
												</div>
												
												<div class="color">
													<div class="color-info" style="background-color:#000000"> </div>
												</div>
												
											</div>
										</div>
										<!-- Fin Item -->
										
										<!-- Inicio Item -->
										<div class="item">
											<div class="producto-list">
												
												<div class="view view-first">
													<div class="pic" style="background-image:url(images/productos/oc-6023/01-small.jpg)">
														<a href="#"><img src="images/marco1x1.png" alt="" /></a>
													</div>
													<div class="mask">
														<div class="mask-content">
															<a href="producto-mochila-oc-6023.php" class="mask-icon"></a>
														</div>
													</div>
												</div>
												
												<div class="nombre">
													<h4>OC 6023 E</h4>
													<p class="grey">Mochila 18"</p>
												</div>
												
												<div class="precio">
													<p class="large">$ 569.-</p>
												</div>
												
												<div class="color">
													<div class="color-info" style="background-color:#729ff4"> </div>
													<div class="color-info" style="background-color:#999999"> </div>
													<div class="color-info" style="background-color:#000000"> </div>
												</div>
												
											</div>
										</div>
										<!-- Fin Item -->
										
										<!-- Inicio Item -->
										<div class="item">
											<div class="producto-list">
												
												<div class="view view-first">
													<div class="pic" style="background-image:url(images/productos/oc-2023/01-small.jpg)">
														<a href="#"><img src="images/marco1x1.png" alt="" /></a>
													</div>
													<div class="mask">
														<div class="mask-content">
															<a href="producto-bolso-deportivo-oc-2023.php" class="mask-icon"></a>
														</div>
													</div>
												</div>
												
												<div class="nombre">
													<h4>OC 2023 B</h4>
													<p class="grey">Bolso deportivo</p>
												</div>
												
												<div class="precio">
													<p class="large">$ 569.-</p>
												</div>
												
												<div class="color">
													<div class="color-info" style="background-color:#3366cc"> </div>
													<div class="color-info" style="background-color:#000000"> </div>
												</div>
												
											</div>
										</div>
										<!-- Fin Item -->
										

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
									
									<div class="pic" style="background-image:url(images/team.jpg)">
										<a href="team.php" class="destacado-hover">
											<img src="images/marco3x2.png" alt="" />
											<div class="circle">
												<div class="info-team">
													<img src="images/ico-team.png"/>
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
									
									<div class="pic" style="background-image:url(images/garantiab.jpg)">
										<a href="garantia.php" class="destacado-hover">
											<img src="images/marco3x2.png" alt="" />
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
									
									<div class="pic" style="background-image:url(images/stores.jpg)">
										<a href="stores.php" class="destacado-hover">
											<img src="images/marco3x2.png" alt="" />
											<div class="circle">
												<div class="info-stores">
													<img src="images/ico-stores.png"/>
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
						<img src="images/pic-big.jpg"/>
					</div>
					<!-- Fin Home-destacados -->
					
					<!-- Inicio Home-news -->
					<div id="home-news">
						<div class="content">
							
							<!-- Inicio Contenedor News -->
							<div class="contenedor-news">
								<div class="table">
									<div class="row">
										
										
										<!-- Inicio News -->
										<div class="cell" id="news01-pic" style="background-image:url(images/news/06/01.jpg)">
										</div>
										
										<div class="cell"  id="news01-info">
											<div class="news-picmobile" style="background-image:url(images/news/06/01.jpg)">
												<img src="images/marco3x2.png" alt="" />
											</div>
											<div class="news-content">
												<h5 class="white">LATEST NEWS</h5>
												<h3 class="white">Luchy Cosoleto pasó por OC Sport y se llevó mochilas de la nueva colección!</h3>
												<p class="color-dark">Julio 23, 2015</p>
												<p class="black">Nuestra Surf Rider, Luchy Cosoleto, pasó por la sucursal OC Sport de Av. Federico Lacroze 3383 y se llevó mochilas de la nueva colección. Vení a conocerla, te esperamos!</p>
												<a href="news06.html" class="botones boton-blanco">VER MAS</a>
											</div>
										</div>
										<!-- Fin News -->

										<!-- Inicio News -->
										<div class="cell" id="news02-pic" style="background-image:url(images/news/05/01.jpg)">
										</div>
										
										<div class="cell" id="news02-info">
											<div class="news-picmobile" style="background-image:url(images/news/05/01.jpg)">
												<img src="images/marco3x2.png" alt="" />
											</div>
											<div class="news-content">
												<h5 class="white">LATEST NEWS</h5>
												<h3 class="color">Pablo "Jirafa" Sanchez - SLP Skateboards Tour en Concordia, Entre Ríos</h3>
												<p class="grey">Julio 06, 2015</p>
												<p class="white">El 20 de marzo de 2015 Pablo "Jirafa" Sanchez participó del SLP Skatebords Tour en Concordia, Entre Ríos junto a los riders Ariel "Guachin" Seib, Diego Bolloqui, Jony Rodriguez, Ruper Mansilla y Seba Franco.</p>
												<a href="news05.html" class="botones boton-color">VER MAS</a>
											</div>
										</div>
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