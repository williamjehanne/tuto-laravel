<?php namespace App\Http\Controllers;
use \Request;
use \Input;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('ip');
	}

//    public function postTest() {
//
//    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        dd(Input::get("q"));
        return "Salut $name";
		return view('welcome');
	}

//    public function getIndex(){
//        return "Salut les gens";
//    }

}
