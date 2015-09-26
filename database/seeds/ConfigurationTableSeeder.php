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
        	'key' => 'home_banner',
        	'value' =>'queti'
        ]);
        DB::table('configuration')->insert([
        	'key' => 'home_octeam',
        	'value' => 'jodete'
        ]);
        DB::table('configuration')->insert([
        	'key' => 'home_ocwarranty',
        	'value' => 'jodete2'

        ]);
        DB::table('configuration')->insert([
        	'key' => 'home_ocstores',
        	'value' => 'jodet3'

        ]);
        DB::table('configuration')->insert([
        	'key' => 'ventas_mayoristas',
        	'value' => 'ventas mayoristas'

        ]);
    }
}
