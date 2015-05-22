<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller {

	public function show(Tag $tag)
	{
		// $articles = $tag->articles;
		// $articles = $tag->articles()->get();
		$articles = $tag->articles()->paginate(5);
		// $articles = $articles->paginate(5);
		// dd($articles);
		$name = $tag->name;
		return view('articles.tags',compact('articles','name'));
	}

}
