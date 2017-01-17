@extends('layouts.main')
@include('layouts.mainmenu')
@include('layouts.partners')
@section('content')

    @if($mainpage->slug == 'parents' || $mainpage->slug == 'educators')
        <style>
            .header.dark {
                background-image: url('/assets/img/slider-bg.png');
            }
        </style>



        @if($mainpage->image)
                <!-- banner start -->
        <!-- ================ -->

        <!-- banner start -->
        <!-- ================ -->
        <div class="banner clearfix">

            <!-- slideshow start -->
            <!-- ================ -->
            <div class="slideshow">


                <!-- slideshow start -->
                <!-- ================ -->
                <div class="slideshow">

                    <!-- slider revolution start -->
                    <!-- ================ -->
                    <div class="slider-banner-container">
                        <div class="slider-banner-fullwidth-big-height">
                            <ul class="slides">
                                <!-- slide 1 start -->
                                <!-- ================ -->
                                <li data-transition="fadefromtop" data-slotamount="1" data-masterspeed="500"
                                    data-saveperformance="on" data-title="Slide 1">

                                    <!-- main image -->
                                    <img src="/assets/img/mainpages/{{$mainpage->image}}" alt="slidebg1"
                                         data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover">


                                </li>
                                <!-- slide 1 end -->


                            </ul>
                        </div>
                    </div>
                    <!-- slider revolution end -->

                </div>
                <!-- slideshow end -->

            </div>
        </div>
        <!-- banner end -->
        @endif

                <!-- main-container start -->
        <!-- ================ -->
        <section class="main-container main-page-container padding-ver-clear {{$mainpage->slug}}">
            <div class="pv-40">
                <div class="container">
                    <div class="row">

                        <!-- main start -->
                        <!-- ================ -->
                        <div class="main col-md-12 main-page-title">
                            <p class="title">{!! $mainpage->paragraph !!}</p>
                        </div>
                        <!-- main end -->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="section-header blue text-center">{{ $mainpage->headertitle }}</h2>
                        </div>
                    </div>
                </div>

                <div class="row jumbotron-row">
                    <div class="container">
                        <div class="col-md-12 col-xs-12 blue-bg custom-jumbotron">
                            <p>{!! $mainpage->seconddescription !!}</p>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <h2 class="section-header text-center red">{!! $mainpage->secondheadertitle !!}</h2>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <p>

                            <div class="embed-responsive embed-responsive-16by9 col-xs-12">
                                <iframe class="embed-responsive-item" src="{{ $mainpage->video }}"></iframe>
                            </div>
                            </p>
                        </div>
                        <div class="col-md-6 col-xs-12 how-it-works">
                            <p>{!! $mainpage->thirddescription !!}</p>
                        </div>
                    </div>
                </div>

                <div class="why-will-you-love">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="section-header blue text-center push-50">{!! $mainpage->sectiontitle !!}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" style="margin-top:-450px">
                    <div class="row reasons">
                        <div class="col-md-4 col-xs-12">
                            <p><img src="/assets/img/mainpages/items/{{ $mainpage->itemimage }}"
                                    alt="{{ $mainpage->itemtitle }}"></p>

                            <p class="emphased-text">{!! $mainpage->itemtitle !!}</p>

                            <p>{{ $mainpage->itemdescription }}</p>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <p><img src="/assets/img/mainpages/items/{{ $mainpage->item2image }}"
                                    alt="{{ $mainpage->item2title }}"></p>

                            <p class="emphased-text">{!! $mainpage->item2title !!}</p>

                            <p>{{ $mainpage->item2description }}</p>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <p><img src="/assets/img/mainpages/items/{{ $mainpage->item3image }}"
                                    alt="{{ $mainpage->item3title }}"></p>

                            <p class="emphased-text">{!! $mainpage->item3title !!}</p>

                            <p>{{ $mainpage->item3description }}</p>
                        </div>
                    </div>
                    <div class="row reasons">
                        <div class="col-md-4 col-xs-12">
                            <p><img src="/assets/img/mainpages/items/{{ $mainpage->item4image }}"
                                    alt="{{ $mainpage->item4title }}"></p>

                            <p class="emphased-text">{!! $mainpage->item4title !!}</p>

                            <p>{{ $mainpage->item4description }}</p>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <p><img src="/assets/img/mainpages/items/{{ $mainpage->item5image }}"
                                    alt="{{ $mainpage->item5title }}"></p>

                            <p class="emphased-text">{!! $mainpage->item5title !!}</p>

                            <p>{{ $mainpage->item5description }}</p>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <p><img src="/assets/img/mainpages/items/{{ $mainpage->item6image }}"
                                    alt="{{ $mainpage->item6title }}"></p>

                            <p class="emphased-text">{!! $mainpage->item6title !!}</p>

                            <p>{{ $mainpage->item6description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- main-container end -->


        @yield('partners')

        <!-- ================ -->
        <!-- TODO red-bg for parents blue-bg is for educators -->
        <section class="main-container padding-ver-clear call-to-action {{$mainpage->slug}}">
            <div class="container pv-40">
                <div class="row">
                    <h2 class="section-header text-center">Experience some of our amazing books for free!</h2>
                </div>

                <div class="row">
                    <span class="text-center white cta-subtext">download our application</span>
                </div>

                <div class="col-xs-12 text-center">
                    <ul class="store-links">
                        <li>
                            <a href="https://itunes.apple.com/us/app/pickatale-200+-interactive/id669433655?mt=8">
                                <img src="/assets/images/1-apple-store.png">
                            </a>
                        </li>

                        <li>
                            <a href="https://play.google.com/store/apps/details?id=com.WisdomEdition.Pickatale.Bookshelf&hl=en">
                                <img src="/assets/images/2-google-store.png">
                            </a>
                        </li>

                        <li>
                            <a href="http://www.wandoujia.com/apps/com.quduedu.pickatale">
                                <img src="/assets/images/3-cn-store.png">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- section end -->
    @endif

    @if($mainpage->slug == "partners")
        <style>
            .header.dark {
                background-image: url('/assets/img/slider-bg.png');
            }
        </style>



        @if($mainpage->image)
                <!-- banner start -->
        <!-- ================ -->

        <!-- banner start -->
        <!-- ================ -->
        <div class="banner clearfix">

            <!-- slideshow start -->
            <!-- ================ -->
            <div class="slideshow">


                <!-- slideshow start -->
                <!-- ================ -->
                <div class="slideshow">

                    <!-- slider revolution start -->
                    <!-- ================ -->
                    <div class="slider-banner-container">
                        <div class="slider-banner-fullwidth-big-height">
                            <ul class="slides">
                                <!-- slide 1 start -->
                                <!-- ================ -->
                                <li data-transition="fadefromtop" data-slotamount="1" data-masterspeed="500"
                                    data-saveperformance="on" data-title="Slide 1">

                                    <!-- main image -->
                                    <img src="/assets/img/mainpages/{{$mainpage->image}}" alt="slidebg1"
                                         data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover">


                                </li>
                                <!-- slide 1 end -->


                            </ul>
                        </div>
                    </div>
                    <!-- slider revolution end -->

                </div>
                <!-- slideshow end -->

            </div>
        </div>
        <!-- banner end -->
        @endif

                <!-- main-container start -->
        <!-- ================ -->
        <div class="about-us-pattern-1"></div>
        <div class="about-us-pattern-2"></div>
        <section class="main-container main-page-container padding-ver-clear {{$mainpage->slug}}">
            <div class="pv-40">
                <div class="container">
                    <div class="row">

                        <!-- main start -->
                        <!-- ================ -->
                        <div class="main col-md-12 main-page-title">
                            <p class="title">{!! $mainpage->paragraph !!}</p>
                        </div>
                        <!-- main end -->
                    </div>
                </div>
            </div>
        </section>
        <div class="partners-bg">
            <section class="main-container padding-ver-clear">
                <div class="pv-40 parents">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="section-header white text-center"
                                    style="margin-top:15px;">{!! $mainpage->sectiontitle !!}</h2>
                            </div>
                        </div>
                        <div class="container" style="margin-top:40px">
                            <div class="row reasons-partners">
                                <div class="col-md-4">
                                    <p><img src="/assets/img/mainpages/items/{{ $mainpage->itemimage }}"
                                            alt="{{ $mainpage->itemtitle }}"></p>

                                    <p class="emphased-text">{!! $mainpage->itemtitle !!}</p>

                                    <p>{{ $mainpage->itemdescription }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p><img src="/assets/img/mainpages/items/{{ $mainpage->item2image }}"
                                            alt="{{ $mainpage->item2title }}"></p>

                                    <p class="emphased-text">{!! $mainpage->item2title !!}</p>

                                    <p>{{ $mainpage->item2description }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p><img src="/assets/img/mainpages/items/{{ $mainpage->item3image }}"
                                            alt="{{ $mainpage->item3title }}"></p>

                                    <p class="emphased-text">{!! $mainpage->item3title !!}</p>

                                    <p>{{ $mainpage->item3description }}</p>
                                </div>
                            </div>
                            <div class="row reasons-partners">
                                <div class="col-md-4">
                                    <p><img src="/assets/img/mainpages/items/{{ $mainpage->item4image }}"
                                            alt="{{ $mainpage->item4title }}"></p>

                                    <p class="emphased-text">{!! $mainpage->item4title !!}</p>

                                    <p>{{ $mainpage->item4description }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p><img src="/assets/img/mainpages/items/{{ $mainpage->item5image }}"
                                            alt="{{ $mainpage->item5title }}"></p>

                                    <p class="emphased-text">{!! $mainpage->item5title !!}</p>

                                    <p>{{ $mainpage->item5description }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p><img
                                                src="/assets/img/mainpages/items/{{ $mainpage->item6image }}"
                                                alt="{{ $mainpage->item6title }}"></p>

                                    <p class="emphased-text">{!! $mainpage->item6title !!}</p>

                                    <p>{{ $mainpage->item6description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- main-container end -->
        </div>

        @yield('partners')

        <div style="z-index:1" class="container about-us">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-2 col-sm-8">
                    <h2 class="section-header text-center red" style="margin-top: 75px;">Get in touch if you want to
                        work with us</h2>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-offset-2 col-sm-8">
                        <form action="/partners/send" method="POST">
                            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                <label for="nameInput">Name</label>
                                <input type="text" name="name" class="form-control" id="nameInput" placeholder="Name">
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                <label for="emailInput">Email</label>
                                <input type="email" name="email" class="form-control" id="emailInput" placeholder="Email">
                            </div>
                            <div class="form-group col-xs-12">
                                <label class="custom" for="typeInput1">Partnership types</label>
                                <select id="typeInput1" name="partnership-type" class="select2 form-control" style="width: 100%">
                                    <option value="Content owners">Content owners</option>
                                    <option value="Content distribution">Content distribution</option>
                                    <option value="Publishers">Publishers</option>
                                    <option value="Co-development">Co-development</option>
                                    <option value="Market experts">Market experts</option>
                                    <option value="China partners">China partners</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="form-group col-xs-12">
                                <label for="subjectInput">Subject</label>
                                <input type="text" name="subject" class="form-control" id="subjectInput" placeholder="Subject">
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="messageInput">Message</label>
                        <textarea id="messageInput" rows="10" name="message" class="form-control"
                                  placeholder="Message"></textarea>
                            </div>
                            <div class="form-group col-xs-12 no-margin" style="margin-bottom:0">
                                @if(Session::has('flash_message'))
                                    <div class="alert alert-success">
                                        {{ Session::get('flash_message') }}
                                    </div>
                                @elseif (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group col-sm-12 col-md-6">
                                <label>{!! Recaptcha::render() !!}</label>
                            </div>

                            <div class="form-group col-sm-12 col-md-6 button-container">
                                <button type="submit" @if (count($errors) > 0 || Session::has('flash_message')) autofocus @endif class="btn custom-btn pink-btn pull-right-md pull-right-lg">Submit</button>
                            </div>
                            {!! csrf_field() !!}
                        </form>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ================ -->
        <section class="main-container padding-ver-clear yellow-bg call-to-action {{$mainpage->slug}}">
            <div class="container pv-40">
                <div class="row">
                    <h2 class="section-header text-center">Experience some of our amazing books for free!</h2>
                </div>

                <div class="row">
                    <span class="text-center white cta-subtext">download our application</span>
                </div>

                <div class="col-xs-12 text-center">
                    <ul class="store-links">
                        <li>
                            <a href="https://itunes.apple.com/us/app/pickatale-200+-interactive/id669433655?mt=8">
                                <img src="/assets/images/1-apple-store.png">
                            </a>
                        </li>

                        <li>
                            <a href="https://play.google.com/store/apps/details?id=com.WisdomEdition.Pickatale.Bookshelf&hl=en">
                                <img src="/assets/images/2-google-store.png">
                            </a>
                        </li>

                        <li>
                            <a href="http://www.wandoujia.com/apps/com.quduedu.pickatale">
                                <img src="/assets/images/3-cn-store.png">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- section end -->
    @endif
@endsection