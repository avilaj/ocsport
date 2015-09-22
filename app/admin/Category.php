<?php

Admin::model('App\Category')->title('Categorias')->display(function ()
{
	$display = AdminDisplay::table();
	$display->apply(function ($query) {
		$query->orderBy('order', 'asc');
	});
	$display->columns([
		Column::string('name')->label('Nombre'),
		Column::count('products')->label('Productos'),
		Column::order()
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('name', 'Nombre'),
		FormItem::image('banner', 'Imagen'),

		FormItem::select('product_id', 'Best Seller')->model('App\Product')->display('title'),
		FormItem::select('gallery_id', 'Galería')->model('App\Gallery')->display('title'),
		FormItem::ckeditor('description', 'Descripcion'),
	]);
	return $form;
});