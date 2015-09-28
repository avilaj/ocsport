<?php

Admin::model('App\Subscription')->title('Suscripciones')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->columns([
		Column::string('name')->label('Nombre'),
		Column::string('email')->label('Email')
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('name', 'Nombre'),
		FormItem::text('email', 'Email')
	]);
	return $form;
});