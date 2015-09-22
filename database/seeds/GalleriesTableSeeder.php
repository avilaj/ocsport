<?php

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('galleries')->insert([
			'title' => 'New Arrivals',
			'tag' => 'home_collection_banner',
			'subtitle' => 'New Season 2016',
			'description' => 'OC Sport presenta una nueva gama de mochilas, bolsos, equipaje y accesorios pensados para cargar dentro más de lo que tu estilo de vida necesita, con nuevos estilos, diseños funcionales, colores y estampados exclusivos.'
		]);		
		DB::table('galleries')->insert([
			'title' => 'Landpage banner',
			'tag' => 'home_banner',
			'description' => 'Banner gigante para el home.',
			'images' => 'uploads/8d3233d5c087fcecc1ba56510690b09e.jpg,uploads/64aef93dd17093644ae1522afe1a9b5e.jpg,uploads/94f836a2d2459ed3b5daf06483005500.jpg,uploads/8291c1bd10e27c68fba0de6ee88bffa5.jpg'
		]);
	}
}
