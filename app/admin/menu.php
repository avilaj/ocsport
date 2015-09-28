<?php

Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard');
Admin::menu()->label('Catálogo')->items(function (){
	Admin::menu('App\Products')->label('Productos');
	Admin::menu('App\Categories')->label('Categorías');
	Admin::menu('App\Colors')->label('Colores');
});
Admin::menu('App\Galleries')->label('Galerias');
Admin::menu('App\Person')->label('Riders');
Admin::menu('App\News')->label('Noticias');
Admin::menu('App\Subscription')->label('Suscripciones');
// Admin::menu()->label('Páginas')->items(function () {
// 	Admin::menu('App\PageHome')->label('Home');
// 	Admin::menu('App\PageTeam')->label('Team');
// 	Admin::menu('App\PageNews')->label('News');
// 	Admin::menu('App\PageAbout')->label('About');
// 	Admin::menu('App\PageContact')->label('Contact');
// 	Admin::menu('App\PageStores')->label('Stores');
// });
Admin::menu('App\Configurations')->label('Configuracion')->icon('fa-cog');