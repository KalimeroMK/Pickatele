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
                            <img src="/assets/images/recruitment-header.png" alt="slidebg1"
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

<div class="jobs">
    <div class="container-medium center-block">
        <div class="row">
            <div class="col-xs-12 text-center">
                <img src="/assets/images/hiring.png" class="center-block" alt="hiring"/>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 pv-40 blue-text">
                <p>Pickatale is an ed-tech startup based out of China and Macedonia. Our core business is the digital
                    publishing of interactive children books for young ages. We currently have over 1000 books and a
                    planned
                    production in the years to come.</p>

                <p>We are on a mission to create the best, most useful and most interesting digital library of
                    storybooks
                    for children. If you want to help transform the world of reading for children, you'll love it
                    here.</p>

                <p>Pickatale is pushing boundaries in technology and education, and is currently building an adaptive
                    learning platform to accelerate children's learning.</p>
            </div>
        </div>

            <div class="row">
                <div class="col-xs-12">
                    <h1 class="section-header red text-center pv-30" style="margin-top:0;">Send your portfolio</h1>
                </div>
            </div>

            <div class="row contact-form">
                <div class="col-xs-12 col-sm-offset-1 col-sm-9">
                    <form action="/about/send" method="POST">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6">
                            <label for="nameInput">Name</label>
                            <input type="text" name="name" class="form-control" id="nameInput" placeholder="Name">
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6">
                            <label for="emailInput">Email</label>
                            <input type="email" name="email" class="form-control" id="emailInput" placeholder="Email">
                        </div>
                        <div class="form-group col-xs-12 file-input-group">
                            <label class="custom" for="cvInput">CV</label>
                            {{--<input class="form-control" id="cvInput" type="file" style="padding:0px" name="cv" />--}}
                            <input id="cvInput" name="cv" type="file" class="file" multiple data-show-upload="false"
                                   data-show-preview="false" data-show-caption="true">
                        </div>

                        <div class="form-group col-xs-12">
                            <label for="subjectInput">Subject</label>
                            <input type="text" name="subject" class="form-control" id="subjectInput"
                                   placeholder="Subject">
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
                            <button type="submit" @if (count($errors) > 0 || Session::has('flash_message')) autofocus
                                    @endif class="btn custom-btn pink-btn pull-right-md pull-right-lg">Send
                            </button>
                        </div>
                        {!! csrf_field() !!}
                    </form>
                    <p>&nbsp;</p>
                </div>
        </div>
    </div>
</div>

@endsection
