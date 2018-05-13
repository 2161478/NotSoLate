<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use PhpParser\Node\Expr\Array_;

class QuizController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizzes = Quiz::all();
        return view('quizzes.index')->with('quizzes', $quizzes);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quiz = Quiz::find($id);

        return view('quizzes.show')->with('quiz',$quiz);
    }
}
