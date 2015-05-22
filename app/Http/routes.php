<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

  Route::get('/', 'WelcomeController@index');
// Route::get('about','PagesController@about');
// Route::get('contact','PagesController@contact');
// Route::get('articles','ArticlesController@index');
// Route::get('articles/create','ArticlesController@create');
// Route::get('articles/{id}','ArticlesController@show');
// Route::post('articles','ArticlesController@store');

  // class Baz{};
  //
  // class Bar {
  //
  //   private $baz;
  //   public function __construct(Baz $baz)
  //   {
  //     $this->baz = $baz;
  //   }
  // };

  // interface BarInterface {}
  // class Bar implements BarInterface{}
  // class SecondBar implements BarInterface{}
  //
  // App::bind('BarInterface','SecondBar');
  //
  // // App::bind('BarInterface', function()
  // // {
  // //   return new Bar;
  // // });
  //
  // Route::get('foo','fooController@foo');
  //
  // Route::get('bar',function(BarInterface $bar){
  //   dd($bar);
  // });
  //
  Route::get('articles/createConfirm','ArticlesController@createConfirm');
  Route::get('articles/tags', 'ArticlesController@tags');
  Route::resource('articles','ArticlesController');
  Route::get('tags/{tags}','TagsController@show');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
