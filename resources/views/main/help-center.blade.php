@extends('layouts.main')
@section('style')
    <style>
        .header-container .header, .fixed-header-on .dark.header.fixed {
            background-color: #ee295e !important;
            background-image: none !important;
        }

        .bg-container {
            background-color: #ee295e;
            background-image: none;
        }

        @media (max-width: 767px) {

            #fullpage-menu {
                background-color: #ee295e;
                margin-top: 0;
            }
        }
    </style>
@endsection
@include('layouts.mainmenu')
@section('content')
    <section class="main-container help-center padding-ver-clear">
        <div class="pv-40">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="section-header text-center blue">Help Center</h1>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <h2 class="section-subheader blue">Getting Started</h2>
                        <p>&nbsp;</p>

                        <h3 class="section-subheader2 blue">New to Pickatale? Learn the basics to get the most from the
                            app and your subscription</h3>

                        <div class="accordion" id="accordion">
                            @include('main.partials.help-center-accordion')
                        </div>
                        <p>&nbsp;</p>

                        <h2 class="section-subheader2 blue">Search for Questions</h2>
                        <div class="contact-form search">
                            <form class="inline">
                                {!! csrf_field() !!}

                                <div class="form-group col-xs-12 no-padding">
                                    <input class="form-control" id="seachInput" name="q" placeholder="Search for questions"
                                           type="text">
                                </div>
                            </form>
                        </div>

                        <p>&nbsp;</p>

                        <h2 class="section-subheader2 blue">Recent Activity</h2>

                        <div class="recent-activity">
                            <p>
                            <strong>15 December 2016:</strong><br>
                            Pickatale team will be attending the Bett Show, 25-28 January 2017 in London.<br>
                            We are super excited to show you our new and improved Pickatale app. Visitors will also
                            have the chance to see where we heading next in 2017.<br>
                            If you happen to be in town, drop by our stand D130 to meet our team.
                            </p>

                            <p>
                            <strong>17 January 2017:</strong><br>
                            Pickatale&#39;s got a new look. We’ve decided it's time for an upgrade.<br>
                            Hope you like our new logo and colors. We can’t wait to hear your comments about our
                            website too.
                            </p>
                        </div>

                        <p>&nbsp;</p>
                        <p>&nbsp;</p>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
