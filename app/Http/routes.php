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
use Illuminate\Http\Request;

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', function () {
    $categories = App\Category::whereNotIn('id', [1])->get();
	$homeBanner = App\Gallery::tag('home_banner');
	$homeCollectionBanner = App\Gallery::tag('home_collection_banner');
    return view('pages.home', [
        'products' => App\Product::with('colors')->orderBy('created_at', 'desc')->take(3)->get(),
        'news' => App\News::orderBy('created_at', 'desc')->take(2)->get(),
    	'categories' => $categories,
    	'home_banner' => $homeBanner,
    	'home_collection_banner' => $homeCollectionBanner
    ]);
});

Route::get('/catalogo/{categoria}/{producto}', function ($cid, $pid) {
    $categories = App\Category::whereNotIn('id', [1])->get();
    $producto = App\Product::with('colors', 'category')->where('slug',$pid)->first();
    if (empty($producto->tags)) {
        $series = [$producto];
    } else {
        $series = App\Product::with('colors')->where('tags', $producto->tags)->get();
    }
    $ids = array($producto->id);
    foreach ($series as $item) {
        $ids[] = $item->id;
    }
    $relacionados = array();
    $prodCat = App\Product::with('colors')
        ->where('category_id', $producto->category_id)
        ->whereNotIn('id', $ids)
        ->take(3)->get();

    foreach ($prodCat as $item) {
        $ids[] = $item->id;
        $relacionados[] = $item;
    }
    if (count($relacionados) < 3) {
        $prodLast = App\Product::with('colors')
            ->whereNotIn('id', $ids)
            ->take(3 - count($relacionados))
            ->get();
            foreach ($prodLast as $item) {
                $ids[] = $item->id;
                $relacionados[] = $item;
            }
    }
    return view('pages.product-single', [
        'producto' => $producto,
        'productos_relacionados' => $relacionados,
        'series' => $series,
        'categories' => $categories,
    ]);
});
Route::get('/catalogo', function (Request $request) {
    $category = App\Category::with('gallery')->where('slug','productos')->first();
    $categories = App\Category::whereNotIn('id', [1])->get();

    $productos = App\Product::with('colors');
    $search = $request->input('s');
    if (isset($search) && !empty($search)) {
        $productos
            ->where('title', 'like', "%{$search}%")
            ->orWhere('subtitle', 'like', "%{$search}%");
    }

    $productos = $productos->paginate(6);
    return view('pages.catalog', [
        'categories' => $categories,
        'categoria' => $category,
        'productos' => $productos
    ])->render();
});

Route::get('/catalogo/{categoria}', function (Request $request, $categoria) {
    $category = App\Category::with('gallery')->where('slug',$categoria)->first();
    $categories = App\Category::whereNotIn('id', [1])->get();

    $productos = App\Product::with('colors', 'category')->where('category_id', $category->id);

    $search = $request->input('s');
    if (isset($search) && !empty($search)) {
        $productos
            ->where('title', 'like', "%{$search}%")
            ->orWhere('subtitle', 'like', "%{$search}%");
    }
    $productos = $productos->paginate(6);
    return view('pages.catalog', [
        'categories' => $categories,
        'categoria' => $category,
        'productos' => $productos
    ])->render();
});

Route::get('/team', function () {
    $team = App\Person::with('gallery')->get();
    $categories = App\Category::whereNotIn('id', [1])->get();
    return view('pages.team', [
        'team'=>$team,
        'categories' => $categories
        ])->render();
});

Route::get('/news', function () {
    $destacadas = App\News::where('pin', true)->take(2)->get();
    $news = App\News::paginate(6);
    $categories = App\Category::whereNotIn('id', [1])->get();
    return view('pages.news', [
        'destacadas' => $destacadas,
        'news'=>$news,
        'categories' => $categories
        ])->render();
});

Route::get('/news/{slug}', function ($slug) {
    $post = App\News::with('gallery')->where('slug',$slug)->first();
    $categories = App\Category::whereNotIn('id', [1])->get();
    return view('pages.news-single', [
        'post'=>$post,
        'categories' => $categories
        ])->render();
});