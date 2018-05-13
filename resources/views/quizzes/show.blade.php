@extends('layouts.app')
@section('content')

    <quiz-app url="{{ asset($quiz->json_location) }}">

        <div slot="intro" slot-scope="props">
            <h1>@{{props.title}}</h1>
        </div>

        <div slot="results" slot-scope="props">

            <h1>Your Score:</h1><br>
            <strong>Correct Answers: &nbsp;</strong>@{{props.correct}}<br>
            <strong>Total Number of Questions: &nbsp;</strong>@{{props.length}}<br>
            <strong>Percentage: </strong>@{{props.perc}}%<br>
            <form action="" method="POST">

            </form>
            {!! Form::open(['action' => 'QuizzesTakenController@store', 'method' => 'POST']) !!}
            <input type="text" v-bind:value="props.correct" class="d-none" name="correct">
            <input type="text" v-bind:value="props.length" class="d-none" name="length">
            <input type="text" v-bind:value="props.title" class="d-none" name="title">
            <input type="text" value="{{Auth::user()->id}}" class="d-none" name="user">
            <input type="submit" value="Finish">
            {!! Form::close() !!}
        </div>

    </quiz-app>
@endsection