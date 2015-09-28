<?php
Admin::model('SleepingOwl\AdminAuth\Entities\Administrator')
    ->title('Administrators')
    ->display(function ()
    {
        $display = AdminDisplay::datatables();
        $display->order([[0, 'desc']]);
        $display->columns([
            Column::string('id')->label('ID'),
            Column::string('name')->label('Name'),
            Column::string('username')->label('Username'),
        ]);
        return $display;
    })->createAndEdit(function ()
    {
        $form = AdminForm::form();
        $form->items([
            FormItem::text('username', 'Username'),
            FormItem::text('name', 'Name'),
            FormItem::custom()->display(function ($instance)
            {
                return view('form.password_field', ['instance' => $instance]);
            })->callback(function ($instance)
            {
                $instance->password = Input::get('password');
            }),
        ]);
        return $form;
    });
