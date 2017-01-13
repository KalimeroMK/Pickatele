@extends('layouts.main')
@section('style')
    <style>
        .header-container .header {
            background-color: #ee295e;
            background-image: none;

        }

        .bg-container {
            background-color: #ee295e;
            background-image: none;
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
                        <h1 class="section-header red" style="margin-top:40px">Get in touch!</h1>

                        <div class="section-subheader2 blue" style="font-size: 16px">
                            <p style="margin-bottom: 3px;">Pickatale team is here to provide you with more
                                information.</p>

                            <p style="" class="blue">Reach out to us anytime and we'll answer your questions.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-offset-2 col-sm-8">
                        <form>
                            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                <label for="nameInput">Name</label>
                                <input type="text" class="form-control" id="nameInput" placeholder="Name">
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                <label for="emailInput">Email</label>
                                <input type="email" class="form-control" id="emailInput" placeholder="Email">
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                <label class="custom" for="typeInput1">CV</label>
                                <select id="typeInput1" class="select2 form-control" style="width: 100%">
                                    <option value="customers">Customers</option>
                                    <option value="developers">Developers</option>
                                </select>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                <label class="custom" for="typeInput2">Portfolio</label>
                                <select id="typeInput2" class="select2 form-control" style="width: 100%">
                                    <option value="parent">Parent</option>
                                    <option value="step-parent">Step-Parent</option>

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
                            <div class="form-group col-sm-12 col-md-6">
                                <label>{!! Recaptcha::render() !!}</label>
                            </div>
                            <div class="form-group col-sm-12 col-md-6 button-container">
                                <button type="submit" class="btn custom-btn pink-btn pull-right-md pull-right-lg">
                                    Submit
                                </button>
                            </div>
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
