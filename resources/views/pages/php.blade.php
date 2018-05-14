@extends('layouts.with-navbar')
@section('content')
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div id="sidebar-wrapper" class="sidebar-toggle">
                <ul class="sidebar-nav">
                    <li><a href="#introduction" class="left-nav-link">Introduction</a></li>
                    <li><a href="#basic-syntax">Basic Syntax</a></li>
                    <li><a href="#variables">Variables</a></li>
                    <li><a href="#data-types">Data Types</a></li>
                    <li><a href="$conditionals">Conditional Statements</a></li>
                    <li><a href="#loops">Loops</a></li>
                    <li><a href="#functions">Functions</a></li>
                    <li><a href="#errors">Handling Error Messages</a></li>
                    <li><a href="#sessions">Sessions</a></li>
                    <li><a href="#references">References</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <div class="container" id="content">
        <div class="card card-body p-5">
            <section id="introduction">
                <h3>Introduction</h3>
                <p>PHP, meaning <i>PHP: Hypertext Preprocessor</i> and originally named Personal Homepage, is a general
                    purpose scripting language
                    developed by Rasmus Lerdorf in 1994. PHP is now widely-used as a general-purpose scripting language;
                    however, it is mostly used for back-end web development and can be embedded into HTML. It is also a
                    server-side web scripting language, meaning it runs in a web server. The PHP script is executed
                    first on the server, generating the HTML which is then sent to the client.
                </p>
                <p>It is a server-side web scripting language which means, it runs in a web server. The php script is
                    executed first on the server, generating the HTML and sent to the client.</p>
                <p>PHP is a very popular scripting language, though not a very disciplined one as there are a lot of
                    inconsistencies in the language, such as function name, and no central organization governing the
                    development of PHP. Generally, there are 2 ways of coding: the Object Oriented and the Procedural
                    Paradigm.</p>
            </section>
            <hr>
            <section id="basic-syntax">
                <h3>Basic Syntax</h3>
                <strong>PHP Tags</strong>
                <p>When PHP parses a file, it looks for opening and closing tags: <code>&lt;?php and ?></code>. These
                    tells the parser the
                    beginning and end of a PHP code, and allow it to be embedded anywhere in the HTML file as well as
                    other different documents.</p>
                Example:
                <pre>
&lt;?php
    Echo “Hello Webtech People!”;
&lt;/php&gt;
                    </pre>
                <strong>Escaping from HTML</strong>
                <p>PHP can skip HTML lines in between php scripts using conditions.</p>
                Example:
                <pre>
&lt;php if ($expression == true){ ? &gt;
&lt;p>This will be shown if the condition is met.&lt;/p>
&lt;?php }else{ ?&gt;
    &lt;p>Otherwise this will be shown.&lt;/p>
&lt;?php } ?&gt;
                    </pre>
            </section>
            <hr>
            <section id="variables">
                <h3>Variables</h3>
                <p> Variables are represented by dollar sign ($) followed by the name of the variable. PHP is a loosely
                    typed language, meaning that variable types are defined at run time and can change at any time
                    during execution.
                </p>
                <h5>Predefined Variables</h5>
                <p>Predefined variables are variables that are already defined by php. </p>
                <p>
                    Superglobals are built-in variables that are always available within all scopes. These are named
                    in capital letters and starts with underscore (‘_’) after the dollar sign, with the exception of
                    the <code>$GLOBALS</code> variable.
                </p>
                <table class="table table-striped table-responsive-md">
                    <thead>
                    <td>Variable</td>
                    <td>Uses</td>
                    </thead>
                    <tr>
                        <td><code>$GLOBAL</code></td>
                        <td>This references all the variables that are in global scope.</td>
                    </tr>
                    <tr>
                        <td><code>$_SERVER</code></td>
                        <td>This is an array containing information such as headers, paths, and script locations.</td>
                    </tr>
                    <tr>
                        <td><code>$_GET</code></td>
                        <td>This is an associative array containing variables passed through the URL.</td>
                    </tr>
                    <tr>
                        <td><code>$_POST</code></td>
                        <td>This is an associative array containing variables passed via the HTTP POST method.</td>
                    <tr>
                        <td><code>$_FILES</code></td>
                        <td>This is an associative array of items uploaded via the HTTP POST method.</td>
                    </tr>
                    <tr>
                        <td><code>$_REQUEST</code></td>
                        <td>This is an associative array containing the value of HTTP Request variables, namely
                            <code>$_GET</code>, <code>$_POST</code> and <code>$_COOKIE</code>.
                        </td>
                    </tr>
                    <tr>
                        <td><code>$_SESSION</code></td>
                        <td>This is an associative array which contains session variables available to the current
                            script.
                        </td>
                    </tr>
                    <tr>
                        <td><code>$_ENV</code></td>
                        <td>This is an associative array containing the variables passed via the environment method.
                            These variables are coming from the environment under which the PHP parser is running.
                        </td>
                    </tr>
                    <tr>
                        <td><code>$_COOKIES</code></td>
                        <td>This is an associative array containing the cookies passed via HTTP Cookies.</td>
                    </tr>
                </table>
            </section>
            <hr>
            <section id="data-types">
                <h3>Data types</h3>
                <p>PHP has eight primitive data types namely: integers, floating point numbers, strings, Boolean,
                    arrays, objects, resources and NULL.</p>
                <table class="table table-responsive-md">
                    <thead>
                    <th>Data Type</th>
                    <th>Example</th>
                    </thead>
                    <tr>
                        <td>Integers</td>
                        <td>
							<pre>
