@extends('layouts.with-navbar')
@section('content')
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div id="sidebar-wrapper" class="sidebar-toggle">
                <ul class="sidebar-nav">
                    <li><a href="#what-is-nodejs" class="left-nav-link">What is Node JS?</a></li>
                    <li><a href="#introduction">Node JS Introductory Clip</a></li>
                    <li><a href="#npm">Node Package Manager</a></li>
                    <li><a href="#modules">Popular Modules</a></li>
                    <li><a href="#package.json">package.json file</a></li>
                    <li><a href="#references">References</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <div class="container" id="content">
        <div class="card card-body p-5">
            <section id="what-is-nodejs">
                <h3>What is Node JS?</h3>
                <p>Node.js is an open-source run-time environment for creating server-side applications using
                    Javascript. It runs single-threaded, non-blocking and asynchronous programming.</p>
            </section>
            <hr>
            <section id="introduction">
                <h3>Node JS Introductory Clip</h3>

                <video width="90%" height="90%" controls>
                    <source src="{{ asset('storage/Async-Nodejs.mp4') }}" type="video/mp4">
                </video>
            </section>
            <hr>
            <section id="npm">
                <h3>Node Package Manager</h3>
                <ul>


                    <li> &gt; Used to install node programs/ modules</li>
                    <li>&gt; Easy to specify and link dependencies</li>
                    <li> &gt; Modules get installed into the node_modules folder</li>
                </ul>
                <p>
                    <b>npm install express</b> – express module will be installed in the node_modules folder <br/>
                    <b> npm intall –g express </b>– express module will be installed globally, in your system so you can
                    access it not only in that location/ directory
                </p>
            </section>
            <hr>
            <section id="modules">
                <h3>Popular Modules</h3>
                <ol>
                    <li>Express – Web development framework</li>
                    <li> Connect – Extensible HTTP server framework, the baseline for express</li>
                    <li> Socket.io – Server-side component for websockets</li>
                    <li> Pug – Template engine inspired by HAML</li>
                    <li>Mongo/ Mongoose – Wrappers to interact with MongoDB</li>

                </ol>
            </section>
            <hr>
            <section id="package.json">
                <h3> package.json file</h3>
                <ul>
                    <li>Goes in the root of your package/ application</li>
                    <li>Tells npm how your package is structured and what to do to install it</li>
                    <li> It holds things like the name of your application. version, main (entry point to the app,
                        file), author, license, dependencies
                    </li>
                </ul>
            </section>
            <hr>
            <section id="references">
                <h3>References</h3>
                Docs.oracle.com. (2018). Java Servlet Technology - The Java EE 5 Tutorial. [online] Available at:
                https://docs.oracle.com/javaee/5/tutorial/doc/bnafd.html [Accessed 6 May 2018].<br/> Docs.oracle.com.
                (2018). What Is a Servlet? - The Java EE 5 Tutorial. [online] Available at:
                https://docs.oracle.com/javaee/5/tutorial/doc/bnafe.html [Accessed 6 May 2018].<br/> Wai Chan, S. and
                Burns, E. (2017). Java™ Servlet Specification. [online] Javaee.github.io. Available at:
                https://javaee.github.io/servlet-spec/downloads/servlet-4.0/servlet-4_0_FINAL.pdf [Accessed 6 May 2018].
            </section>
            <hr>
            @if (Auth::user())
                <div style="text-align:center">
                    <a style="text-align:center" href="{{asset('storage/JavaNotes.pdf')}}" class="pdfdownload" download="JavaNotes.pdf">Download topic PDF file</a>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="page-header">
                            <h1>Comments </h1>
                        </div>
                        <div class="comments-list">
                            @foreach($comments as $comment)
                                <div>
                                    <div id="comments" class="mt-1">
                                        <div class="media-body card mt-3" id="div-comment-2">
                                            <div class="card-header bg-light">
                                                <div class="flex-center">
                                                    <h4 class="media-heading ">{{$comment->name}}</h4>
                                                </div>
                                            </div>
                                            <div class="card-block">
                                                <div class="comment-content card-text p-2">
                                                    <p>{{$comment->comment}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {!! Form::open(['route' => ['comments.store', Request::path()], 'method' => 'POST']) !!}
                {{ Form::text('name', Auth::user()->name, ['class' => 'd-none']) }}
                {{ Form::label('comment', 'Comment') }}
                <div class="row">
                    <div class="col-10">

                        {{ Form::textarea('comment', '', ['class'=> 'form-control', 'rows' => '3']) }}</div>
                    <div class="col-2">
                        {{ Form::submit('Add Comment', ['class' => 'btn btn-primary btn-block']) }}
                    </div>
                </div>
                {!! Form::close() !!}
            @endif
            <div class="row">
                <div class="d-flex justify-content-start">
                    <a id="next" class="btn btn-outline-primary" href="/php">Back</a>
                </div>
                <div class="ml-auto justify-content-end">
                    <a id="next" class="btn btn-outline-primary" href="/was">Next</a>
                </div>
            </div>
        </div>
    </div>
@endsection