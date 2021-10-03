@extends('layouts.main')
@section('style')
    <style>
        .header-container .header {
            /*background-color: #007299;*/
            background-image: url('../assets/images/blue-header-bg.png');
            background-repeat: no-repeat;
            background-position: center;
        }
        @media (max-width: 767px) {
            #fullpage-menu {
                background-color: #0196d8;
                margin-top: 0;
            }
        }
    </style>

@endsection
@include('layouts.mainmenu')
@section('content')
<div class="book-bg">
    <div class="book-details container">
        <div class="row">
            <div class="col-xs-12 pull-left">
                <a class="link-back" href="/books"><img src="/assets/images/book-details/icon-back.png"> Back to book
                    library</a>
            </div>
        </div>

        <div class="row main-content">
            <div class="col-xs-12 col-sm-4 pull-left">
                <img src="/assets/img/books/thumbnails/{{ $book->image }}"/>

                @if (count($bookimages))
                <div class="col-xs-12 book-category-slider" style="margin-left:-25px">
                    <a href="#" style="left:-10px" class="prev inside-prev"><img src="/assets/images/left-arrow.png" /></a>
                    <div class="inside-carousel owl-carousel">
                    @foreach($bookimages as $image)
                        <a href="/assets/img/sliders/{{ $image->image }}" data-toggle="lightbox" data-gallery="look-inside">
                            <img src="/assets/img/sliders/{{ $image->image }}"/>
                        </a>
                    @endforeach
                    </div>
                    <a href="#" style="right:-15px" class="next inside-next"><img src="/assets/images/right-arrow.png" /></a>
                </div>
                @endif
            </div>


            <div class="col-xs-12 col-sm-8">
                <h1 class="section-header red">{!! $book->title !!}</h1>

                <p class="author">By {{ $book->author }}, 2017</p>
                <p style="margin-top:40px" class="emphased-text">Description</p>
                <p class="description">{!! $book->description !!}</p>
                <p style="margin-top:20px">
                    <span class="emphased-text">Genre</span>
                    <span class="genre">{{ $book->genre->name }}</span>

                    @if ($book->video)
                    <span class="emphased-text" style="margin-left:50px;margin-right:10px">Book Trailer</span>
                    <a href="{{ $book->video }}">
                        <img style="display: inline-block" src="/assets/images/book-details/trailer.png"/>
                    </a>
                    @endif
                </p>

                <p style="margin-top:50px;margin-bottom:15px" class="emphased-text">Enjoy this and 1000+ other
                    interactive stories</p>

                <ul style="margin-top:0" class="store-links">
                    <li style="padding-left:0">
                        <a href="https://itunes.apple.com/us/app/pickatale-200+-interactive/id669433655?mt=8">
                            <img src="/assets/images/book-details/1-apple-store.png"/>
                        </a>
                    </li>
                    <li>
                        <a href="https://play.google.com/store/apps/details?id=com.WisdomEdition.Pickatale.Bookshelf&hl=en">
                            <img src="/assets/images/book-details/2-google-store.png"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.wandoujia.com/apps/com.quduedu.pickatale">
                            <img src="/assets/images/book-details/3-cn-store.png"/>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="row">

        </div>
        @if(count($bookimages))
        <div class="row" style="margin-top:10px">
            <div class="col-xs-12 pull-left">
                <a class="link-back quick-look" href="/">Quick look inside</a>
            </div>
        </div>
        @endif

            <div class="category-slider">
                @if(count($relatedbooks) > 1)
                <div class="row">

                    <div class="col-xs-12 pull-left">
                        <div><span class="more-from">More from</span> <span>{{ $book->genre->name }}</span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                    </div>
                    <div class="col-xs-12 book-category-slider">
                        <a href="#" class="prev more-prev"><img src="/assets/images/left-arrow.png" /></a>
                        <div class="more-carousel owl-carousel">
                            @foreach($relatedbooks as $relatedbook)
                            <a href="{{ $relatedbook->slug }}">
                                <img style="padding-left:0" src="/assets/img/books/thumbnails/{{ $relatedbook->imagethumb }}">
                            </a>
                            @endforeach
                        </div>
                        <a href="#" class="next more-next"><img src="/assets/images/right-arrow.png" /></a>
                    </div>
                    <div class="">
                    </div>
                </div>
                @endif
            </div>
    </div>
</div>
@endsection