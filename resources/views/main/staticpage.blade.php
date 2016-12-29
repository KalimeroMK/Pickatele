@extends('layouts.main')
@include('layouts.mainmenu')
@section('content')

    @if($staticpage->slug == 'partners')
        <style>
            .header.dark {
                background-image: url('/assets/img/slider-bg.png');
            }
        </style>
    @endif


    @if($staticpage->image)
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
                                <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="500"
                                    data-saveperformance="on" data-title="Slide 1">

                                    <!-- main image -->
                                    <img src="/assets/img/staticpage/{{$staticpage->image}}" alt="slidebg1"
                                         data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover">

                                    <!-- Transparent Background -->
                                    <div class="tp-caption dark-translucent-bg"
                                         data-x="center"
                                         data-y="bottom"
                                         data-speed="600"
                                         data-start="0">
                                    </div>

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption sfb fadeout text-center large_white"
                                         data-x="center"
                                         data-y="110"
                                         data-speed="500"
                                         data-start="1000"
                                         data-easing="easeOutQuad">{{ $staticpage->title }}
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption sfb fadeout text-center large_white tp-resizeme"
                                         data-x="center"
                                         data-y="155"
                                         data-speed="500"
                                         data-start="1300"
                                         data-easing="easeOutQuad">
                                        <div class="separator light"></div>
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption sfb fadeout medium_white text-center"
                                         data-x="center"
                                         data-y="190"
                                         data-speed="500"
                                         data-start="1300"
                                         data-easing="easeOutQuad"
                                         data-endspeed="600">
                                    </div>

                                </li>
                                <!-- slide 1 end -->


                            </ul>
                            <div class="tp-bannertimer"></div>
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
        <div class="container pv-40">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-12">
                    <h1 class="title">{{ $staticpage->title }}</h1>
                    <div class="separator-2"></div>
                    {!! $staticpage->description !!}
                </div>
                <!-- main end -->


            </div>
        </div>
    </section>
    <!-- main-container end -->
@endsection

