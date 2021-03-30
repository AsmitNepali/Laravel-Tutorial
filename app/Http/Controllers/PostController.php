<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($slug) {
    	$posts = \DB::table('posts')->first();
	    return view('post',[
	    	'post' => $posts,
	    ]);
    }

}
