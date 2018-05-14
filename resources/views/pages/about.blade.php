@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card card-body p-5">
            <section>
                <h3>About Us</h3>
                <hr>
                <section class="cid-qRL1tBino6">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card flip-card  align-center">
                                <div class="card-front card_cont">
                                    <h4 class="card-title py-2 mbr-fonts-style display-5">
                                        The Website
                                    </h4>
                                    <p class="mbr-text mbr-fonts-style display-7">
                                        Webtech2018.com is developed in partial fulfillment of requirements for the
                                        course, Web Systems and Technologies for the 2nd semester of AY 2017-2018
                                    </p>
                                    <div class="card_back card_cont">
                                        <img src="{{ asset('storage/img/2.jpg') }}" class="img-fluid d-block rounded">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card flip-card  align-center">
                                <div class="card-front card_cont">
                                    <h4 class="card-title py-2 mbr-fonts-style display-5">
                                        The Content
                                    </h4>
                                    <p class="mbr-text mbr-fonts-style">
                                        The website covers the lessons tackled during the final term of the said course,
                                        using the technologies discussed througout the semester.
                                    </p>
                                    <div class="card_back card_cont">
                                        <img src="{{ asset('storage/img/1.jpg') }}" class="img-fluid d-block rounded">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="card flip-card  align-center">
                                <div class="card-front card_cont">
                                    <h4 class="card-title py-2 mbr-fonts-style display-5">
                                        The Developers
                                    </h4>
                                    <p class="mbr-text mbr-fonts-style">
                                        The developers of this website are 3rd year Computer Science students from the
                                        School of Computer and Information Sciences, Saint Louis University.
                                    </p>
                                    <div class="card_back card_cont  display-7">
                                        <img src="{{ asset('storage/img/3.jpg') }}" class="img-fluid d-block rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>


            <hr>
            <section>
                <div class="row text-center">
                    <div class="col">
                        <img src="{{ asset('storage/img/Ces.jpg') }}" class="img-fluid d-block rounded-circle "
                             style="min-width: 100%">
                        <p>Princess Lyka Dacapias</p>
                    </div>
                    <div class="col">
                        <img src="{{ asset('storage/img/Nic.jpg') }}" class="img-fluid d-block rounded-circle"
                             style="min-width: 100%">
                        <p>Dominic Gonzaga</p>
                    </div>
                    <div class="col">
                        <img src="{{ asset('storage/img/Rafa.jpg') }}" class="img-fluid d-block rounded-circle"
                             style="min-width: 100%">
                        <p>Rapha Lynne Mejia</p>
                    </div>
                    <div class="col">
                        <img src="{{ asset('storage/img/Gaspar.jpg') }}" class="img-fluid d-block rounded-circle"
                             style="min-width: 100%">
                        <p>Gaspar Monoten Jr.</p>
                    </div>
                    <div class="col">
                        <img src="{{ asset('storage/img/Pags.jpg') }}" class="img-fluid d-block rounded-circle"
                             style="min-width: 100%">
                        <p>Lawrence Christian Pagalanan</p>
                    </div>
                    <div class="col">
                        <img src="{{ asset('storage/img/Karen.jpg') }}" class="img-fluid d-block rounded-circle"
                             style="min-width: 100%">
                        <p>Karen Ivy Titiwa</p>
                    </div>
                </div>
            </section>
            <hr>

        </div>
    </div>


@endsection