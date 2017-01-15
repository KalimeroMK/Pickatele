@section('partners')
    <!-- ================ -->
    <section class="light-gray-bg partners">
        <div class="container">
            <h1 class="section-header-dark">They love to work with us</h1>
            <!-- clients start -->
            <!-- ================ -->
            <div class="clients-container">
                <div class="clients">
                    <div class="client-image object-non-visible" data-animation-effect="fadeIn"
                    data-effect-delay="100">
                        <a href="https://www.tiggly.com/">
                            <img src="/assets/images/partners/TigglyLogo.png" alt="TigglyLogo.png">
                        </a>
                    </div>

                    <div class="client-image object-non-visible" data-animation-effect="fadeIn"
                         data-effect-delay="100">
                        <a href="#">
                            <img src="/assets/images/partners/kidstime_logo.png" alt="kidstime_logo.png">
                        </a>
                    </div>

                    <div class="client-image object-non-visible" data-animation-effect="fadeIn"
                         data-effect-delay="100">
                        <a href="http://www.disney.com/">
                            <img src="/assets/images/partners/disney.png" alt="disney.png">
                        </a>
                    </div>

                    <div class="client-image object-non-visible" data-animation-effect="fadeIn"
                         data-effect-delay="100">
                        <a href="http://www.fingerprintplay.com/">
                            <img src="/assets/images/partners/fingerprint.png" alt="fingerprint.png">
                        </a>
                    </div>

                    <div class="client-image object-non-visible" data-animation-effect="fadeIn"
                         data-effect-delay="100">
                        <a href="https://www.phonicsschool.com/">
                            <img src="/assets/images/partners/PhonicsSchool.png" alt="PhonicsSchool.png">
                        </a>
                    </div>

                    <div class="client-image object-non-visible" data-animation-effect="fadeIn"
                         data-effect-delay="100">
                        <a href="http://kidoz.net/">
                            <img src="/assets/images/partners/kiddoz.png" alt="kiddoz.png">
                        </a>
                    </div>

                    <div class="client-image object-non-visible" data-animation-effect="fadeIn"
                         data-effect-delay="100">
                        <a href="http://www.lotuspen.com/">
                            <img src="/assets/images/partners/TrueColor.png" alt="TrueColor.png">
                        </a>
                    </div>

                    {{--@foreach($partners as $partner)--}}
                    {{--<div class="client-image object-non-visible" data-animation-effect="fadeIn"--}}
                         {{--data-effect-delay="100">--}}
                        {{--<a href="#"><img src="/assets/img/partners/thumbnails/{{$partner->image}}" alt="{{ $partner->title }}"></a>--}}
                    {{--</div>--}}
                    {{--@endforeach--}}

                </div>
            </div>
            <!-- clients end -->
        </div>
    </section>
    <!-- section end -->
@endsection