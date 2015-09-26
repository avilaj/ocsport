<?php

Admin::model('App\News')->title('Noticias')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with('gallery');
	$display->filters([
		Filter::related('gallery_id')->model('App\Gallery'),
	]);
	$display->columns([
		Column::image('thumbnail'),
		Column::string('title')->label('Title'),
		Column::string('short_text')->label('Short_text'),
		Column::string('gallery')->label('Gallery')->append(Column::filter('gallery_id')),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::columns()->columns([
			[
				FormItem::text('title', 'Title'),
				FormItem::text('short_text', 'Shorttext'),
				FormItem::select('gallery_id', 'Galería')->model('App\Gallery')->display('title'),
				FormItem::ckeditor('text', 'Text'),
			],
			[
				FormItem::image('thumbnail', 'Thumbnail'),
			]
		]),
	]);
	return $form;
});