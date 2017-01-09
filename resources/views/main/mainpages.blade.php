@extends('layouts.main')
@include('layouts.mainmenu')
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
        <section class="main-container padding-ver-clear">
            <div class="pv-40 parents">
                <div class="container">
                    <div class="row">

                        <!-- main start -->
                        <!-- ================ -->
                        <div class="main col-md-12 parents-title">
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
                        <div class="col-md-12 blue-bg custom-jumbotron">
                            <p>{!! $mainpage->seconddescription !!}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-header text-center red">{!! $mainpage->secondheadertitle !!}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="container">

                        <div class="col-md-6">
                            <p>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $mainpage->video }}"></iframe>
                            </div>
                            </p>
                        </div>
                        <div class="col-md-6 how-it-works">
                            <p>{!! $mainpage->thirddescription !!}</p>
                        </div>
                    </div>
                </div>
                <div class="row why-will-you-love">
                    <div class="col-md-12">
                        <h2 class="section-header blue text-center"
                            style="margin-top:50px;">{!! $mainpage->sectiontitle !!}</h2>
                    </div>
                </div>
                <div class="container" style="margin-top:-500px">
                    <div class="row reasons">
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
                    <div class="row reasons">
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


        <!-- ================ -->
        <section class="light-gray-bg partners">
            <div class="container">
                <h1 class="section-header-dark">They love to work with us</h1>
                <!-- clients start -->
                <!-- ================ -->
                <div class="clients-container">
                    <div class="clients">
                        <div class="client-image object-non-visible" data-animation-effect="fadeIn"
                             data-effect-delay="100">
                            <a href="#"><img src="/assets/images/babyfirst-logo.png" alt=""></a>
                        </div>
                        <div class="client-image object-non-visible" data-animation-effect="fadeIn"
                             data-effect-delay="200">
                            <a href="#"><img src="/assets/images/babyfirst-logo.png" alt=""></a>
                        </div>

                    </div>
                </div>
                <!-- clients end -->
            </div>
        </section>
        <!-- section end -->

        <!-- ================ -->
        <!-- TODO red-bg for parents blue-bg is for educators -->
        <section class="main-container padding-ver-clear red-bg call-to-action">
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
                            <a href="http://apple.com">
                                <img src="/assets/images/apple-store.png">
                            </a>
                        </li>

                        <li>
                            <a href="http://google.com">
                                <img src="/assets/images/google-store.png">
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
        <section class="main-container padding-ver-clear">
            <div class="pv-40 parents">
                <div class="container">
                    <div class="row">

                        <!-- main start -->
                        <!-- ================ -->
                        <div class="main col-md-12 partners-title">
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
                                    style="margin-top:50px;">{!! $mainpage->sectiontitle !!}</h2>
                            </div>
                        </div>
                        <div class="container" style="margin-top:-500px">
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

        <!-- ================ -->
        <section class="light-gray-bg partners">
            <div class="container">
                <h1 class="section-header-dark">They love to work with us</h1>
                <!-- clients start -->
                <!-- ================ -->
                <div class="clients-container">
                    <div class="clients">
                        <div class="client-image object-non-visible" data-animation-effect="fadeIn"
                             data-effect-delay="100">
                            <a href="#"><img src="/assets/images/babyfirst-logo.png" alt=""></a>
                        </div>
                        <div class="client-image object-non-visible" data-animation-effect="fadeIn"
                             data-effect-delay="200">
                            <a href="#"><img src="/assets/images/babyfirst-logo.png" alt=""></a>
                        </div>

                    </div>
                </div>
                <!-- clients end -->
            </div>
        </section>
        <!-- section end -->

        <!-- ================ -->
        <!-- TODO red-bg for parents blue-bg is for educators -->
        <section class="main-container padding-ver-clear blue-bg call-to-action">
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
                            <a href="http://apple.com">
                                <img src="/assets/images/apple-store.png">
                            </a>
                        </li>

                        <li>
                            <a href="http://google.com">
                                <img src="/assets/images/google-store.png">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- section end -->


        <div style="z-index:1" class="container about-us">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-2 col-sm-8">
                    <h2 class="section-header text-center red" style="margin-top: 75px;">Get in touch if you want to work with us
                </div>
            </div>
        </div>
        <div class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-offset-2 col-sm-8">
                        <form>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="nameInput">Name</label>
                                <input type="text" class="form-control" id="nameInput" placeholder="Name">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="emailInput">Email</label>
                                <input type="email" class="form-control" id="emailInput" placeholder="Email">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label class="custom" for="typeInput1">Type of Contact</label>
                                <select id="typeInput1" class="select2 form-control">
                                    <option value="customers">Customers</option>
                                    <option value="developers">Developers</option>
                                </select>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label class="custom" for="typeInput2">&nbsp;</label>
                                <select id="typeInput2" class="select2 form-control">
                                    <option value="parent">Parent</option>
                                </select>
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="subjectInput">Subject</label>
                                <input type="text" class="form-control" id="subjectInput" placeholder="Subject">
                            </div>
                            <div class="form-group col-xs-12">
                                <label for="messageInput">Message</label>
                                <textarea id="messageInput" rows="10" name="message" class="form-control"
                                          placeholder="Message"></textarea>
                            </div>
                            <div class="form-group col-xs-12 text-center">
                                <button type="submit" class="btn custom-btn pink-btn">Submit</button>
                            </div>
                        </form>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div
    @endif
@endsection

