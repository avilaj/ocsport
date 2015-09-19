<?php

Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard');

Admin::menu('App\Categories')->label('Categorías');
Admin::menu('App\Galleries')->label('Galerias');
Admin::menu('App\Products')->label('Productos');
Admin::menu('App\Colors')->label('Colores');