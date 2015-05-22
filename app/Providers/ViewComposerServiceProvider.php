<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->composeNavigation();
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	private function composeNavigation()
	{
		view()->composer('partials.nav',function($view)
		{
			$view->with('latest',\App\Articles::latest()->first());
			$view->with('tags',\App\Tag::lists('name'));

		});
	}

}
