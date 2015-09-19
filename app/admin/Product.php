<?php

Admin::model('App\Product')->title('Productos')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with('colors');
	$display->filters([

	]);
	$display->columns([
		Column::image('thumbnail')->label('Thumbnail'),
		Column::string('title')->label('Title'),
		Column::lists('colors')->label('Colors'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('title', 'Title'),
		FormItem::text('subtitle', 'Subtitle'),
		FormItem::image('thumbnail', 'Thumbnail'),
		FormItem::text('tags', 'Tags'),
		FormItem::text('price', 'Price'),
		FormItem::text('link', 'Link'),
		FormItem::select('category_id', 'Category')->model('App\Category')->display('name'),
		FormItem::select('product_id', 'Product Original')->model('App\Product')->display('title'),
		FormItem::ckeditor('description', 'Description'),
		FormItem::ckeditor('specs', 'Specs'),
		FormItem::ckeditor('details', 'Details'),
		FormItem::images('images', 'Images'),
	]);
	return $form;
});