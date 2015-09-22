<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		DB::table('products')->insert([
			'title' => 'Oc 2023 B',
			'slug' => 'oc-2023-b',
			'category_id'=>2,
			'tags' => 'oc_2023',
			'subtitle' => 'Bolso deportivo 24"',
			'thumbnail' => 'uploads/50e9e67f34a9a1fac07ae5450b5f3ab7.jpg',
			'images' => 'uploads/8a29b36cee0e0d76bb98e1b7e6a78872.jpg',
			'link' => 'http://shop.ocsport.com.ar/bolsos/oc-2023-k-bolso-deportivo-24/',
			'specs' => 'Material:Polyester 1680D ImpermeablePeso:920 grs.Dimensiones:28 cm. alto, 57 cm. ancho, 26 cm. profundoCapacidad:42 lts.Ancho de correas:8 cm.Cierres:Nº 10 y Nº 8',
			'details' => '1 Bolsillo Frontal. 2 Bolsillos Laterales. 1 Compartimiento grande. 2 agarraderas. Correa removible acolchada para colgar colgar del hombro.'
		]);
		DB::table('products')->insert([
			'title' => 'Oc 2023 K',
			'slug' => 'oc-2023-k',
			'category_id'=>2,
			'tags' => 'oc_2023',
			'thumbnail' => 'uploads/50e9e67f34a9a1fac07ae5450b5f3ab7.jpg',
			'images' => 'uploads/8a29b36cee0e0d76bb98e1b7e6a78872.jpg',
			'subtitle' => 'Bolso deportivo 24"',
			'link' => 'http://shop.ocsport.com.ar/bolsos/oc-2023-k-bolso-deportivo-24/',
			'specs' => 'Material:Polyester 1680D ImpermeablePeso:920 grs.Dimensiones:28 cm. alto, 57 cm. ancho, 26 cm. profundoCapacidad:42 lts.Ancho de correas:8 cm.Cierres:Nº 10 y Nº 8',
			'details' => '1 Bolsillo Frontal. 2 Bolsillos Laterales. 1 Compartimiento grande. 2 agarraderas. Correa removible acolchada para colgar colgar del hombro.'
		]);
		DB::table('products')->insert([
			'title' => 'Oc 2023 Z',
			'slug' => 'oc-2023-z',
			'category_id'=>2,
			'tags' => 'oc_2023',
			'subtitle' => 'Bolso deportivo 24"',
			'thumbnail' => 'uploads/50e9e67f34a9a1fac07ae5450b5f3ab7.jpg',
			'images' => 'uploads/8a29b36cee0e0d76bb98e1b7e6a78872.jpg',
			'link' => 'http://shop.ocsport.com.ar/bolsos/oc-2023-k-bolso-deportivo-24/',
			'specs' => 'Material:Polyester 1680D ImpermeablePeso:920 grs.Dimensiones:28 cm. alto, 57 cm. ancho, 26 cm. profundoCapacidad:42 lts.Ancho de correas:8 cm.Cierres:Nº 10 y Nº 8',
			'details' => '1 Bolsillo Frontal. 2 Bolsillos Laterales. 1 Compartimiento grande. 2 agarraderas. Correa removible acolchada para colgar colgar del hombro.'
		]);
	}
}
