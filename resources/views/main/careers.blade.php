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
        <div class="container-small" style="margin:0 auto">
            <div class="row">
                <h1 class="col-xs-12">
                    <h1 class="section-header">Join our team, make a difference and grow with us</h1>
                    <div class="text" style="color:#7ccaea;font-weight:600;margin: 50px 0">
                    <p>Pickatale is an ed-tech startup based out of China and Macedonia. Our core business is the
                        digital publishing of interactive children books for young ages. We currently have over 1000
                        books and a planned production in the years to come.</p>

                    <p>We are on a mission to create the best, most useful and most interesting digital library of
                        storybooks for children. If you want to help transform the world of reading for children, you'll
                        love it here.
                        Pickatale is pushing boundaries in technology and education, and is currently building an
                        adaptive learning platform to accelerate children's learning.</p>

                    <p>We work with some of the best companies in the industry, including Disney, BabyFirst and Phonics
                        School.
                        Pickatale is always looking for motivated and talented individuals to join our family and help
                        us test the boundaries of education technology.</p>
                    </div>
                    <h1 class="section-header">Explore career opportunities</h1>
                    <p>&nbsp;</p>
                    <div class="accordion" id="accordion">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse1">
                                    Frontend developer
                                </a>
                            </div>

                            <div id="collapse1" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse2">
                                    Designer
                                </a>
                            </div>

                            <div id="collapse2" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.
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