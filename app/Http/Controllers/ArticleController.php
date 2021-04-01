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

    }

    // Persist the new resource.
    public function store() {

    }

    // Show a view to edit an existing resource.
    public function edit() {

    }

    // Persist the edited resource.
    public function update() {

    }

    // Delete the resource.
    public function destroy() {

    }
}
