@extends('layouts.main')
@include('layouts.mainmenu')
@section('content')

    <div class="book-details container">
        <div class="row">
            <div class="col-xs-12 pull-left">
                <a class="link-back" href="/books"><img src="/assets/images/book-details/icon-back.png"> Back to book
                    library</a>
            </div>
        </div>

        <div class="row main-content">
            <div class="col-xs-12 col-sm-4 pull-left">
                <img src="/assets/img/books/{{ $book->image }}"/>

                <div class="col-xs-12 pull-left inside-images">
                    @foreach($bookimages as $image)

                        <a href="#">
                            <img src="/assets/img/sliders/{{ $image->image }}"/>
                        </a>
                    @endforeach
                </div>
            </div>


            <div class="col-xs-12 col-sm-8">
                <h1 class="section-header red">{!! $book->title !!}</h1>

                <p class="author">By {{ $book->author }}, 2017</p>
                <p style="margin-top:40px" class="emphased-text">Description</p>
                <p class="description">{!! $book->description !!}</p>
                <p style="margin-top:20px">
                    <span class="emphased-text">Genre</span>
                    <span class="genre">{{ $book->genre->name }}</span>

                    <span class="emphased-text" style="margin-left:50px;margin-right:10px">Book Trailer</span>
                    <a href="{{ $book->video }}"><img style="display: inline-block"
                                                      src="/assets/images/book-details/trailer.png"/></a>
                </p>

                <p style="margin-top:50px;margin-bottom:15px" class="emphased-text">Enjoy this and 1000+ other
                    interactive stories</p>

                <ul style="margin-top:0" class="store-links">
                    <li style="padding-left:0"><a href="#"><img
                                    src="/assets/images/book-details/1-apple-store.png"/></a></li>
                    <li><a href="#"><img src="/assets/images/book-details/2-google-store.png"/></a></li>
                    <li><a href="#"><img src="/assets/images/book-details/3-cn-store.png"/></a></li>
                </ul>

            </div>
        </div>
        <div class="row">

        </div>
        <div class="row" style="margin-top:10px">
            <div class="col-xs-12 pull-left">
                <a class="link-back" href="/">Quick look inside</a>
            </div>
        </div>


            <div class="category-slider">
                @if(count($relatedbooks) > 1)
                <div class="row">

                    <div class="col-xs-12 pull-left">
                        <div><span class="more-from">More from</span> <span>{{ $book->genre->name }}</span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-1">
                        <a href="#" class="prev"><i class="fa fa-chevron-left"></i></a>
                    </div>
                    <div class="col-xs-10 book-category-sliderr">
                        <div class="owl-carousel">
                            @foreach($relatedbooks as $relatedbook)
                            <a href="{{ $relatedbook->slug }}">
                                <img style="padding-left:0" src="/assets/img/books/{{ $relatedbook->imagethumb }}">
                            </a>
                        @endforeach
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <a href="#" class="next"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
                @endif
            </div>
    </div>
@endsection
