<?php

Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard');
Admin::menu()->label('Catálogo')->items(function (){
	Admin::menu('App\Products')->label('Productos');
	Admin::menu('App\Categories')->label('Categorías');
	Admin::menu('App\Colors')->label('Colores');
});
Admin::menu('App\Galleries')->label('Galerias');
Admin::menu('App\Person');
Admin::menu('App\News');
Admin::menu('App\Configurations')->label('Configuracion')->icon('fa-cog');