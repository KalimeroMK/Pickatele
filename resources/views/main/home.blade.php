@extends('layouts.main')
@include('layouts.mainmenu')
@include('layouts.partners')
@section('content')
 <!-- banner start -->
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

                    <li data-transition="fadefromtop" data-slotamount="4" data-masterspeed="500"
                        data-saveperformance="on" data-title="ChangeThis">

                        <!-- main image -->
                        <img src="/assets/img/bg-slider.png" alt="Title"
                             data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover">


                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption sfb fadeout text-left large_white"
                             data-x="center"
                             data-y="0"
                             data-speed="500"
                             data-start="1000"
                             start-height="750"
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
                <a href="/partners" class="btn custom-btn white-btn">Read More</a>
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
                <h1 class="section-header">Great offers from Pickatale</h1>
                <img class="slider img-responsive center-block" src="/assets/img/bundle/{{ $bundles->image }}">
            </div>
        </div>
    </div>
</section>
<!-- section end -->
@yield('partners')

<section class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="section-header">Join Our Program</h1>
                <h6 class="section-subheader">Inform for our latest books and learning programs</h6>


                <!--<div style="margin: 0 auto; width:50%">-->
                <form class="form-inline" id="newsletter-form">
                    <div class="col-xs-12" id="newsletter-msg">
                    </div>
                    <div class="form-group">
                        <input class="form-control email" name="EMAIL" placeholder="Email" type="text">
                    </div>
                    <div class="form-group">
                        <div class="row loading text-center ph-30" style="margin-top: 5px;">
                            <div class="spinner">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                        <button class="btn custom-btn pink-btn">Subscribe</button>
                    </div>
                </form>
                <!--</div>-->
            </div>
        </div>
    </div>
</section>


@endsection
