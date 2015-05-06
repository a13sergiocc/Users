<?php namespace App\Http\Controllers;

use Redirect;
use Auth;
use Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return Redirect::to('users');
	}

	public function getLogin()
	{
		return view('login');
	}

	public function postLogin() 
	{
		$credenciales = array(
			'username' => Request::input('username'),
			'password' => Request::input('password')
		);

		// Auth::validate() -> Nos valida pero no loguea
		// Auth::atempt() -> Nos valida y loguea

		if(Auth::attempt($credenciales, true))
			return Redirect::to('users');
		
		return Redirect::to('login')->withInput();
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('users');
	}
}
