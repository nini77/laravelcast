<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	public function about()
	{

		// $data = [];
		// $data['first'] = 'Douglas';
		// $data['last'] = 'Quaid';


		$first = 'Fox';
		$last = 'Mulder';

		return view('pages.about',compact('first', 'last'));
		// return View('pages.about',$data);

		// return view('pages.about')->with([
		// 		'first' => 'Jeffry',
		// 		'last'	=> 'Way'
		// 	]);
	}

	public function contact()
	{
		return view('pages.contact');
	}
}
