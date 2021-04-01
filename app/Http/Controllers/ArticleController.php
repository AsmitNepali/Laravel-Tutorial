<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
	// List all the resources.
	public function index() {

	}

	//  Show single resource.
    public function show($articleId) {
    	$article = Article::find($articleId);
    	return view('articles.show', compact('article'));
    }

    // Show a view to create a new resource
    public function create() {
    	return view('articles.create');
    }

    // Persist the new resource.
    public function store() {
    	// persist the new article
    	request()->validate([
    		'title' => 'required',
    		'excerpt' => 'required',
    		'body' => 'required'
    	]);
    	$article = new Article();
    	$article->title = request('title');
    	$article->excerpt = request('excerpt');
    	$article->body = request('body');
    	$article->save();
    	return redirect('/about');
    }

    // Show a view to edit an existing resource.
    public function edit($articleId) {
    	$article = Article::find($articleId);
    	return view('articles.edit',[
    		'article' => $article,
    	]);
    }

    // Persist the edited resource.
    public function update($id) {
    	
    	request()->validate([
    		'title' => 'required',
    		'excerpt' => 'required',
    		'body' => 'required'
    	]);

    	$article = Article::find($id);
    	$article->title = request('title');
    	$article->excerpt = request('excerpt');
    	$article->body = request('body');
    	$article->save();
    	return redirect('articles/'.$article->id);
    }

    // Delete the resource.
    public function destroy() {

    }
}
