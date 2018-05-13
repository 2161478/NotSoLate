@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-sm">
            <a class="card-link" href="{{ route('java') }}">
            <img class="card-img-top" src="{{asset('storage/img/javaee.png')}}" alt="Java EE">
            <div class="card-body text-center">
                <h1 class="card-title">Java</h1>
            </div>
            </a>
        </div>
        <div class="col-sm">
            <a class="card-link" href="{{ route('php') }}">
                <img class="card-img-top" src="{{asset('storage/img/phplogo.png')}}" alt="PHP Logo">
                <div class="card-body text-center">
                    <h1 class="card-title">PHP</h1>
                </div>
            </a>
        </div>
        <div class="col-sm">
            <a class="card-link" href="{{ route('node') }}">
            <img class="card-img-top" src="{{asset('storage/img/nodejs.png')}}" alt="Node JS">
            <div class="card-body text-center">
                <h1 class="card-title">NodeJS</h1>
            </div>
            </a>
        </div>
        <div class="col-sm">
            <a class="card-link" href="{{ route('was') }}">
                <img class="card-img-top" src="{{asset('storage/img/was.png')}}" alt="WAS">
                <div class="card-body text-center">
                    <h1 class="card-title">WAS</h1>
                </div>
            </a>
        </div>
    </div>
@endsection