<?php

namespace App\Http\Controllers;
use App\User;

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
        $title = 'Java';
        return view('pages.java')-> with('title', $title);
    }
    public function was() {
        $title = 'Web Application Security';
        return view('pages.was')-> with('title', $title);
    }
    public function php() {
        $title = 'PHP';
        return view('pages.php')-> with('title', $title);
    }
    public function node() {
        $title = 'Node.Js';
        return view('pages.node')-> with('title', $title);
    }
}
