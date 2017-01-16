@extends('layouts.main')
@section('style')
    <style>
        .header-container .header, .fixed-header-on .dark.header.fixed {
            background-color: #ee295e !important;
            background-image: none !important;
        }

        .bg-container {
            background-color: #ee295e;
            background-image: none;
        }

        @media (max-width: 767px) {

            #fullpage-menu {
                background-color: #ee295e;
                margin-top: 0;
            }
        }
    </style>
@endsection
@include('layouts.mainmenu')
@section('content')
    <div class="contact-us">
        <div class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-offset-2 col-sm-8">
                        <div class="form-group col-xs-12">
                        <h1 class="section-header red" style="margin-top:40px">Get in touch!</h1>

                        <div class="section-subheader2 blue" style="font-size: 16px">
                            <p style="margin-bottom: 3px;">Pickatale team is here to provide you with more
                                information.</p>

                            <p style="" class="blue">Reach out to us anytime and we'll answer your questions.</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-offset-2 col-sm-8">
                        <form action="/contact/send" method="POST">
                            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                <label for="nameInput">Name</label>
                                <input type="text" name="name" class="form-control" id="nameInput" placeholder="Name">
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                <label for="emailInput">Email</label>
                                <input type="email" name="email" class="form-control" id="emailInput" placeholder="Email">
                            </div>
                            <div class="form-group col-xs-12">
                                <label class="custom" for="typeInput1">Interested in</label>
                                <select id="typeInput1" name="interest" class="select2 form-control" style="width: 100%">
                                    <option value="Partnerships">Partnerships</option>
                                    <option value="Marketing opportunities">Marketing opportunities</option>
                                    <option value="Sales opportunities">Sales opportunities</option>
                                    <option value="Enquiries">Enquiries</option>
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

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <img src="/assets/images/google-map.png" style="width:90%;margin: 0 auto;"/>
                </div>
            </div>
        </div>

        <div class="container offices">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="section-header red" style="margin-top:20px">Where can you find us</h1>
                </div>
                <div class="col-xs-6 col-sm-3 office-info">
                    <p class="office-header">Office 1</p>

                    <div class="office-text">
                        <p>Here goes one office</p>

                        <p>Info for the office</p>

                        <p>And again office</p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 office-info">
                    <p class="office-header">Office 1</p>

                    <div class="office-text">
                        <p>Here goes one office</p>

                        <p>Info for the office</p>

                        <p>And again office</p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 office-info">
                    <p class="office-header">Office 1</p>

                    <div class="office-text">
                        <p>Here goes one office</p>

                        <p>Info for the office</p>

                        <p>And again office</p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 office-info">
                    <p class="office-header">Office 1</p>

                    <div class="office-text">
                        <p>Here goes one office</p>

                        <p>Info for the office</p>

                        <p>And again office</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
