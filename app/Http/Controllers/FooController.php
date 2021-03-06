<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\FooRepository;

class FooController extends Controller {

	private $repository;

	public function __construct(FooRepository $repository)
	{
		$this->repository = $repository;
	}

	public function foo()
	{
		// $repository = new \App\Repositories\FooRepository();
		return $this->repository->get();
	}

}
