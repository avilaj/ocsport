<?php
$model = Admin::model('App\Configuration');
$model->title('Configuración')
->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([
		Column::string('key')->label('Opcion'),
	]);
	return $display;
})->createAndEdit(function ($algo) use ($model)
{

	if (!$algo) {
		return null;
	}
	Session::flash('_redirectBack', $model->displayUrl());

	$form = AdminForm::tabbed();
	$form->items([
		'Home' => [
			FormItem::select('home_slider', 'Slider principal')->model('App\Gallery')->display('title'),
			FormItem::columns()->columns([
				[
					FormItem::image('home_octeam')->label('team'),
				], [
					FormItem::image('home_ocwarranty')->label('warranty'),
				], [
					FormItem::image('home_ocstores')->label('stores')
				]
			]),
			FormItem::image('home_middle_banner')->label('Banner del medio'),

		],
		'Navegacion' => [
			FormItem::select('best_seller', 'Best Seller')->model('App\Product')->display('title')
		],
		'Footer' => [
			FormItem::image('ventas_mayoristas')->label('Ventas Mayoristas')
		],
		'Banners de páginas' => [
			FormItem::image('news_banner')->label('News'),
			FormItem::image('team_banner')->label('Team'),
			FormItem::image('warranty_banner')->label('Warranty'),
			FormItem::image('about_banner')->label('About'),
			FormItem::select('stores_banner', 'Slider de Stores')->model('App\Gallery')->display('title')->label('Galería de Stores'),
		]
	]);
	return $form;
});