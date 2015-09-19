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
			'description' => 'Banner gigante para el home.'
		]);
	}
}
