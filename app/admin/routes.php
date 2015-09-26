<?php

Route::get('', [
	'as' => 'admin.home',
	function ()	{
		$content = 'Define your dashboard here.';
		return Admin::view($content, 'Dashboard');
	}
]);
Route::get('configurations', function (Request $data) {
	return redirect('admin/configurations/1/edit');
	// return $data;
});