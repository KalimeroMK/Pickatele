@extends('layouts.main')
@include('layouts.mainmenu')
@section('content')
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
                            <img src="/assets/images/careers-slider.png" alt="slidebg1"
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

<section class="main-container main-page-container padding-ver-clear">
    <div class="pv-40">
        <div class="container-small center-block">
            <div class="row">
                <h1 class="col-xs-12">
                    <h1 class="section-header text-center">Join our team, make a difference and grow with us</h1>

                    <div class="text blue-text pv-40">
                        <p>Pickatale is an ed-tech startup based out of China and Macedonia. Our core business is the
                            digital publishing of interactive children books for young ages. We currently have over 1000
                            books and a planned production in the years to come.</p>

                        <p>We are on a mission to create the best, most useful and most interesting digital library of
                            storybooks for children. If you want to help transform the world of reading for children,
                            you'll
                            love it here.
                            Pickatale is pushing boundaries in technology and education, and is currently building an
                            adaptive learning platform to accelerate children's learning.</p>

                        <p>We work with some of the best companies in the industry, including Disney, BabyFirst and
                            Phonics
                            School.
                            Pickatale is always looking for motivated and talented individuals to join our family and
                            help
                            us test the boundaries of education technology.</p>
                    </div>
                    <h1 class="section-header text-center">Explore career opportunities</h1>

                    <p>&nbsp;</p>

                    <div id="accordion-links">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <div class="col-xs-12">
                                    <div class="col-xs-8">
                                        <a class="accordion-link pull-left" href="/jobs/full-stack-engineer">
                                            Full Stack engineer
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="accordion-link pull-right" href="/jobs/full-stack-engineer">
                                            Open
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <div class="col-xs-12">
                                    <div class="col-xs-8">
                                        <a class="accordion-link pull-left" href="/jobs/front-end-developer">
                                            Front-end developer
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a class="accordion-link pull-right" href="/jobs/front-end-developer">
                                            Open
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>&nbsp;</p>

            </div>
        </div>
    </div>
    </div>
</section>
@endsection