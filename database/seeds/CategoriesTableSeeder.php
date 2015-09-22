<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Productos',
            'slug' => 'productos',
            'description' => 'Todos los productos',
            'order' => 1
        ]);
        DB::table('categories')->insert([
        	'name' => 'Bolsos',
            'slug' => 'bolsos',
        	'order' => 2
        ]);
        DB::table('categories')->insert([
        	'name' => 'Equipajes',
            'slug' => 'equipajes',
        	'order' => 3
        ]);
        DB::table('categories')->insert([
        	'name' => 'Mochilas c/carro',
            'slug' => 'mochlas-c-carro',
        	'order' => 4
        ]);
        DB::table('categories')->insert([
        	'name' => 'Mochilas',
            'slug' => 'mochilas',
        	'order' => 5
        ]);
        DB::table('categories')->insert([
        	'name' => 'Mochilas p/notebook',
            'slug' => 'mochilas-p-notebook',
        	'order' => 6
        ]);
        DB::table('categories')->insert([
        	'name' => 'Riñoneras',
        	'order' => 7
        ]);
        DB::table('categories')->insert([
        	'name' => 'Accesorios',
        	'order' => 6
        ]);
    }
}
