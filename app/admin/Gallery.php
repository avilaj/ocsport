<?php

Admin::model('App\Gallery')->title('Galerias')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([
		Column::string('title')->label('Title'),
		Column::string('tag')->label('Tag'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('title', 'Title'),
		FormItem::text('subtitle', 'Subtitle'),
		FormItem::text('tag', 'Tag'),
		FormItem::ckeditor('description', 'Description'),
		FormItem::galleryList('images', 'Imagenes'),
		FormItem::textList('videos', 'Videos')
	]);
	return $form;
});