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

	// This is call Route Model Binding
	// There must be a same name of wildcard and instance name
    public function show(Article $article) { 
    	return view('articles.show', compact('article'));
    }

    // Show a view to create a new resource
    public function create() {
    	return view('articles.create');
    }

    // Persist the new resource.
    public function store() {
    	// persist the new article
    	$validatedAtributes = request()->validate([
    		'title' => 'required',
    		'excerpt' => 'required',
    		'body' => 'required'
    	]);
    	Article::create([
    		'title' => request('title'),
    		'excerpt' => request('excerpt'),
    		'body' => request('body')
    	]);
    	return redirect('/about');
    }

    // Show a view to edit an existing resource.
    public function edit(Article $article) {
    	return view('articles.edit',[
    		'article' => $article,
    	]);
    }

    // Persist the edited resource.
    public function update(Article $article) {

    	request()->validate([
    		'title' => 'required',
    		'excerpt' => 'required',
    		'body' => 'required'
    	]);
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
