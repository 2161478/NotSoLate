<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //Table name
    protected $table = 'quizzes';

    //Primary key
    public $primaryKey = 'id';
    public function takequiz(){
        return $this->hasMany('App\QuizTaken');
}
}
