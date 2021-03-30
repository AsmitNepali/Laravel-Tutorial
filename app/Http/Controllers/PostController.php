<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PostController extends Controller
{
    public function index($slug) {
    	// Query Builder
    	$posts = DB::table('posts')->where('slug',$slug)->first();
    	if(! $posts) {
    		abort(404);
    	}
	    return view('post',[
	    	'post' => $posts,
	    ]);
    }

}
