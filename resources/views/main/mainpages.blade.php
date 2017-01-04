@extends('layouts.main')
@include('layouts.mainmenu')
@section('content')

    @if($mainpage->slug == 'partners')
        <style>
            .header.dark {
                background-image: url('/assets/img/slider-bg.png');
            }
        </style>
    @endif


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
                                <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="500"
                                    data-saveperformance="on" data-title="Slide 1">

                                    <!-- main image -->
                                    <img src="/assets/img/mainpages/{{$mainpage->image}}" alt="slidebg1"
                                         data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover">


                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption sfb fadeout medium_white text-center"
                                         data-x="center"
                                         data-y="190"
                                         data-speed="500"
                                         data-start="1300"
                                         data-easing="easeOutQuad"
                                         data-endspeed="600">{!! $mainpage->sliderdescription !!}
                                    </div>

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
        <div class="container pv-40">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-12">
                    <p class="title">{!! $mainpage->paragraph !!}</p>
                </div>
                <!-- main end -->


            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $mainpage->headertitle }}</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p>{!! $mainpage->seconddescription !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>{!! $mainpage->secondheadertitle !!}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ $mainpage->video }}"></iframe>
                        </div>
                    </p>
                </div>
                <div class="col-md-6">
                    <p>{!! $mainpage->thirddescription !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>{!! $mainpage->sectiontitle !!}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p><img src="/assets/img/mainpages/items/{{ $mainpage->itemimage }}"
                            alt="{{ $mainpage->itemtitle }}"></p>
                    <p>{!! $mainpage->itemtitle !!}</p>
                    <p>{{ $mainpage->itemdescription }}</p>
                </div>
                <div class="col-md-4">
                    <p><img src="/assets/img/mainpages/items/{{ $mainpage->item2image }}"
                            alt="{{ $mainpage->item2title }}"></p>
                    <p>{!! $mainpage->item2title !!}</p>
                    <p>{{ $mainpage->item2description }}</p>
                </div>
                <div class="col-md-4">
                    <p><img src="/assets/img/mainpages/items/{{ $mainpage->item3image }}"
                            alt="{{ $mainpage->item3title }}"></p>
                    <p>{!! $mainpage->item3title !!}</p>
                    <p>{{ $mainpage->item3description }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p><img src="/assets/img/mainpages/items/{{ $mainpage->item4image }}"
                            alt="{{ $mainpage->item4title }}"></p>
                    <p>{!! $mainpage->item4title !!}</p>
                    <p>{{ $mainpage->item4description }}</p>
                </div>
                <div class="col-md-4">
                    <p><img src="/assets/img/mainpages/items/{{ $mainpage->item5image }}"
                            alt="{{ $mainpage->item5title }}"></p>
                    <p>{!! $mainpage->item5title !!}</p>
                    <p>{{ $mainpage->item5description }}</p>
                </div>
                <div class="col-md-4">
                    <p><img src="/assets/img/mainpages/items/{{ $mainpage->item6image }}"
                            alt="{{ $mainpage->item6title }}"></p>
                    <p>{!! $mainpage->item6title !!}</p>
                    <p>{{ $mainpage->item6description }}</p>
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
                    <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
                        <a href="#"><img src="/assets/images/babyfirst-logo.png" alt=""></a>
                    </div>
                    <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                        <a href="#"><img src="/assets/images/babyfirst-logo.png" alt=""></a>
                    </div>

                </div>
            </div>
            <!-- clients end -->
        </div>
    </section>
    <!-- section end -->


@endsection

