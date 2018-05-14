<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuizTaken;
class QuizzesTakenController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quizTaken = new QuizTaken;
        $quizTaken->score = $request->input('correct');
        $quizTaken->no_items = $request->input('length');
        $quizTaken->user_id = $request->input('user');
        $quizTaken->quiz_name = $request->input('title');
        $quizTaken->save();
        return redirect('/quizzes');
    }
}
