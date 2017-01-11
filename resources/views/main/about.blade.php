@extends('layouts.main')
@include('layouts.mainmenu')
@section('content')
    <div class="banner clearfix">
        <div class="slideshow">
            <!-- slideshow start -->
            <!-- ================ -->
            <div class="slideshow">
                <!-- slider revolution start -->
                <!-- ================ -->
                <div class="slider-banner-container" style="overflow: visible;">
                    <div class="slider-banner-fullwidth-big-height revslider-initialised tp-simpleresponsive"
                         style="max-height: 650px; height: 650px;" id="revslider-59">
                        <ul class="slides tp-revslider-mainul"
                            style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;">
                            <!-- slide 1 start -->
                            <!-- ================ -->
                            <li data-transition="fadefromtop" data-slotamount="1" data-masterspeed="500"
                                data-saveperformance="on" data-title="Slide 1"
                                class="tp-revslider-slidesli active-revslide current-sr-slide-visible"
                                style="width: 100%; height: 100%; overflow: hidden; visibility: inherit; opacity: 1; z-index: 20;">
                                <!-- main image -->
                                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                     data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                                     data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                                     data-bgposition="center top" data-kenburns="undefined" data-easeme="undefined"
                                     data-bgfit="cover" data-bgfitend="undefined" data-owidth="undefined"
                                     data-oheight="undefined">
                                    <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                         data-bgposition="center top" data-bgrepeat="no-repeat"
                                         data-lazydone="undefined" src="/assets/images/about-headline.png"
                                         data-src="/assets/images/about-headline.png"
                                         style="background-color: transparent; background-repeat: no-repeat; background-image: url(&quot;/assets/images/about-headline.png&quot;); background-size: cover; background-position: center top; width: 100%; height: 100%; opacity: 1; visibility: inherit;"></div>
                                </div>
                            </li>
                            <!-- slide 1 end -->
                        </ul>
                        <div class="tp-loader spinner2" style="display: none;">
                            <div class="dot1"></div>
                            <div class="dot2"></div>
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                        <div class="tp-bannertimer" style="visibility: hidden; width: 0%; margin-top: 101px;"></div>
                    </div>
                </div>
                <!-- slider revolution end -->

            </div>
            <!-- slideshow end -->

        </div>
    </div>

    <div class="about-us-pattern-1"></div>
    <div class="about-us-pattern-2"></div>

    <div style="z-index:1" class="container about-us">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-8">
                <h1 class="section-header text-center red">The Pickatale story</h1>

                <p>Pickatale story started back in 2013. Knowing that children today grow up with digital devices, it's
                    natural for parents and teachers to use apps for educational purposes. There are so many mobile apps
                    intended for children, but we realized there's one important problem. These apps are addictive and
                    without any real educational value to improve children's reading and language learning skills.</p>

                <p>We wanted to help children develop a love of reading. In the course of the years, Pickatale now
                    features 1000+ interactive childrens books in our app on English, Norwegian, Danish, Swedish and Chinese. We
                    are paying special attention to each and every book released and we take pride in the knowing that both,
                    the parents and children will enjoy the experience.</p>

                <p>Always on the lookout for talented individuals, we bring together the work of authors, illustrators,
                    narrators and translators from all over the globe, sewing them seamlessly together into unique
                    pieces of our own and delivering them to children all around the world through the library apps. Our books are
                    to a child what art galleries are to an adult: a collection of masterpieces, finely curated by our
                    dedicated team of professionals.</p>


                <h2 class="section-subheader">Mission</h2>

                <p>Our mission is to create an absolute digital reading platform for young children utilizing today's
                    technology in order to learn new languages.</p>

                <h2 class="section-subheader">Vision</h2>

                <p>Transforming young childhood education through the power of technology.</p>

                <p>The parent company behind Pickatale is Wisdom Edition AS. It was founded in January 2013 in Norway.
                    Today our family counts over 90 employees with offices based in Beijing, Shanghai and Skopje.</p>

                <p>During the years we have developed successful partnerships with content owners, including the Walt
                    Disney Company and BabyFirst. These co-developed projects include co-branded library apps for China and
                    Global markets, and premium offerings in Pickatale's library app.</p>

                <h2 class="section-subheader">What's next</h2>

                <p>Pickatale v2.0 is an adaptive learning system developed to assist parents and teachers with
                    personalized lesson plans to teach English through a variety of books, games, media and assessments.
                    Parents and teachers will get access to comprehensive reporting and recommendations that improve the learning
                    process. It is scheduled to launch in Q2 2017 and will become a digital platform for media & learning
                    app distribution globally.</p>

                <p>While the Wisdom Edition AS focuses on new technology development and extending into new markets such
                    as USA and Europe, the Chinese joint venture, Qudu Edu has built a substantial distribution network in
                    China. Pickatale ha over 10.000 schools and 12.000 kindergartens.</p>

                <h2 class="section-header text-center red" style="margin-top: 75px;">Want to learn more about us?<br>Get
                    in touch</h2>
            </div>
        </div>
    </div>
    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-2 col-sm-8">
                    <form>
                        <div class="form-group col-xs-12 col-sm-6 col-md-6">
                            <label for="nameInput">Name</label>
                            <input type="text" class="form-control" id="nameInput" placeholder="Name">
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-6">
                            <label for="emailInput">Email</label>
                            <input type="email" class="form-control" id="emailInput" placeholder="Email">
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="custom" for="typeInput1">Type of Contact</label>
                            <select id="typeInput1" class="select2 form-control">
                                <option value="customers">Customers</option>
                                <option value="developers">Developers</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-12 col-md-6" style="margin-top: 28px;">
                            <div>
                                <select class="select2 form-control">
                                    <option value="parent">Parent</option>
                                </select>
                            </div>
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
                        <div class="form-group col-xs-6 pull left">
                            {!! Recaptcha::render() !!}
                        </div>
                        <div class="form-group col-xs-6 button-container">
                            <button type="submit" class="btn custom-btn pink-btn pull-right">Submit</button>
                        </div>
                    </form>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
@endsection
