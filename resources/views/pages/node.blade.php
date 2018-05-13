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
                    <li><a href="#references">References</a></li
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
                    <source src="../storage/app/public/Async-Nodejs.mp4" type="video/mp4">
                </video>
            </section>
            <hr>
            <section id="npm">
                <h3>Node Package Manager</h3>
                <ul>


                    <li> Used to install node programs/ modules</li>
                    <li>Easy to specify and link dependencies</li>
                    <li>  Modules get installed into the node_modules folder</li>
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
                Foundation, N. (2018). Node.js. [online] Node.js. Available at: https://nodejs.org/en/ [Accessed 11 May 2018]. <br>
                Heller, M. (2018). What is Node.js? The JavaScript runtime explained. [online] InfoWorld. Available at: https://www.infoworld.com/article/3210589/node-js/what-is-nodejs-javascript-runtime-explained.html [Accessed 11 May 2018].<br>


            </section>
            <hr>
            @if (Auth::user())
                  <div style="text-align:center">
     
                      <a href="{{asset('storage/NodeNotes.pdf')}}" class="pdfdownload" download="NodeNotes.pdf">Download topic PDF file</a>
                </div>
                <hr>
            @endif
            <div class="row">
                  <div class="d-flex justify-content-start">
                    <a id="" class="btn btn-outline-primary" href="{{route('php')}}">Back</a>
                </div>
                <div class="ml-auto justify-content-end">
                    <a id="next" class="btn btn-outline-primary" href="{{route('was')}}">Next</a>
                </div>
            </div>
        </div>
    </div>
@endsection