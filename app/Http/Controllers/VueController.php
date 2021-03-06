<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class VueController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('vue.index');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index2()
	{
		return view('vue.index2');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index3()
	{
		return view('vue.formbind');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index4()
	{
		return view('vue.renderingList');
	}

	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/
	public function index5()
	{
		return view('vue.eventSystem');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
