<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;

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
	return view('welcome');
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

Route::get('articles/{article}',[ArticleController::class,'show']);