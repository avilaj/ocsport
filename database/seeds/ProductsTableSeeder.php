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
			'thumbnail' => 'uploads/bolso-a.jpg',
			'images' => 'uploads/bolso-a.jpg, uploads/bolso-b.jpg',
			'link' => 'http://shop.ocsport.com.ar/bolsos/oc-2023-k-bolso-deportivo-24/',
			'specs' => '[
				{"key": "Material","value": "Polyester 1680D Impermeable"},
				{"key": "Peso","value": "920 grs."},
				{"key": "Dimensiones","value": "28 cm. alto, 57 cm. ancho, 26 cm. profundo"},
				{"key": "Capacidad","value": "42 lts."},
				{"key": "Ancho de correas","value": "8 cm."},
				{"key": "Cierres","value": "Nº 10 y Nº 8"}
			]',
			'details' => '1 Bolsillo Frontal. 2 Bolsillos Laterales. 1 Compartimiento grande. 2 agarraderas. Correa removible acolchada para colgar colgar del hombro.'
		]);
		DB::table('products')->insert([
			'title' => 'Oc 2023 K',
			'slug' => 'oc-2023-k',
			'category_id'=>2,
			'tags' => 'oc_2023',
			'thumbnail' => 'uploads/bolso-a.jpg',
			'images' => 'uploads/bolso-a.jpg, uploads/bolso-b.jpg',
			'subtitle' => 'Bolso deportivo 24"',
			'link' => 'http://shop.ocsport.com.ar/bolsos/oc-2023-k-bolso-deportivo-24/',
			'specs' => '[
				{"key": "Material","value": "Polyester 1680D Impermeable"},
				{"key": "Peso","value": "920 grs."},
				{"key": "Dimensiones","value": "28 cm. alto, 57 cm. ancho, 26 cm. profundo"},
				{"key": "Capacidad","value": "42 lts."},
				{"key": "Ancho de correas","value": "8 cm."},
				{"key": "Cierres","value": "Nº 10 y Nº 8"}
			]',
			'details' => '1 Bolsillo Frontal. 2 Bolsillos Laterales. 1 Compartimiento grande. 2 agarraderas. Correa removible acolchada para colgar colgar del hombro.'
		]);
		DB::table('products')->insert([
			'title' => 'Oc 2023 Z',
			'slug' => 'oc-2023-z',
			'category_id'=>2,
			'tags' => 'oc_2023',
			'subtitle' => 'Bolso deportivo 24"',
			'thumbnail' => 'uploads/bolso-a.jpg',
			'images' => 'uploads/bolso-a.jpg, uploads/bolso-b.jpg',
			'link' => 'http://shop.ocsport.com.ar/bolsos/oc-2023-k-bolso-deportivo-24/',
			'specs' => '[
				{"key": "Material","value": "Polyester 1680D Impermeable"},
				{"key": "Peso","value": "920 grs."},
				{"key": "Dimensiones","value": "28 cm. alto, 57 cm. ancho, 26 cm. profundo"},
				{"key": "Capacidad","value": "42 lts."},
				{"key": "Ancho de correas","value": "8 cm."},
				{"key": "Cierres","value": "Nº 10 y Nº 8"}
			]',
			'details' => '1 Bolsillo Frontal. 2 Bolsillos Laterales. 1 Compartimiento grande. 2 agarraderas. Correa removible acolchada para colgar colgar del hombro.'
		]);
	}
}
