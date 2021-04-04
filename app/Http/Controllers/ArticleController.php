<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

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
    	return view('articles.create',[
            'tags' => Tag::all(),
        ]);
    }

    // Persist the new resource.
    public function store() {
    	// persist the new article
        $article = new Article($this->validateArticle());
        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request('tags'));
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
    	$article->update($this->validateArticle());
    	return redirect(route('articles.show', $article->id));
    }

    // Delete the resource.
    public function destroy() {
    }

    public function validateArticle() {
    	return request()->validate([
    		'title' => 'required',
    		'excerpt' => 'required',
    		'body' => 'required',
            'tags' => 'exists:tags,id|required'
    	]);
    }
}
