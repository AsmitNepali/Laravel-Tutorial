<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;
class PostController extends Controller
{
    public function index($slug) {
    	// Query Builder
    	$posts = Post::where('slug',$slug)->firstOrFail();
	    return view('post',[
	    	'post' => $posts,
	    ]);
    }

}
