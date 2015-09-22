<?php

Admin::model('App\Product')->title('Productos')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with('colors');
	// $display->filters([

	// ]);
	$display->columns([
		Column::image('thumbnail')->label('Miniatura'),
		Column::string('title')->label('Título'),
		Column::lists('colors.name')
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::tabbed();
	$form->items([
		'General' => [
			FormItem::text('title', 'Título'),
			FormItem::text('subtitle', 'Subtítulo'),
			FormItem::multiselect('colors', 'Colores')->model('App\Color')->display('name'),
			FormItem::select('category_id', 'Categoria')->model('App\Category')->display('name'),
			// FormItem::select('product_id', 'Producto Original')->model('App\Product')->display('title'),
			FormItem::text('tags', 'Serie'),
		],
		'Extra' => [
			FormItem::ckeditor('description', 'Descripcion'),
			FormItem::ckeditor('specs', 'Especificaciones'),
			FormItem::ckeditor('details', 'Detalles'),
		],
		'Media' => [
			FormItem::image('thumbnail', 'Miniatura'),
			FormItem::images('images', 'Imagenes'),
		],
		'Venta' => [
			FormItem::text('price', 'Precio'),
			FormItem::text('link', 'Link a tienda nube'),
		]
	]);
	return $form;
});