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
                            <p>Pickatale is a great way for kids ages 0 to 8 to read over two hundred stories right on
                                your phone or tablet, including tons of memorable classics and dozens of original
                                stories that are exclusive to Pickatale members.</p>

                            <p>We currently have 200+ interactive stories in English! Oh, and we release a new book
                                every week! Our books are also available in other languages, such as Chinese, Norwegian,
                                Danish and Swedish, with even more coming soon!
                            </p>

                            <p>Education doesn't have to be boring. It should be fun! Pickatale has an endless library
                                of interactive storybooks for children which are great for read-along at bedtime. The
                                storybooks have been developed to improve children's reading skills, to help them learn
                                about animals, cultures, historical figures and more, and to have fun learning through
                                reading.</p>

                            <p>We make reading more exciting with great voices and interactive features, which include
                                FREE sample books, fully interactive pages, and clickable text. Young learners can
                                review troublesome words one at a time, use touch-to-hear pictures, and more.</p>
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
