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
            <div class="col-xs-12">
                @if ($position === 'front-end-developer')
                    <p>&nbsp;</p>
                    <h1 class="section-header red text-center pv-30" style="margin-top:0;">Front-end developer</h1>
                @endif
                @if ($position === 'full-stack-engineer')
                    <p>&nbsp;</p>
                    <h1 class="section-header red text-center pv-30" style="margin-top:0;">Full Stack Engineer</h1>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 pv-40 blue-text">
                @if ($position === 'front-end-developer')
                    <p><strong>Your role</strong></p>
                    <p>In Pickatale we promote creativity and innovation. As part of the team you will share the
                        obligation to continually coach and direct our junior colleagues, collaborate with all
                        colleagues form the team and across the company. You will share the knowledge between the
                        colleagues and make a commitment to promote and build Pickatales unique organizational
                        culture.</p>
                    <p>We value simple and clever UX based on advanced FE technologies in close cooperation with the UI
                        team and backend development team. Self-initiative and pro activeness will produce significant
                        advantage for the team and will add value to the work of the team. Regular communication and
                        coordination with the team is expected from all team members. All seniors should be prepared for
                        mentoring and consultations, code reviews, estimations, checks, pair programming and etc.</p>
                     
                    <p><strong>You also need most (if not all) of the following requirements:</strong></p>

                    <ul>
                        <li>At least 5 years in-depth experience with web development and frontend technologies
                            including JavaScript, CSS, HTML 5 and related frameworks including AngularJS, Angular2,
                            AngularUI, Twitter Bootstrap, RequireJS/AMD;
                        </li>
                        <li>JavaScript OOP and prototypes</li>
                        <li>Developed responsive web applications, expert in cross-browser compatibility;</li>
                        <li>Strong knowledge/familiarity of RESTful APIs, backend technologies including PHP</li>
                        <li>Experienced with Scrum and Agile practices, continuous integration builds;</li>
                        <li>Excellent communication skills in English, self-organized and motivated;</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p><strong>We offer:</strong></p>
                    <p>As part of Pickatale team you will have a unique opportunity to engage all the experience and
                        knowledge you have gathered, into projects that are motivating and challenging at the same
                        time.  You will have our unceasing support and encouragement to ensure your growth and
                        development in your career path. You will have an opportunity to explore different tools and
                        technologies that will help you explore your true passion. You will work in a friendly and
                        welcoming surroundings where new concepts and ides are welcomed to ensure our growth
                        together.</p>
                                                                                                              
                    <p><strong>Our competitive benefits package includes:</strong></p>
                    <ul>
                        <li>Competitive salary package</li>
                        <li>Sporting package</li>
                        <li>Opportunities for online training and certification</li>
                        <li>Many different employee engagement activities</li>
                    </ul>
                @endif
                @if ($position === 'full-stack-engineer')
                    <p><strong>Your role</strong></p>
                    <p>In Pickatale we promote creativity and innovation. As part of the team you will share the
                        obligation to continually coach and direct our junior colleagues, collaborate with all
                        colleagues form the team and across the company. You will share the knowledge between the
                        colleagues and make a commitment to promote and build Pickatales unique organizational
                        culture.</p>
                    <p>We are looking for superstars who can work across the stack to help design, build and review
                        existing and new products, and coach your colleagues by tapping into your cross-functional
                        knowledge and experience.</p>                        
                    <p><strong>You also need most (if not all) of the following requirements:</strong></p>

                    <ul>
                        <li>At least 5 years of professional experience in developing PHP applications and RESTful
                            APIs
                        </li>
                        <li>Preferably professional experience in developing NodeJS applications</li>
                        <li>At least 5 years of professional experience with databases, including PostgreSQL and NoSQL
                            (MongoDB preferred)
                        </li>
                        <li>At least 5 years in-depth experience with web development and frontend technologies
                            including JavaScript, CSS, HTML 5 and related frameworks including AngularJS, Angular2,
                            AngularUI, Twitter Bootstrap, RequireJS/AMD;
                        </li>
                        <li>Strong capabilities in OOP, Unit Testing, Code Review, Continuous Integration</li>
                        <li>Strong knowledge of server administration</li>
                        <li>Developing responsive web applications, expert in cross-browser compatibility;</li>
                        <li>Experienced with Scrum and Agile practices, continuous integration builds;</li>
                        <li>Excellent communication skills in English, self-organized and motivated;</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p><strong>We offer:</strong></p>
                    <p>As part of Pickatale team you will have a unique opportunity to engage all the experience and
                        knowledge you have gathered, into projects that are motivating and challenging at the same
                        time.  You will have our unceasing support and encouragement to ensure your growth and
                        development in your career path. You will have an opportunity to explore different tools and
                        technologies that will help you explore your true passion. You will work in friendly and
                        welcoming surroundings where new concepts and ides are welcomed to ensure our growth
                        together.</p>
                                                                                                              
                    <p><strong>Our competitive benefits package includes:</strong></p>
                    <ul>
                        <li>Competitive salary package</li>
                        <li>Sporting package</li>
                        <li>Opportunities for online training and certification</li>
                        <li>Many different employee engagement activities</li>
                    </ul>
                @endif

            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <h1 class="section-header red text-center pv-30" style="margin-top:0;">Apply for this job</h1>
            </div>
        </div>

        <div class="row contact-form">
            <div class="col-xs-12 col-sm-offset-1 col-sm-9">
                <form action="/jobs/send" enctype="multipart/form-data" method="POST">
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

                <p>&nbsp;</p>
            </div>
        </div>
    </div>
</div>

@endsection
