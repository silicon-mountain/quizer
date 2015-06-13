<?php namespace App\Http\Controllers;

class ModeratorController extends Controller {

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
	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$questions = \App\Question::where('status','=','pending')->orderBy('votes','desc')->get();
		return view('moderator.index')->with('questions',$questions);
	}

	public function answering($id)
	{
		$question = \App\Question::find($id);
		return $question;
	}

}
