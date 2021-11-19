<?php // routes/web.php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('/', 'welcome');
Route::view('/', 'welcome', ['name' => 'John']);

Route::get('/hello', function () {
    return 'Hello World!';
});

Route::redirect('/world', 'hello', \Illuminate\Http\Response::HTTP_FOUND);

Route::get('/hello/{name}', function($name) {
    return "Hello {$name}!";
});

Route::get('/hello/{name?}', function($name = 'Traveller') {
    return "Hello {$name}!";
});


Route::get('/what-is-my-ip', function(\Illuminate\Http\Request $request) {
    return $request->getClientIp();
});

Route::get('/blog/{page}', function($page) {
    return "Page $page";
})->where('page', '\d+');

Route::get('/blog/{slug}', function($slug) {
    return "Post $slug";
});

Route::get('/named-route/{foo?}', function ($foo = "foo") {
    return "Some named route $foo";
})->name('named');

Route::get('/foobar', function() {
    // generate URL
    $url = route('named');

    // redirect to named route
    return redirect()->route('named', ['foo' => 'bar']);
});

Route::get('/blade/variables', [
    \App\Http\Controllers\BladeController::class,
    'variables'
]);

Route::get('/eloquent/getting-data', [
    \App\Http\Controllers\EloquentController::class,
    'gettingData'
])->name('eloquent.gettingData');

Route::match(['get', 'post'], '/eloquent/add-category', [
    \App\Http\Controllers\EloquentController::class,
    'addCategory'
])->name('addCategory');

Route::post('/eloquent/delete-category', [
    \App\Http\Controllers\EloquentController::class,
    'deleteCategory'
])->name('deleteCategory');
