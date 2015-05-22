<?php namespace App\Http\Controllers;
use App\Articles;
use App\Tag;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Collection;

class ArticlesController extends Controller {

	public function __construct()
	{
		$this->middleware('auth',['only' => 'create']);
	}

	public function index()
	{

		$articles = Articles::latest('published_at')->published()->paginate(5);
		return view('articles.index',compact('articles','latest'));

	}

	public function show($article)
	{
		$edit = true;
		return view('articles.show',compact('article','edit'));
	}

	public function create()
	{

		$tags = \App\Tag::lists('name','id');
		return view('articles.create',compact('tags'));

	}

	public function store(ArticleRequest $request)
	{

		$this->createArticle($request);

		\Flash::info('Your article has been created!');

		return redirect('articles');

	}

	public function createConfirm(ArticleRequest $request)
	{
		$inputTag = $request->input('tag_list');

		$request->flash();

		$tags = \App\Tag::lists('name','id');
		$dataTags = '';

		foreach ($inputTag as $key => $value) {
			$dataTags = $dataTags . $tags[$value] . ' ';
		}

		return view('articles.createConfirm',compact('article','tags','dataTags'));
	}


	public function edit($article)
	{

		$tags = \App\Tag::lists('name','id');

		return view('articles.edit',compact('article','tags','edit'));

	}

	public function update( $article, ArticleRequest $request)
	{

		$article->update($request->all());

		$this->syncTags($article, $request->input('tag_list'));

		\Flash::info('Your article has been updated!');
		return redirect('articles');
	}

	public function tags(Tag $tag)
	{
		dd($tag::find(1)->articles());
	}

	private function syncTags(Articles $article,array $tags)
	{
		$article->tags()->sync($tags);
	}

	private function createArticle(ArticleRequest $request)
	{

		$article = \Auth::user()->articles()->create($request->all());

		$article->tags()->attach($request->input('tag_list'));
	}

}
