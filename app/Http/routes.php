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
  Route::post('articles/createConfirm','ArticlesController@createConfirm');
  Route::get('articles/tags', 'ArticlesController@tags');
  Route::resource('articles','ArticlesController');
  Route::get('tags/{tags}','TagsController@show');

  //for Vue.js
  Route::resource('vue','VueController');
  Route::get('vue2','VueController@index2');
  Route::get('vue3','VueController@index3');
  Route::get('vue4','VueController@index4');
  Route::get('vue5','VueController@index5');

  Route::controllers([
  	'auth' => 'Auth\AuthController',
  	'password' => 'Auth\PasswordController',
  ]);
