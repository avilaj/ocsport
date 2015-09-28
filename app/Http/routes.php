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
$categories = App\Category::whereNotIn('id', [1])->get();
View::share('categories', $categories);
$configuracion = new App\Configuration;
View::share('configuration', $configuracion);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', function () use ($configuracion) {
    setlocale(LC_TIME, 'es_ES.utf8');
	$homeBanner = App\Gallery::find(intval($configuracion->home_slider));
	$homeCollectionBanner = App\Gallery::tag('home_collection_banner');
    return view('pages.home', [
        'products' => App\Product::with('colors','category')->orderBy('created_at', 'desc')->take(3)->get(),
        'news' => App\News::orderBy('created_at', 'desc')->take(2)->get(),
    	'home_banner' => $homeBanner,
    	'home_collection_banner' => $homeCollectionBanner
    ]);
});

Route::get('/productos', function (Request $request) {
    $category = App\Category::with('gallery')->where('slug','productos')->first();

    $productos = App\Product::with('colors');
    $search = $request->input('s');
    if (isset($search) && !empty($search)) {
        $productos
            ->where('title', 'like', "%{$search}%")
            ->orWhere('subtitle', 'like', "%{$search}%");
    }

    $productos = $productos->paginate(6);
    return view('pages.catalog', [
        'categoria' => $category,
        'productos' => $productos
    ])->render();
});

Route::get('/productos/{categoria}', function (Request $request, $categoria) {
    $category = App\Category::with('gallery')->where('slug',$categoria)->first();

    $productos = App\Product::with('colors', 'category')->where('category_id', $category->id);

    $search = $request->input('s');
    if (isset($search) && !empty($search)) {
        $productos
            ->where('title', 'like', "%{$search}%")
            ->orWhere('subtitle', 'like', "%{$search}%");
    }
    $productos = $productos->paginate(6);
    return view('pages.catalog', [
        'categoria' => $category,
        'productos' => $productos
    ])->render();
});

Route::get('/productos/{categoria}/{producto}', function ($cid, $pid) {
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
    ]);
});

Route::get('/team', function () {
    $team = App\Person::with('gallery')->get();
    return view('pages.team', [
        'team'=>$team,
        ])->render();
});

Route::get('/garantia', function () {
    return view('pages.garantia')->render();
});

Route::get('/about', function () {
    return view('pages.about')->render();
});

Route::get('/stores', function () use ($configuracion) {
    $slides = [];
    if ($configuracion->stores_banner) {
        $slides = App\Gallery::find($configuracion->stores_banner);
    }
    $stores = App\Gallery::where('tag','store_item')->get();
    return view('pages.stores', compact('slides', 'stores'))->render();
});

Route::get('/contacto', function () {
    return view('pages.contacto')->render();
});

Route::post('/contacto', function (Request $request) {
    $input = Input::all();
    Mail::send('emails.contacto', $input, function ($m) use ($input) {
        $m->to('ventas@ocsport.com.ar')->subject('Consulta desde OC SPORT Website');
    });
    return redirect('/contacto/enviado')->with($input);
});

Route::get('/contacto/enviado', function () {
    return view('pages.contacto-thanks')->render();
});

Route::post('/subscribir', function (Request $request) {
    $datos = Input::all();
    $item = App\Subscription::create($datos);
    $item->save();
    return view('pages.subscription-thanks', $datos);
});

Route::get('/news', function () {
    $destacadas = App\News::where('pin', true)->take(2)->get();
    $news = App\News::paginate(6);
    return view('pages.news', [
        'destacadas' => $destacadas,
        'news'=>$news,
        ])->render();
});

Route::get('/news/{slug}', function ($slug) {
    $post = App\News::with('gallery')->where('slug',$slug)->first();
    return view('pages.news-single', [
        'post'=>$post,
        ])->render();
});