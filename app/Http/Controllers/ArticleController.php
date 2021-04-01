<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show($articleId) {
    	$article = Article::find($articleId);
    	return view('articles.show', compact('article'));
    }
}
