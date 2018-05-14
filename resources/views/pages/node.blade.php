@extends('layouts.with-navbar')
@section('content')
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div id="sidebar-wrapper" class="sidebar-toggle">
                <ul class="sidebar-nav">
                    <li><a href="#what-is-nodejs" class="left-nav-link">What is Node JS?</a></li>
                    <li><a href="#introduction">Node JS Introductory Clip</a></li>
                    <li><a href="#package.json">JSON Package</a></li>
                    <li><a href="#modules">Popular Modules</a></li>
                    <li><a href="#references">References</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <div class="container" id="content">
        <div class="card card-body p-5">
            <section id="what-is-nodejs">
                <h3>What is Node JS?</h3>
                <p>Node.js is an open-source run-time environment developed by Ryan Dahl in 2009, used for creating
                    server-side applications using Javascript. This JavaScript framework is built on Google Chrome’s
                    JavaScript Engine, otherwise known as V8 Engine, and runs on single-threaded, non-blocking and
                    asynchronous programming.</p>
            </section>
            <hr>
            <section id="introduction">
                <h3>Node JS Introductory Clip</h3>
                <video width="90%" height="90%" controls>
                    <source src="{{ asset('storage/Async-Nodejs.mp4') }}" type="video/mp4">
                </video>
            </section>
            <hr>
            <section id="package.json">
                <h3>JSON Package</h3>
                <p>
                    The package.js file is a required file for a Node.js project and can be initialized from the command
                    line using <code>npm init</code>. This goes in the root of your application, and tells npm how your
                    package is structured and what to do to install it. The file also contains details of your
                    application, such as its name, version, entry point to the app, author, license, and dependencies.
                </p>
            </section>
            <hr>
            <section id="modules">
                <h3>Modules</h3>
                <p>
                    Node.js Package Manager, or <code>npm</code>, is used to install node modules created by the
                    community (all modules can be searched for on npmjs.com, and are installed into the node_modules
                    folder). If dependencies have already been specified in the package.json file, npm will check the
                    file for the list of dependencies before downloading it with <code>npm install</code>.
                </p>
                <strong>Downloading/installing a Module</strong><br>
                <dl class="row">
                    <dt class="col-sm-3"><code>npm install moduleName</code></dt>
                    <dd class="col-sm-9">The module will be installed in the node_modules folder.</dd>

                    <dt class="col-sm-3"><code>npm install moduleName -g</code></dt>
                    <dd class="col-sm-9">The module will be installed globally in your system, so you can access it not
                        only from the directory of the project.
                    </dd>

                    <dt class="col-sm-3"><code>npm install moduleName --save</code></dt>
                    <dd class="col-sm-9">The module will be installed, and it will be written as a dependency in the
                        package.json file.
                    </dd>
                </dl>
                <h4>Popular Modules</h4>
                <ol>
                    <li>Express - Web development framework</li>
                    <li>Connect - Extensible HTTP server framework, the baseline for express</li>
                    <li>Socket.io - Server-side component for websockets</li>
                    <li>Pug - Template engine inspired by HAML</li>
                    <li>Mongo/Mongoose - Wrappers to Interact with MongoDB</li>
                </ol>
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
                    <a style="text-align:center" href="{{asset('storage/NodeJSNotes.pdf')}}" class="pdfdownload"
                       download="JavaNotes.pdf">Download topic PDF file</a>
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