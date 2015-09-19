<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
// Route::resource('api/category', 'Categories');
// Route::get('/admin', function () {
// 	return view('admin.home');
// });
// Route::get('/admin/categorias', function () {
// 	$categories = App\Category::sorted()->get();
// 	return view('admin.category.index', ['categories'=>$categories]);
// });
Route::get('/', function () {
	$categories = App\Category::all();
	$homeBanner = App\Gallery::tag('home_banner');
	$homeCollectionBanner = App\Gallery::tag('home_collection_banner');
    return view('pages.home', [
    	'categories' => $categories,
    	'home_banner' => $homeBanner,
    	'home_collection_banner' => $homeCollectionBanner
    ]);
});
