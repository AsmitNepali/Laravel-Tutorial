<?php

use App\Container;
use App\Example;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SendMailController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// if we return json format laravel automatically know the json format
Route::get('/', function () {

    $container = new Container;

    $container->bind('example', function() {
        return new Example;
    });
    $example = $container->resolve('example');
    $example->go();
	// return view('welcome');
});
Route::get('posts/{posts}',[ Postcontroller::class,'index']);
Route::get('contact', function() {
	return view('contact');
});

Route::get('about/', function(){
	$articles = new App\Models\Article;
	return view('about',
		['articles'	=>	$articles::take(2)->latest()->get(),
	]);
});

Route::post('articles/',[ArticleController::class,'store']);
Route::get('articles/',[ArticleController::class,'show']);
Route::get('articles/create',[ArticleController::class,'create']);
Route::get('articles/{article}',[ArticleController::class,'show'])->name('articles.show');
Route::get('articles/{article}/edit',[ArticleController::class,'edit']);
Route::put('articles/{article}',[ArticleController::class,'update']);
Route::get('mailtemplate/', [SendMailController::class, 'index']);
Route::get('sendmail/',[SendMailController::class, 'sendMail']);
Route::resource('contact/',ContactController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
