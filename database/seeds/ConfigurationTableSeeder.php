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
        	'value' => '2',
            'type' => 'home'
        ]);
        DB::table('configuration')->insert([
        	'key' => 'home_octeam',
        	'value' => 'uploads/team.jpg',
            'type' => 'home'
        ]);
        DB::table('configuration')->insert([
        	'key' => 'home_ocwarranty',
        	'value' => 'uploads/garantia.jpg',
            'type' => 'home'

        ]);
        DB::table('configuration')->insert([
        	'key' => 'home_ocstores',
        	'value' => 'uploads/stores.jpg',
            'type' => 'home'

        ]);
        DB::table('configuration')->insert([
            'key' => 'home_middle_banner',
            'value' => 'uploads/pic-big.jpg',
            'type' => 'home'

        ]);
        DB::table('configuration')->insert([
        	'key' => 'ventas_mayoristas',
        	'value' => 'uploads/ventasmayoristas.jpg',
            'type' => 'layout'
        ]);
        DB::table('configuration')->insert([
            'key' => 'team_banner',
            'value' => 'uploads/banner_team.jpg'
        ]);
        DB::table('configuration')->insert([
            'key' => 'news_banner',
            'value' => 'uploads/banner_team.jpg'
        ]);
        DB::table('configuration')->insert([
            'key' => 'stores_banner',
            'value' => 2
        ]);
        DB::table('configuration')->insert([
            'key' => 'about_banner',
            'value' => 'uploads/banner_team.jpg'
        ]);
        DB::table('configuration')->insert([
            'key' => 'warranty_banner',
            'value' => 'uploads/banner_team.jpg'
        ]);
        DB::table('configuration')->insert([
            'key' => 'contact_banner',
            'value' => 'uploads/banner_team.jpg'
        ]);
        DB::table('configuration')->insert([
            'key' => 'best_seller',
            'value' => 1
        ]);
    }
}
