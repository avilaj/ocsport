<?php

Admin::model('App\Person')->title('Team')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with('gallery');
	$display->filters([
		Filter::related('gallery_id')->model('App\Gallery'),
	]);
	$display->columns([
		Column::string('name')->label('Name'),
		Column::string('activity')->label('Activity'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::columns()->columns([
			[
				FormItem::text('name', 'Name'),
				FormItem::text('activity', 'Activity'),
				FormItem::select('gallery_id', 'Galería')->model('App\Gallery')->display('title'),
				FormItem::ckeditor('bio', 'Bio'),
			],
			[
				FormItem::text('facebook', 'Facebook'),
				FormItem::text('instagram', 'Instagram'),
				FormItem::text('twitter', 'Twitter'),
				FormItem::text('youtube', 'Youtube'),
			]
		]),
	]);
	return $form;
});