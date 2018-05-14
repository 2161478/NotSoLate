<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizTaken extends Model
{
    //Table name
    protected $table = 'quizzes_taken';

    //Primary key
    public $primaryKey = 'id';

    public $timestamps = true;
    // identify relationship of user and quiztaken
    public function user(){
        return $this->belongsTo('App\user');
    }
}
