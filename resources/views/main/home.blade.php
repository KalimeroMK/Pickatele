@extends('layouts.main')
@include('layouts.mainmenu')
@section('content')

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

                    @foreach($sliders as $index => $slider)
                            <!-- slide {{ $index }} start -->
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
                             data-easing="easeOutQuad"><img src="/assets/img/slider/{{ $slider->image }}"
                                                            alt="{{ $slider->title }}"/>
                        </div>

                    </li>
                    <!-- slide {{ $index }} end -->
                    @endforeach


                </ul>
            </div>
        </div>
        <!-- slider revolution end -->

    </div>
    <!-- slideshow end -->

</div>
<!-- banner end -->
<div class="clearfix"></div>

<section class="become-partner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="section-header">Become our partner</h1>
                <button class="btn custom-btn white-btn">Read More</button>
            </div>
        </div>
    </div>
</section>

<!-- section start -->
<!-- ================ -->
{{--<section>--}}
{{--<div class="become-partner col-xs-12 col-md-12">--}}
{{--<h1 class="section-header">Great offers from Pickatale</h1>--}}
{{--</div>--}}
{{--</section>--}}

<section class="bundles">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <img class="slider" src="assets/images/bundles.png">
            </div>
        </div>
    </div>
</section>
<!-- section start -->
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

<section class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="section-header">Join Our Program</h1>
                <h6 class="section-subheader">Inform for our latest books and learning programs</h6>


                <!--<div style="margin: 0 auto; width:50%">-->
                <form class="form-inline">
                    <div class="form-group">
                        <input class="form-control email" placeholder="Email" type="text">
                    </div>
                    <div class="form-group">
                        <button class="btn custom-btn pink-btn">Subscribe</button>
                    </div>
                </form>
                <!--</div>-->
            </div>
        </div>
    </div>
</section>
@endsection