<?php

Admin::model('App\Color')->title('Colores')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with('products');
	$display->filters([

	]);
	$display->columns([
		Column::string('name')->label('Name'),
		Column::color('hex')->label('Hex')
		// Column::count('products')->label('Productos'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('name', 'Name'),
		FormItem::color('hex', 'Color'),
	]);
	return $form;
});