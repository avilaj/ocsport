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
})->createAndEdit(function ($algo)
{
	if (!$algo) {
		return null;
	}
	$form = AdminForm::tabbed();
	$form->items([
		'Home' => [
			FormItem::image('home_banner')->label('Slider principal'),
			FormItem::columns()->columns([
				[
					FormItem::image('home_octeam')->label('team'),
				], [
					FormItem::image('home_ocwarranty')->label('warranty'),
				], [
					FormItem::image('home_ocstores')->label('stores')
				]
			]),
			FormItem::image('home_octeam')->label('Banner del medio'),

		],
		'Navegacion' => [
			FormItem::select('nav_best_seller', 'Best Seller')->model('App\Product')->display('title')
		],
		'Footer' => [
			FormItem::image('ventas_mayoristas')->label('Ventas Mayoristas')
		]
	]);
	return $form;
});