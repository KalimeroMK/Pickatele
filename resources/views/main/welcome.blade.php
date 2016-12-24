@extends('layouts.main')
@section('slider')

    <!-- banner start -->
    <!-- ================ -->
    <div class="banner clearfix">

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

                        <li data-transition="fadefromright" data-slotamount="4" data-masterspeed="500"
                            data-saveperformance="on" data-title="ChangeThis">

                            <!-- main image -->
                            <img src="/assets/img/slider-bg.png" alt="Title"
                                 data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover">


                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sfb fadeout text-left large_white"
                                 data-x="center"
                                 data-y="50"
                                 data-speed="500"
                                 data-start="1000"
                                 data-easing="easeOutQuad"><img src="/assets/img/slide-2.png" alt=""/>
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
    <!-- banner end -->
@endsection

@section('partners')
    <!-- section start -->
    <!-- ================ -->
    <section class="light-gray-bg pv-40">
        <div class="container">
            <h1 class="section-header-dark">Our Partners</h1>

            <!-- clients start -->
            <!-- ================ -->
            <div class="clients-container">
                <div class="clients">
                    <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
                        <a href="#"><img src="/assets/img/sourcepartners/disney.png" alt=""></a>
                    </div>
                    <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
                        <a href="#"><img src="/assets/img/sourcepartners/babyfirst.png" alt=""></a>
                    </div>
                </div>
            </div>
            <!-- clients end -->
        </div>
    </section>
    <!-- section end -->
@endsection