&lt;?php
    $x = 8;         // decimal
    $y = -8;        // negative
    $z = 0144;      // octal
    $a = 0x3E8;     // hexadecimal
?&gt;
</pre>
                        </td>
                    </tr>
                    <tr>
                        <td>Floating Point Numbers</td>
                        <td>
							<pre>
&lt;?php
    $x = 1.5;
    $y = 1.5e5;
    $z = 1.5E-10;
?&gt;
</pre>
                        </td>
                    </tr>
                    <tr>
                        <td>Strings</td>
                        <td>
							<pre>
&lt;?php
    $hi = ‘Hello world!’;
    $hi2 = “Hello World!”;
?&gt;
</pre>
                        </td>
                    </tr>
                    <tr>
                        <td>Boolean</td>
                        <td>
							<pre>
&lt;?php
    $isValid = true;
?&gt;
</pre>
                        </td>
                    </tr>
                    <tr>
                        <td>Arrays</td>
                        <td>
							<pre>
&lt;?php
    $members = array(“Juan”, “Maria”, “Pedro”);
?&gt;
</pre>
                        </td>
                    </tr>
                    <tr>
                        <td>Objects</td>
                        <td>
							<pre>
&lt;?php
Class dog{
    public $dialogue = “Woof!”;

    function bark(){
        return $this-&gt;str;
    }
}
?&gt;
</pre>
                        </td>
                    </tr>
                    <tr>
                        <td>Resources</td>
                        <td>
							<pre>
&lt;?php
    $file = fopen(“data.txt”, “r”);
    $db = mysql_connect(“localhost”, “root”, “”);
?&gt;
</pre>
                        </td>
                    </tr>
                    <tr>
                        <td>NULL</td>
                        <td>
							<pre>
&lt;?php
    $empty = NULL;
?&gt;
</pre>
                        </td>
                    </tr>
                </table>
            </section>
            <hr>
            <section id="conditionals">
                <h3>Conditional Statements</h3>
                <p>Conditional Statements in PHP are closely similar to the loops in other programming or scripting
                    languages, such as Java and JavaScript, and it has almost the same syntax as the aforementioned
                    languages.</p>
                <table class="table table-responsive-md">
                    <thead>
                    <th>Construct</th>
                    <th>Basic Syntax</th>
                    <th>Sample Code</th>
                    </thead>
                    <tr>
                        <td>if</td>
                        <td>
                            <pre>
if(condition){
	// code
}
                            </pre>
                        </td>
                        <td>
                            <pre>
&lt;?php
    $x = 1;
    if($x < 10){
        echo "I have enough things to carry.";
    }
?>
                            </pre>
                        </td>
                    </tr>
                    <tr>
                        <td>if-else</td>
                        <td>
                            <pre>
if(condition){
// code if condition is satisfied
} else{
	// code if condition is not satisfied
}
                            </pre>
                        </td>
                        <td>
                            <pre>
&lt;?php
$x = 1;
if($x < 10){
    echo "I have enough things to carry.";
} else{
    echo "I have too much things to carry.";
}
?>
                            </pre>
                        </td>
                    </tr>
                    <tr>
                        <td>if-elseif-else</td>
                        <td>
                            <pre>
if(condition1){
    // code if condition1 is satisfied
} elseif(condition2){
    // code if condition1 is not satisfied but condition2 is
} else{
    //code if both condition1 and condition2 are not satisfied
}
                            </pre>
                        </td>
                        <td>
                            <pre>
&lt;?php
$x = 1;
if($x == 0){
    echo "I have nothing to carry.";
} elseif($x > 10){
    echo "I have too much things to carry.";
} else {
echo "I have enough things to carry.";
}
?>
                            </pre>
                        </td>
                    </tr>
                    <tr>
                        <td>Switch</td>
                        <td>
                            <pre>
switch(n){
    case label1:
        // code when n=label1
        break;
    case label2:
        // code when n=label2
    break;
    ...
    default:
        // default code if n is different from all labels
}
                            </pre>
                        </td>
                        <td>
                            <pre>
&lt;?php
switch($x){
    case 1:
        echo "I have something to carry";
    case 2:
        echo "I have two things to carry";
    case 3:
        echo "I have three things to carry";
    Default:
        echo "I have thingsto carry";
}
?>
                            </pre>
                        </td>
                    </tr>
                </table>
            </section>
            <hr>
            <section id="loops">
                <h3>Loops</h3>
                <p>
                    Like conditional statements, loops in PHP are also closely similar to loops in other programming or
                    scripting languages, such as Java and JavaScript, and has almost the same syntax as the
                    aforementioned languages.
                </p>
                <table class="table table-responsive-md">
                    <thead>
                    <th>Construct</th>
                    <th>Basic Syntax</th>
                    <th>Sample Code</th>
                    </thead>
                    <tr>
                        <td>While</td>
                        <td>
							<pre>
while(condition){
    // code
}
</pre>
                        </td>
                        <td>
							<pre>
&lt; ?php
$i = 1;
while($i &lt;= 3){
    $i++;
    echo $i . "&lt;br&gt;";
}
? &gt;
</pre>
                        </td>
                    </tr>
                    <tr>
                        <td>For</td>
                        <td>
							<pre>
for(initialization; condition; increment){
	 // code
}
</pre>
                        </td>
                        <td>
							<pre>
&lt;?php
for($i=1; $i&lt;=3; $i++){
    echo $i . "&lt;br&gt;";
}
?&gt;
</pre>
                        </td>
                    </tr>
                    <tr>
                        <td>Foreach</td>
                        <td>
							<pre>
foreach($array as $var){
    // code
}
</pre>
                        </td>
                        <td>
							<pre>
&lt;?php
$numbers = array(1, 2, 3);
foreach($numbers as $value){
    echo $value . "&lt;br&gt;";
}
?&gt;
</pre>
                        </td>
                    </tr>
                    <tr>
                        <td>Do-while</td>
                        <td>
							<pre>
do{
    // code
}while(condition);
</pre>
                        </td>
                        <td>
							<pre>
&lt;?php
$i = 1;
do{
    $i++;
    echo $i . "&lt;br&gt;";
}
while($i &lt;= 3);
?&gt;
</pre>
                        </td>
                    </tr>
                </table>
            </section>
            <hr>
            <section id="functions">
                <h3>Functions</h3>
                <p>
                    Functions, also known as methods in the context of other programming or scripting languages, are
                    blocks of code that perform specific tasks. Although PHP has its own collection of libraries that
                    can call directly in PHP scripts, user-defined functions can also be created for specific needs.
                </p>
                <b>NOTE:</b> Function names are case-sensitive thus it must start with either a letter or an underscore.
                <table class="table table-responsive-md">
                    <thead>
                    <th>Basic Syntax</th>
                    <th style="padding-left:30px">Sample Code</th>
                    </thead>
                    <tr>
                        <td>
								<pre>
function funcName(){
    //code to be executed
}
</pre>
                        </td>
                        <td>
								<pre>
