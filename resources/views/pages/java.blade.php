@extends('layouts.with-navbar')
@section('content')
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div id="sidebar-wrapper" class="sidebar-toggle">
                <ul class="sidebar-nav">
                    <li><a href="#intro">Introduction</a></li>
                    <li><a href="#web-apps">Web Applications</a></li>
                    <li><a href="#applets">Applets</a></li>
                    <li><a href="#java-servlets">Java Servlets</a></li>
                    <li><a href="#servlet-lifecycle">Servlet Lifecycle</a></li>
                    <li><a href="#http-servlets">HTTP Servlets</a></li>
                    <li><a href="#jsp">Java Server Pages</a></li>
                    <li><a href="#references">References</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" id="content">
        <div class="card card-body p-5">
            <section id="intro">
                <h3>Introduction</h3>
                <p>Server-side technologies refer to the various applications, scripts, operations, etc., that are
                    executed within the web server itself. They are mainly designed for developing applications that run
                    in the background, similarly to client-side technologies, which are executed on the client’s
                    browser. The way each technology handles data, or clients’ input, is what sets them apart: for
                    example, manipulating databases are reserved for server-side technologies as there is a direct
                    connection between the database and the server.</p>
                <p>Java EE (Enterprise Edition) is commonly used within the industry for the development of Java
                    applications.</p>
            </section>
            <section id="web-apps">
                <h3>Web Applications</h3>
                <p>A web application, or web app, is an application that users run through their browsers. Common
                    examples of web applications are webmails (e.g. Google Mail, Yahoo Mail), online stores (e.g.
                    Lazada) and social media sites (e.g. Facebook, Instagram, Twitter). Users run web apps by entering
                    its domain name (e.g. facebook.com, gmail.com) into their browser URL bar. When this happens, the
                    browser connects to the server hosting the application, and displays whatever information it has
                    received from the server.
                </p>
                <p>
                    Web applications grew in popularity because of the benefits it provides to both customers and
                    service providers. Service providers now have central management of their applications, allowing for
                    easier, cheaper upgrades, among other things, while customers can check out their services and avail
                    it no matter where they are. Most web apps, if not all, focuses on an application that provides the
                    best possible user interaction and user experience, which may eventually lead to more revenue. To
                    make this happen, it is recommended for web apps to have dynamic content.
                </p>
            </section>
            <hr>
            <section id="applets">
                <h3>Applets</h3>
                <p>
                    <i>Applets</i> are one of the earliest attempts toward this goal, focusing on using the client
                    platform to deliver dynamic user experiences. At the same time, developers also used the server
                    platform for the same purpose. Initially, Common Gateway Interface (CGI) scripts were the main
                    technology used to generate dynamic content. Although widely used, CGI scripting technology has a
                    number of shortcomings that includes platform dependence and lack of scalability. To address these
                    limitations, Java Servlet technology was created as a portable way to provide dynamic, user-oriented
                    content.
                </p>
            </section>
            <hr>
            <section id="java-servlets">
                <h3>Java Servlets (version 4.0)</h3>
                <p>
                    A <i>servlet</i> is a Java programming language class that is used to extend the capabilities of
                    servers that host applications accessed by means of a request-response programming model. Although
                    servlets can respond to any type of request, they are commonly used to extend the applications
                    hosted by web servers. For such applications, Java Servlet technology defines HTTP-specific servlet
                    classes.
                </p>
                <p>
                    The <i>javax.servlet</i> and <i>javax.servlet.http</i> packages provide interfaces and classes
                    for writing servlets. All servlets must implement the <i>Servlet</i> interface, which defines
                    life-cycle methods. When implementing a generic service, you can use or extend the
                    <i>GenericServlet</i> class provided by the Java Servlet API. The <i>HttpServlet</i> class
                    provides methods, such as <i>doGet</i> and <i>doPost</i>, for handling HTTP-specific services.
                </p>
                <h3>Java Servlet 3.1 (Java EE 7)</h3>
                <p>Servlets, which are managed by a container, are used as web components to generate dynamic content.
                    One function of containers, also known as servlet engines, is to manage the life cycle of a
                    servlet.
                </p>
                <p>
                    When a browser sends an HTTP request to the web server, the server will send the request to the
                    servlet container. From there, it will determine which servlet to invoke. When the servlet is done
                    processing the request, the servlet container ensures that response is properly flushed, and then
                    returns the control back to the Web server.
                </p>
            </section>
            <hr>
            <section id="servlet-lifecycle">
                <h3>Servlet Lifecycle</h3>
                <p>
                    The life cycle of a servlet has 4 stages: instantiation, initialization, request handling, and
                    destruction.
                </p>
                <div class="row">
                    <div class="col-md">
                        <ol>
                            <li>
                                <b>Instantiation</b>
                                <ul>
                                    <li>
                                        the constructor call
                                    </li>
                                    <li>
                                        creates an instance of the servlet to service client requests
                                    </li>
                                    <li>
                                        invoked implicitly by the servlet container when the servlet is called upon
                                        to service client request and no instance currently exists
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>Initialization</b>
                                <ul>
                                    <li>
                                        <code>init()</code> method
                                    </li>
                                    <li>
                                        invoked only once intended for any startup init code
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>Request Handling</b>
                                <ul>
                                    <li>
                                        <code>service()</code> method
                                    </li>
                                    <li>
                                        invoked for each client request
                                    </li>
                                    <li>
                                        performs whatever logic to serve request and generate response
                                    </li>
                                    <li>
                                        multi-threaded service instance; 'thread safe'
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>Destruction</b>
                                <ul>
                                    <li>
                                        <code>destroy()</code> method
                                    </li>
                                    <li>invoked before servlet instance is 'unloaded', housekeeping cleanup code</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                    <div class="col-md">
                        <img class="img-fluid" src="{{ asset('storage/img/LifeCycle.png') }}" alt="Life cycle">
                    </div>
                </div>
            </section>
            <hr>
            <section id="http-servlets">
                <h3>HTTP Servlets</h3>
                <p>HTTP Servlets handles HTTP requests and generates responses. Hosted in a web container, it takes care
                    of converting requests to responses. The service() method call is routed to a doXXX() handler
                    method</p>
                <div class="row">
                    <div class="col-md-4"><p><b>doXXX</b></p>
                        <p>List of doXXX calls:</p>
                        <ul>
                            <li>doGet</li>
                            <li>doPost</li>
                            <li>doPut</li>
                            <li>doDelete</li>
                            <li>doTrace</li>
                            <li>doOptions</li>
                            <li>doHead</li>
                        </ul>
                        <p>The doXXX call requires two arguments:</p>
                        <ol>
                            <li>HTTPServletRequest</li>
                            <li>HTTPServletResponse</li>
                        </ol>
                    </div>
                    <div class="col-md-8"><img src="{{ asset('storage/img/http-servlet.png') }}" class="img-fluid"alt=""></div>
                </div>
                <div>
                    <p>
                        As shown in the diagram above, the client or the web browser makes requests of any type, which
                        the server sends off to the servlet’s service() method. This method routes the requests to the
                        doXXX() handler method for each HTTP request type.
                    </p>
                    <p>Methods of HTTP Servlet class</p>
                    <ol>
                        <li>protected void doDelete (HttpServletRequest req, HttpServletResponse resp)</li>
                        <li>protected void doGet (HttpServletRequest req, HttpServletResponse resp)</li>
                        <li>protected void doHead (HttpServletRequest req, HttpServletResponse resp)</li>
                        <li>protected void doOptions (HttpServletRequest req, HttpServletResponse resp)</li>
                        <li>protected void doPost (HttpServletRequest req, HttpServletResponse resp)</li>
                        <li>protected void doPut (HttpServletRequest req, HttpServletResponse resp)</li>
                        <li>protected void doTrace (HttpServletRequest req, HttpServletResponse resp)</li>
                        <li>protected long getLastModified (HttpServletRequest req)</li>
                        <li>
                            protected void service (HttpServletRequest req, HttpServletResponse resp)<br>
                            - mReceived the Http request from clients
                        </li>
                        <li>
                            void service (ServletRequest req, ServletResponse resp)<br>
                            - Forwards client request to the protected service method
                        </li>
                    </ol>
                </div>
            </section>
            <hr>
            <section id="jsp">
                <h3>Java Server Pages</h3>
                <p>
                    Java Server Pages, or JSP, is a Java view technology under Oracle’s Java EE (Enterprise Edition) for
                    web development. Compared to Java Servlets, which is comprised of HTML code within a Java program,
                    JSP allows Java code to be inserted into HTML or XML pages. The codes can then be run to generate
                    dynamic content embedded within web pages, as well as connect to external databases.
                </p>
                <p>
                    Apache Tomcat and JDK (Java Software Development Kit) should be installed as they are required in
                    order to run JSP.
                </p>
                <p>
                    When a client sends a request over the internet, the web server compiles files with the .jsp
                    extension, converting them into executable Java Servlets before serving or processing client HTTP
                    requests. (Note: it first checks the page; if the page has already been compiled and has no
                    modification from its last compilation, then conversion/compilation is not necessary.) This produces
                    a document, like a HTML page, which is then handled like any other page or servlet and sent back to
                    the client with a HTTP response.
                </p>
                <p>The <strong>jspInit()</strong> method is invoked to initialize external connections, like with
                    databases or files, before running the servlet. The <strong>_jspService()</strong> method is invoked
                    when there is a need for responding to HTTP requests. It dies with <strong>jspDestroy()</strong>.
                </p>
                <section>
                    <h3>Elements: </h3>
                    <h4>Actions</h4>
                    <strong>Uses: </strong>inserts a file, reuses JavaBeans, forwards, generates html <br>
                    <strong>Syntax: </strong> <code>&lt;jsp:actionName attrib="value" /></code>
                    <table class="table table-striped table-responsive-md">
                        <thead>
                        <th>Action Name</th>
                        <th>Notes</th>
                        </thead>
                        <tr>
                            <td>include</td>
                            <td>called when page is requested</td>
                        </tr>
                        <tr>
                            <td>useBean</td>
                            <td>
                                looks for or creates object <br>
                                can use setProperty/getProperty only after this has been called
                            </td>
                        </tr>
                        <tr>
                            <td>setProperty</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>getProperty</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>forward</td>
                            <td>can only forward to another page or servlet</td>
                        </tr>
                        <tr>
                            <td>plugin</td>
                            <td>inserts java components</td>
                        </tr>
                        <tr>
                            <td>element</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>attrib</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>body</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>text</td>
                            <td>write template text</td>
                        </tr>
                    </table>

                    <h4>Directives</h4>
                    <strong>Uses: </strong>Instructions for how to translate and execute JSP <br>
                    <strong>Syntax: </strong> <code>&lt;%@ directiveName attrib=”value” %></code>
                    <p>List of directive Names:</p>
                    <ul>
                        <li>page(for container)</li>
                        <li>include (called when translated into servlet - usually java packages)</li>
                        <li>taglib</li>
                    </ul>
                    <p>ex:</p>
                    <p><b>handling jsp page errors: </b><br><code>&lt;%@ page errorPage="filename" %></code></p>
                    <p>
                        <b>static html:</b><br>
                        <code>&lt;%@ page contentType="text/html" &></code><br>
                        <code>&lt;%@ page pageEncoding="utf-8" %></code>
                    </p>
                    <h4>Expressions</h4>
                    <p><strong>Syntax: </strong> <code>&lt;%= expression %></code><br> ex:<code>&lt;%= new
                            java.util.Date() %></code></p>
                    <h4>Scriptlets</h4>
                    <p><strong>Uses:</strong> inserts any Java code within the JSP file</p>
                    <p><strong>Syntax: </strong> <code>&lt;%= code %></code></p>
                    <h4>Declarations</h4>
                    <p><strong>Syntax: </strong><code>&lt;! code %></code></p>
                    <p>ex: <code>&lt;! int i = 0; %></code></p>
                    <h4>Comments</h4>
                    <p><strong>Syntax: </strong>&lt;%-- comment --%></p>
                    <h4>Pre-defined Objects</h4>
                    <p>ex:
                    <ul>
                        <li>request (HTTPServletRequest)</li>
                        <li>response (HTTPServletResponse)</li>
                        <li>out (PrintWriter)</li>
                        <li>session (HTTPSession)</li>
                        <li>application (ServletContext)</li>
                        <li>page (this)</li>
                        <li>exception</li>
                    </ul>
                    </p>
                </section>
                <hr>
                <div class="container">
                <button id="references" type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">View Reference</button>
                <div id="demo" class="collapse">
                <section >
                    <li>Docs.oracle.com. (2018). Java Servlet Technology - The Java EE 5 Tutorial. [online] Available at:
                    https://docs.oracle.com/javaee/5/tutorial/doc/bnafd.html [Accessed 6 May 2018].<br/>
                    <li>Docs.oracle.com. (2018). What Is a Servlet? - The Java EE 5 Tutorial. [online] Available at:
                    https://docs.oracle.com/javaee/5/tutorial/doc/bnafe.html [Accessed 6 May 2018].<br/>
                    <li>Wai Chan, S. and Burns, E. (2017). Java™ Servlet Specification. [online] Javaee.github.io. Available
                    at: https://javaee.github.io/servlet-spec/downloads/servlet-4.0/servlet-4_0_FINAL.pdf [Accessed 6
                    May 2018].
                </div>
                </div>
                <hr>
                @if (Auth::user())
                    <div style="text-align:center">
                        <a style="text-align:center" href="{{asset('storage/JavaNotes.pdf')}}" class="pdfdownload"
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
                    <hr>
                @endif
                <div class="row">
                    <div class="d-flex justify-content-start">
                        <a id="next" class="btn btn-outline-primary" href="/">Home</a>
                    </div>
                    <div class="ml-auto justify-content-end">
                        <a id="next" class="btn btn-outline-primary" href="/php">Next</a>
                    </div>
                </div>
        </div>
    </div>
@endsection