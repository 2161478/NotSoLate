<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Session;

class CommentsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $topic)
    {
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->comment = $request->comment;
        $comment->topic = $topic;
        $comment->save();
        return redirect()->route("$topic");
    }
}