function sayHello(){
    echo "Hello dear user!";
}
</pre>
                        </td>
                    </tr>
                </table>
                <p>
                    Parameters can be specified and passed on to a function to be used as arguments for a block of code
                    during run-time.
                </p>
                <table class="table table-responsive-md">
                    <thead>
                    <th>Basic Syntax</th>
                    <th>Sample Code</th>
                    </thead>
                    <tr>
                        <td>
								<pre>
function funcName($param1, $param2){
	// code to be executed
}
</pre>
                        </td>
                        <td>
								<pre>
function multiply($factor1, $factor2){
    $product = $factor1 * $factor2;
    return $sum;
}
</pre>
                        </td>
                    </tr>
                </table>
                <p>
                    Optional parameters can be passed with default values into a function. This way, a parameter may or
                    may not be specified when calling its associated function.
                </p>
                <table class="table table-responsive-md">
                    <tr>
                        <th>Basic Syntax</th>
                        <th style="padding-left:30px">Sample Code</th>
                    </tr>
                    <tr>
                        <td>
								<pre>
function funcName($param1, $param2){
	// code to be executed
}
</pre>
                        </td>
                        <td>
								<pre>
function incrementBy($num1, $incrementNum2=1){
    $result = $num1 + $num22;
    return $result;
}

</pre>
                        </td>
                    </tr>
                </table>
            </section>
            <hr>
            <section id="errors">
                <h3>Handling Error Messages</h3>
                <p>
                    PHP has built-in functions for handling errors. Custom error handling functions can also be made
                    with also exception error handling. When handling errors within PHP code, the errors that occur may
                    be either displayed, logged, acted on, or ignored. Generated error reports can be contained in
                    different possible locations: in the php.ini file, the .htaccess file in the web browser, or within
                    the PHP code.
                </p>
                <p>
                    The error reporting level can be set using the <code>error_reporting</code> variable in the php .ini
                    file, such as <code>E_ALL</code> or<code>E_STRICT</code>. It can also be set during run-time using
                    the <code>error_reporting()</code> function (i.e. error_reporting<code>(E_ALL)</code>).
                </p>
                <table class="table table-responsive-md">
                    <thead>
                    <th>Error Level</th>
                    <th>Value</th>
                    <th>Description</th>
                    </thead>
                    <tr>
                        <td><code>E_ERROR</code></td>
                        <td>1</td>
                        <td>
                            A fatal run-time error that stops the execution of the script immediately.
                        </td>
                    </tr>
                    <tr>
                        <td><code>E_WARNING</code></td>
                        <td>2</td>
                        <td>A non-fatal run-time error where most errors fall into this
                            category. This, however, doesn’t does not the execution of the script.
                        </td>
                    </tr>
                    <tr>
                        <td><code>E_NOTICE</code></td>
                        <td>8</td>
                        <td>
                            A run-time notice that indicates a possible error that had been encountered.
                        </td>
                    </tr>

                    <tr>
                        <td><code>E_STRICT</code></td>
                        <td>2048</td>
                        <td> Although this is not strictly an error, it is triggered when PHP
                            encounters any code that may cause future problems or forward incompatibilities.
                        </td>
                    </tr>
                    <tr>
                        <td><code>E_ALL</code></td>
                        <td>8191</td>
                        <td>
                            This indicates that all errors and warnings are to be displayed except for
                            <code>E_STRICT</code> prior to PHP 5.4.0
                        </td>
                    </tr>
                </table>
                <p>The most basic way of handling errors in PHP is by using the <code>die()</code> function, which
                    simply displays a custom error message and terminates the currently running script.
                </p>
                <p>
                    Example of a basic file opener error handler that handles errors regarding non-existent files:
                </p>
                <pre>
