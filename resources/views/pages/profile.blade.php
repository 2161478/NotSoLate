@extends('layouts.app')
@section('content')
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#quiz" data-toggle="tab" class="nav-link">Quiz History</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">User name</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Name</label>
                                <div class="col-lg-9">
                                    <span>{{ Auth::user()->name }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Email</label>
                                <div class="col-lg-9">
                                    <span>{{ Auth::user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="quiz">
                    <table class="table table-striped table-responsive">
                        <thead>
                        <tr>
                            <th>Quiz</th>
                            <th>Score</th>
                            <th>Number of Items</th>
                            <th>Percentage</th>
                            <th>Date Taken</th>
                        </tr>
                        </thead>
                        @if(count($quizzes)>0)
                            @foreach($quizzes as $quiz)
                                <tr>
                                    <td>{{ $quiz->quiz_name }}</td>
                                    <td>{{ $quiz->score }}</td>
                                    <td>{{ $quiz->no_items }}</td>
                                    <td>{{ number_format((($quiz->score/$quiz->no_items)*100), 2) }}%</td>
                                    <td>{{$quiz->created_at}}</td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection