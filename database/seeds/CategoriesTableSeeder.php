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
        	'name' => 'Bolsos',
        	'order' => 0
        ]);
        DB::table('categories')->insert([
        	'name' => 'Equipajes',
        	'order' => 1
        ]);
        DB::table('categories')->insert([
        	'name' => 'Mochilas c/carro',
        	'order' => 2
        ]);
        DB::table('categories')->insert([
        	'name' => 'Mochilas',
        	'order' => 3
        ]);
        DB::table('categories')->insert([
        	'name' => 'Mochilas p/notebook',
        	'order' => 4
        ]);
        DB::table('categories')->insert([
        	'name' => 'Riñoneras',
        	'order' => 5
        ]);
        DB::table('categories')->insert([
        	'name' => 'Accesorios',
        	'order' => 6
        ]);
    }
}
