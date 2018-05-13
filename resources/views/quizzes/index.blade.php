@extends('layouts.app')
@section('content')
    <h1>Quizzes</h1>
    @guest
        <div class="alert alert-warning">
            <strong>Warning!</strong>
            You Must Be logged in in order to take the quizzes
            <a href="{{ route('login') }}" class="alert-link"> Click here to login </a>
        </div>
    @else
    @endguest
    <div class="row">

        @if(count($quizzes)>0)
            @foreach($quizzes as $quiz)
                <div class="">
                    <?php
                    $path = (string)$quiz->json_location;
                    $file = file_get_contents($path);
                    $json = json_decode($file);
                    ?>
                </div>
                <div class="col-sm-12 col-md-6">
                    <a class="card-link" href="{{ '/quizzes/'.$quiz->id }}">
                        <div class="card">
                            <div class="card card-header">{{ $json->title }}</div>
                            <div class="card card-body">
                                <p><strong>Number of Questions:</strong>{{ ' '.$quiz->no_items }}</p>
                                <p>{{ $quiz->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        @else
            <p>No Quizzes!</p>
        @endif
    </div>
@endsection

