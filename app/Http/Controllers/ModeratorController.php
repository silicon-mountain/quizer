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
	 * Show all questions sorted by votes descending order.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return gethostbyaddr($_SERVER['REMOTE_ADDR']);
		$questions = \App\Question::where('status','=','pending')->orderBy('votes','desc')->get();
		return view('moderator.index')->with('questions',$questions);
	}
	/**
	 * Question which is currently being answered.
	 *
	 * @return Response
	 */
	public function answering($id)
	{
		$question = \App\Question::find($id);
		return view('moderator.question')->with('question',$question);
	}

	/**
	 * Setting question to pending state if not answered. and will be revisisted
	 *
	 * @return Response
	 */
	public function setPending($id)
	{
		$question = \App\Question::find($id);
		$question->status = "pending";
		$question->save();
		return redirect()->to('moderator');
	}

	/**
	 * Setting question to answered.
	 *
	 * @return Response
	 */
	public function setAnswered($id)
	{
		$question = \App\Question::find($id);
		$question->status = "answered";
		$question->save();
		return redirect()->to('moderator');
	}

	/**
	 * Setting question to not answered, if question wasnt answered.
	 *
	 * @return Response
	 */
	public function setNotanswered($id)
	{
		$question = \App\Question::find($id);
		$question->status = "notanswered";
		$question->save();
		return redirect()->to('moderator');
	}

}
