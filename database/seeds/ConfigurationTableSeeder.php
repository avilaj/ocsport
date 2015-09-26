<?php

use Illuminate\Database\Seeder;

class ConfigurationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('configuration')->insert([
        	'key' => 'home_slider',
        	'value' => '2'
        ]);
        DB::table('configuration')->insert([
        	'key' => 'home_octeam',
        	'value' => 'uploads/team.jpg'
        ]);
        DB::table('configuration')->insert([
        	'key' => 'home_ocwarranty',
        	'value' => 'uploads/garantia.jpg'

        ]);
        DB::table('configuration')->insert([
        	'key' => 'home_ocstores',
        	'value' => 'uploads/stores.jpg'

        ]);
        DB::table('configuration')->insert([
            'key' => 'home_middle_banner',
            'value' => 'uploads/pic-big.jpg'

        ]);
        DB::table('configuration')->insert([
            'key' => 'home_ocstores',
            'value' => 'uploads/stores.jpg'

        ]);
        DB::table('configuration')->insert([
        	'key' => 'ventas_mayoristas',
        	'value' => 'uploads/ventasmayoristas.jpg'

        ]);
    }
}
