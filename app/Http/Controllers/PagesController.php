<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index(){
        $title = 'Home';
        return view('pages.index')-> with('title', $title);
    }
    public function profile() {
        $user = auth()->user()->id;
        $user = User::find($user);
        return view('pages.profile')-> with('quiz', $user->quizTaken);
    }
    public function java() {
        $comments = DB::select("select * from comments where topic = 'java' order by 'created_at' asc");
        return view('pages.java')-> with('comments', $comments);
    }
    public function was() {
        $comments = DB::select("select * from comments where topic = 'was' order by 'created_at' asc");
        return view('pages.was')-> with('comments', $comments);
    }
    public function php() {
        $comments = DB::select("select * from comments where topic = 'php' order by 'created_at' asc");
        return view('pages.php')-> with('comments', $comments);
    }
    public function node() {
        $comments = DB::select("select * from comments where topic = 'node' order by 'created_at' asc");
        return view('pages.node')-> with('comments', $comments);
    }
}
