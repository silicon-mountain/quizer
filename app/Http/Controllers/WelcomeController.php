<?php namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Validator;

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
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$questions = \App\Question::where('status','=','pending')->orderBy('votes','desc')->get();
		return view('users.stream')->with('questions',$questions);
	}

	/**
	 * show stream of questions.
	 *
	 * @return Response
	 */
	public function stream()
	{
		$questions = \App\Question::where('status','=','pending')->orderBy('votes','desc')->get();
		return $questions;//view('welcome');
	}

	/**
	 * creating an new question.
	 *
	 * @return Response
	 */
	public function getQuestion()
	{
		return view('users.postQuestion');
	}

	/**
	 * handling newly posted question.
	 *
	 * @return Response
	 */
	public function postQuestion(Request $request)
	{
		$validate = Validator::make($request->all(), [
	        'question' => 'required|max:200',
	        'from' => 'required',
	        'to' => 'required',
	    ]);

	    if($validate->passes()){
	    	$createQuestion = new \App\Question();
			$createQuestion->content = $request->input('question');
			$createQuestion->to = $request->input('to');
			$createQuestion->from = $request->input('from');
			$createQuestion->status = "pending";
	    }
	    else {
	    	return redirect()->back();
	    }
		return $createQuestion;
	}

}
