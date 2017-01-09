@section('partners')
    <!-- ================ -->
    <section class="light-gray-bg partners">
        <div class="container">
            <h1 class="section-header-dark">They love to work with us</h1>
            <!-- clients start -->
            <!-- ================ -->
            <div class="clients-container">
                <div class="clients">
                    @foreach($partners as $partner)
                    <div class="client-image object-non-visible" data-animation-effect="fadeIn"
                         data-effect-delay="100">
                        <a href="#"><img src="/assets/img/partners/thumbnails/{{$partner->image}}" alt="{{ $partner->title }}"></a>
                    </div>
                    @endforeach

                </div>
            </div>
            <!-- clients end -->
        </div>
    </section>
    <!-- section end -->
@endsection