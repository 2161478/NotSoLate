<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pageId)
    {
        $comments = Comment::where('page_id', $pageId)->get();
        $commentsData = [];
        foreach ($comments as $key) {
            $user = User::find($key->users_id);
            $name = $user->name;
            $replies = $this->replies($key->id);
            $photo = $user->first()->photo_url;
            // dd($photo->photo_url);
            $reply = 0;

            if (sizeof($replies) > 0) {

                $reply = 1;

            }
            array_push($commentsData, [

                "name" => $name,

                "photo_url" => (string)$photo,

                "commentid" => $key->id,

                "comment" => $key->comment,

                "replies" => $replies,

                "date" => $key->created_at->toDateTimeString()

            ]);
        }

        $collection = collect($commentsData);

        return $collection->sortBy('date', 'desc');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'comment' => 'required',
            'reply_id' => 'filled',
            'page_id' => 'filled',
            'users_id' => 'required',
        ]);

        $comment = Comment::create($request->all());
        if ($comment)
            return ["status" => "true", "commentId" => $comment->id];

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