&lt;?php
if(file_exists("dummy.txt")){
    $file = fopen("dummy.txt", "wr");
} else{
    die("File does not exist. Terminating script……");
}
?>
                </pre>
                <hr>
            </section>
            <section id="sessions">
                <h3>Sessions</h3>
                <p>
                    Normally, accessing a website causes data to be stored using cookies which, in turn, are stored in
                    the user’s computer. Cookies are basically small pieces of data sent by the server to be stored in a
                    user’s browser, which may send it back to the same server with the next request. It is typically
                    used to tell if two requests came from the same browser (MDN Webdocs).
                </p>
                <p>
                    Since cookies are susceptible to web attacks and can negatively affect a website’s performance, PHP
                    sessions solve these issues as it stores data in the server instead. In a session-based environment,
                    every user is identified through a unique number called the session identifier, or SID, which is
                    used to link each user to their own information, like emails and the lik, in the server
                    (TutorialRepublic).
                </p>
                <p>
                    One example of the use of sessions is in login forms. he basic idea of this is that after a user
                    submits a login form, and the password has been verified, the server creates a session variable for
                    the user. For every page load that the user does within the website from then on, the server will
                    keep checking the session variable. Once the user logs out of the website, the session is destroyed
                    (Morris, J., 2017).
                </p>
                <p>
                    Data are stored in between requests in the <code>$_SESSION</code> superglobal array.
                </p>
                <br/> Example:
                <pre>
&lt;?php
    // Starting session
    session_start();
    // Storing session data
    $_SESSION["username"] = "user1";
??&gt;
                    </pre>
                <p>
                    When a site with session support is accessed, PHP will either check automatically or on request
                    whether a specific session ID has been sent with the request, if <code>session.auto_start</code> is
                    set to 1 or explicitly through <code>session_start()</code> respectively (php.net).
                </p>
                <p>
                    To remove certain session data, you can simply use the unset function with the corresponding key
                    of the <code>$_SESSION</code> array.
                </p>
                Example:
                <pre>
&lt;?php
    // Starting session
    session_start();
    // Removing session data
    if(isset($_SESSION["username"])){
        unset($_SESSION["username"]);
}
?&gt;
                </pre>
                <p>
                    However, if you want to completely remove the session data for a user, simply call the
                    <code>session_destroy()</code>function to destroy the session. </p>
                Sample Code:
                <pre>
&lt;?php
// Starting session
session_start();
// Storing session data
$_SESSION["username"] = "user1";
// Removing session data
if(isset($_SESSION["username"])){
    unset($_SESSION["username"]);
}
// Destroying session
session_destroy();
?&gt;
                </pre>
            </section>
            <hr>
            <section id="references">
                <h3>References</h3>
                MDN Web Docs. (2018). HTTP cookies. [online] Available at:
                https://developer.mozilla.org/en-US/docs/Web/HTTP/Cookies [Accessed 11 May 2018].<br> Morris, J. (2018).
                How to Build a PHP Login Form Using Sessions - John Morris. [online] John Morris. Available at:
                https://www.johnmorrisonline.com/build-php-login-form-using-sessions/ [Accessed 11 May 2018].<br>
                Php.net. (2018). PHP: Introduction - Manual. [online] Available at:
                http://php.net/manual/en/intro.session.php [Accessed 11 May 2018].<br> Tutorialrepublic.com. (2018). How
                to Create, Access and Destroy Sessions in PHP - Tutorial Republic. [online] Available at:
                https://www.tutorialrepublic.com/php-tutorial/php-sessions.php [Accessed 11 May 2018].<br>
                Tutorialrepublic.com. (2018). PHP If, Else and Elseif Conditional Statements - Tutorial Republic.
                [online] Available at: https://www.tutorialrepublic.com/php-tutorial/php-if-else-statements.php
                [Accessed 11 May 2018]. <br> Tutorialrepublic.com. (2018). PHP Switch Case Conditional Statements -
                Tutorial Republic. [online] Available at:
                https://www.tutorialrepublic.com/php-tutorial/php-switch-case-statements.php [Accessed 11 May 2018].<br>
                Tutorialrepublic.com. (2018). PHP While, Do-While, For and Foreach Loops - Tutorial Republic. [online]
                Available at: https://www.tutorialrepublic.com/php-tutorial/php-loops.php [Accessed 11 May 2018].<br>
            </section>
            <hr>
            @if (Auth::user())
                <div style="text-align:center">
                    <a style="text-align:center" href="{{asset('storage/PHPNotes.pdf')}}" class="pdfdownload"
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
                    <a id="next" class="btn btn-outline-primary" href="/java">Back</a>
                </div>
                <div class="ml-auto justify-content-end">
                    <a id="next" class="btn btn-outline-primary" href="/node">Next</a>
                </div>
            </div>
        </div>
    </div>
@endsection