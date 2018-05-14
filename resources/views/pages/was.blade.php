@extends('layouts.with-navbar')
@section('content')
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div id="sidebar-wrapper" class="sidebar-toggle">
                <ul class="sidebar-nav">
                    <li><a href="#what-is-was" class="left-nav-link">What is WAS?</a></li>
                    <li><a href="#sample-case">Sample Case</a></li>
                    <li><a href="#data-pri-act">Data Privacy Act</a></li>
                    <li><a href="#was">Web Application Security (WAS)</a></li>
                    <li><a href="#bA">Broken Authentication</a></li>
                    <li><a href="#bb">Using Components with Known Vulnerabilities</a></li>
                    <li><a href="#bc">Insufficient Logging & Monitoring</a></li>
                    <li><a href="#xss">Cross-Site Scripting</a></li>
                    <li><a href="#references">References</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" id="content">
        <div class="card card-body p-5">
            <section id="what-is-was">
                <h3>What is Web Application Security (WAS)?</h3>
                <p>WAS is a security on websites, applications and web services. WAS was basically based on
                    applications but was later then applied to the internet and its web systems.</p>
            </section>
            <hr>
            <section id="sample-case">
                <p>If you frequently order food through the website of <img src="{{asset('storage/img/jollibee.png')
                }}" alt="Jollibee">, you’re probably disappointed to have seen the picture below when you opened their
                    website to order <img src="{{asset('storage/img/burger.png')}}" alt=""><img src="{{asset
                    ('storage/img/coke.jpg')}}" alt=""><img src="{{asset('storage/img/fries.png')}}" alt="">.</p>
                <img src="{{ asset('storage/img/jolli-web.PNG') }}" alt="Jollibee Website"
                     class="img-fluid justify-content-center">
                <hr>
                <h3>Sample Case</h3>
                <p>If you frequently order food from jollibeedelivery.com which the official website of Jollibee you’re
                    probably disappointed to have seen the picture below when you opened their website to order
                    food.</p>
                <img src="{{ asset('storage/img/jolli.JPG') }}" class="img-fluid d-block">
                <br>
                <i>Image by: ABS-CBN</i>
                <br>
                <p>The reason behind this is the order given by the National Privacy Commission which ordered Jollibee
                    to suspend its delivery website due to its vulnerabilities. The vulnerability issues are the
                    unupdated database protection of the website and unencrypted information like personal customer
                    information. In addition, the website is also vulnerable to unauthorized access. (ABS-CBN News,
                    2018). </p>
                <p>
                    Since the website is vulnerable to various kinds of malicious attacks, hackers may directly
                    victimize customers of the Jollibee delivery website. Hackers may look into personal information of
                    the customers, commit identity theft and use it as means to conduct other fraudulent attacks. This
                    vulnerability also affects the business owners since it might leave a bad image for the business,
                    making customers not to patronize Jollibee. </p>
                <p>
                    Because of the possible negative impact an unsecure application , or website might cause to both
                    business and consumer/customer, the national privacy commission promulgated the “Data Privacy Act of
                    2010”. </p>
            </section>
            <hr>
            <section id="data-pri-act">
                <img src="{{ asset('storage/img/dataprivacy.png') }}" class="img-fluid d-block">
                <p class="m-5">The Data Privacy Act was enforced in order to ensure the presence of security in web
                    applications.
                </p>
                <p class="m-5">
                    <i>The National Privacy Commission is the country’s privacy watchdog; an independent body mandated
                        to
                        administer and implement the Data Privacy Act of 2012, and to monitor and ensure compliance of
                        the
                        country with international standards set for data protection. (NPC)</i>
                </p>
            </section>
            <hr>
            <section id="was">
                <h3>Web Application Security (WAS)</h3>
                <p>
                    WAS involves the protection of web applications on the world wide web, particularly its codes which
                    may contain vulnerabilities or risks that can be exploited for malicious purposes. Considering how
                    almost all online services require the use of web applications, this can greatly affect the
                    applications’ functionalities and the people using them.
                </p>
                <p>
                    In relation to web application security, the Open Web Application Security publishes their top 10
                    list of Application Security Risks. Their most recent list is the Application Security Risk for
                    2017.
                </p>
                <h4>Top 10 Open Web Application Security Project (OWASP) 2k17</h4>
                <ul>
                    <li> A1 - Injection</li>
                    <li><a href="#bA">A2 -Broken Authentication</a></li>
                    <li>A3 – 2017-Sensitive Data Exposure</li>
                    <li>A4 – XML External Entities (XXE)</li>
                    <li>A5 – Broken Access Control</li>
                    <li> A6 – Security Misconfiguration</li>
                    <li><a href="#xss">A7 –Cross-Site Scripting</a></li>
                    <li>A8 – Insecure Deserialization</li>
                    <li><a href="#bb">A9 –Using Components with Known Vulnerabilities</a></li>
                    <li><a href="#bc">A10 –Insufficient Logging & Monitoring</a></li>
                </ul>
                <div class="jumbotron">
                    <strong>Note :</strong>
                    <p>
                        For this lesson, we will be focusing on 3 web application security. The remaining security risks
                        will be covered soon. Come back after a week if you want to know more about the reamining
                        security risk.<img src="{{asset('storage/img/smiley.png')}}" alt="">
                    </p>
                </div>
                For in depth explanation please follow this link : <a
                        href="https://www.owasp.org/index.php/Top_10-2017_Top_10">https://www.owasp.org/index.php/Top_10-2017_Top_10</a>
                <p>For this lesson, we will be focusing on 3 web application security. The remaining security risks will
                    be covered soon. Come back after a week if you want to know more about the reamining security
                    risk. </p>
            </section>

            <hr>
            <section id="bA">
                <h3>Broken authentication</h3>
                <p>
                    Broken authentication is a security risk that occurs when a hacker makes use of valid combinations
                    of compromised account credentials, and try those combinations to enter a login page or any page
                    that requires authentication, posing as an authentic user. Broken authentication is the result of
                    poor authentication implementations. For example, session IDs are explicitly embedded in URLs, and
                    unencrypted user data are transmitted to servers. Functions such as the Reset or Forgot Password are
                    mostly exploited in this vulnerability, and are used by the attacker in order to retrieve the
                    details of an account.
                </p>
                <b>Mitigation Tips</b>
                <ol>
                    <li>Setting strong passwords at least eight characters long with the use of special
                        characters and
                        uppercase letters. Temporarily deny login service if there were too many failed
                        attempts.
                    </li>
                    <li>Set session timeouts when there is no user activity.</li>
                    <li>When a wrong credential is entered, there should be an output saying “Invalid
                        password/username”
                        instead of “Invalid password” or “Invalid username”.
                    </li>
                    <li>Login details should be encrypted or hashed when placed and transmitted to the
                        database.
                    </li>
                    <li>When using a PC, remember to logout the account instead of just closing the web
                        browser.
                    </li>
                </ol>
                <div class="row p-4">
                    <div class="col">
                        <img src="{{asset('storage/img/brokenAuth.png')}}" alt="Broken Authentication"
                             class="img-fluid">
                    </div>
                    <div class="col">
                        <img src="{{asset('storage/img/strongPassword.png')}}" alt="Strong Password" class="img-fluid">
                    </div>
                </div>
                <b>Sample Case</b>
                <p>
                    A case of broken authentication occurred between October and December 2015, where nearly 9,000 user
                    accounts of an online tax preparation service company were compromised. The attack is a
                    credential-stuffing attack where hackers obtained a multitude of username and password credentials,
                    and used them to enter the accounts of TaxSlayer customers.
                </p>
                <p>
                    TaxSlayer LLS only noticed the attack in January 2016, when a customer of complained that hackers
                    used their information to obtain tax refunds by filing fake tax returns with altered bank routing
                    numbers directed to the hackers (Feigelson, J., & Bucher, W.).
                </p>
                <p>
                    In order to end the attack, the TaxSlayer imposed multi-factor authentication requirements. The
                    Federal Trade Commission, who is working on this issue, filed their final approval of settlement
                    with TaxSlayer LLC on November 8, 2017, containing the rules TaxSlayer must follow to continue its
                    services (FTC, 2018).
                </p>
            </section>
            <hr>
            <section id="bb">
                <h3>Using Components with Known Vulnerabilities</h3>
                <p>
                    Codes nowadays tend to link to open-source external components such as modules, libraries, and
                    frameworks. Most of the time, no standards or requisites are given which means that anyone can
                    create, use, or edit the components as they wish. This poses a security risk, especially for
                    companies or developers that use these components.
                </p>
                <p>
                    Not every component can affect different applications in the same way. This solely depends on how
                    deeply embedded these components are inside the software and programs that use them. As these
                    components run on the same access level as the application that uses them, attackers can exploit
                    vulnerable components to access sensitive information and perform tasks that can compromise the
                    companies that use these components.
                </p>
                <b>Mitigation Tips</b>
                <ol>
                    <li>Proper management of all dependencies and libraries are required</li>
                    <li>Components should be analyzed for insecure codes (such as codes unintentionally allowing users
                        to access private files or even sensitve compueter processes)
                        remove or update old library components that may potentially be vulnerable
                    </li>
                    <li> All components and/or sources should be checked for approved licenses ( indicate that they have
                        already been reviewed for security)
                    </li>
                    <li>Unapproved libraries should be removed; otherwise, if the companies will decide to take the risk
                        of using them, then there should be restricted use.
                    </li>
                </ol>
                <div class="col">
                    <img src="{{asset('storage/img/InsufficientLogging.png')}}" alt="Insufficient Logging m-4"
                         class="img-fluid">
                </div>
                <b>Sample Case</b>
                <p>One particular case involving this security risk involves a hacking incident that happened on a
                    blogging website used by Thomson Reuters. Damages to the blog site includes false posts, which
                    includes a false interview with a Syrian rebel army leader. Following the attack was a security
                    breach on his twitter account, which the hackers have taken control of. The website was taken back
                    after some time.</p>
                <p> According to the security team of WordPress, the hacking happened because Reuters was using an
                    outdated version of Wordpress, which is publicly known for having a lot of security issues. The
                    reason why websites, like the blogging website being used by Reuters, are prone to attacks could be
                    because customers assume that vendors have already taken care of the security issues, and they find
                    no need for updates.
                </p>
            </section>
            <hr>
            <section id="bc">
                <h3>Insufficient Logging & Monitoring</h3>

                <p>
                    Insufficient logging and monitoring is a situation where some user activities within the website are
                    not recorded. It is also the case when all user activities are logged but important details such as
                    activity, time in, time out, or even frequency of visits are not recorded.
                </p>
                <p>
                    Not being able to track any suspicious activities or sensitive actions happening within an
                    application or a system, such as change of passwords, financial transactions, or not being able to
                    store logs, properly give way for attackers to prevent or damage security controls.
                </p>
                <p>
                    The lack of logs causes security breaches to remain undetected, which allows attackers to have more
                    time to escalate further into the application or the system, and to further exploit stolen data. The
                    said attacks will, in turn, result in a more difficult and longer process of repairing any damage
                    done and/or recovering any data loss.
                </p>
                <b>Mitigation Tips</b>
                <ol>
                    <li>
                        A proper logging and monitoring system must be planned and developed to track all activity
                        within the application, suspicious or not.
                    </li>

                    <li>
                        Generated logs should be easily understood and provide sufficient information about any activity
                        within the application.
                    </li>
                    <li>
                        Alerts concerning suspicious activities must be ensured that they are effective enough and
                        that an incident response and recovery plan is well established
                    </li>
                    <li>
                        A penetration test must also be conducted wherein the system will be tested if it successfully
                        logs and monitors any activity within the application properly, including any suspicious
                        activities. This is to test the sufficiency of the logs being generated by the logging and
                        monitoring system (Hack2Secure, 2018).
                    </li>
                </ol>
                <b>Sample Case</b>
                <p>
                    An example case where the vulnerability of insufficient logging and monitoring was exploited,
                    happened in 2013 where the German branch of Vodafone was hacked. A third-party subcontractor was
                    reported to steal the names, addresses, bank account numbers, birthdates, and possibly phone credit
                    card details and passwords of over 2 million customers.
                </p>
                <p>
                    Though unclear of when the breach took place, it appeared that the hackers were able so successfully
                    compromise an internal server on their network. A software which could have alerted the company of
                    the attack as soon as the breach happened and in turn would have mitigated the breach was believed
                    to be absent.
                </p>
            </section>
            <section id="xss">
                <h3>Cross-Site Scripting (XSS)</h3>
                <p>
                    It is a kind of vulnerability in websites or web applications wherein a hacker does an injection
                    attack that exploits the vulnerability of the site to attack any visitors of the site. This happens
                    when the attacker injects malicious scripts into a website without the awareness of the user. These
                    scripts can alter the website in such a way that it changes the links within it to lead to a
                    separate page that installs malware into the user’s device, or copies a user’s session to steal any
                    information they can from that user.
                </p>
                <b>Mitigation Tips</b>
                <ul>
                    <li>
                        Escaping data is a means of preventing vulnerabilities by which data received by an application
                        is taken to ensure its security before sending it to an end user. This will prevent any
                        interruption in sending payloads to end users.
                    </li>
                    <li>
                        Validation is the process ensuring the correctness of data within the application, thus
                        preventing any malicious data from harming the site, its database, and its users by giving
                        restrictions to user inputs.
                    </li>
                    <li>
                        Sanitization is the process by which user input is modified to ensure its validation. This is
                        normally used in conjunction with validation as a form of double checking the data received such
                        that they would not harm users and the database.
                    </li>
                </ul>
            </section>
            <hr>
            <section id="references">
                <h3>References</h3>
                News, A. (2018). Jollibee takes down delivery website after gov't raises privacy concern. [online]
                ABS-CBN News. Available at:
                http://news.abs-cbn.com/business/05/09/18/jollibee-takes-down-delivery-website-after-govt-raises-privacy-concern
                [Accessed 11 May 2018].<br>
                Owasp.org. (2018). Top 10-2017 Top 10 - OWASP. [online] Available at:
                https://www.owasp.org/index.php/Top_10-2017_Top_10 [Accessed 11 May 2018].<br>
            </section>
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
                    <a id="next" class="btn btn-outline-primary" href="/node">Back</a>
                </div>
                <div class="ml-auto justify-content-end">
                    <a id="next" class="btn btn-outline-primary" href="/">Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection