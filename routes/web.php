<?php

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
	return view('welcome');
});

Route::get('posts/{posts}', function($post) {
	$posts = [
		'my-first-post' => 'Hello this is my first post',
		'my-second-post' => 'Hello this is my second post'
	];

	return view('post', [
		'post' => $posts[$post]
	]);
});