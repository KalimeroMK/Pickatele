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
                <img src="/assets/images/book-details/book-large.png"/>
            </div>

            <div class="col-xs-12 col-sm-8">
                <h1 class="section-header red">Tom and Smudge's Rainy Day</h1>

                <p class="author">By Author Name, 2017</p>
                <p>&nbsp;</p>
                <p class="emphased-text">Description</p>
                <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially</p>
                <p>&nbsp;</p>
                <p>
                    <span class="emphased-text">Genre</span>
                    <span class="genre">Adventure</span>

                    <span class="emphased-text" style="margin-left:50px;margin-right:10px">Book Trailer</span>
                    <a href="#"><img style="display: inline-block" src="/assets/images/book-details/trailer.png" /></a>
                </p>
                <p>&nbsp;</p>
                <p class="emphased-text">Enjoy this and 1000+ other interactive stories</p>

                <ul class="store-links">
                    <li style="padding-left:0"><a href="#"><img src="/assets/images/book-details/1-apple-store.png" /></a></li>
                    <li><a href="#"><img src="/assets/images/book-details/2-google-store.png" /></a></li>
                    <li><a href="#"><img src="/assets/images/book-details/3-cn-store.png" /></a></li>
                </ul>

            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 inside-images">
                <a href="#">
                <img src="/assets/images/book-details/book-sm-1.png" />
                </a>
                <a href="#">
                <img src="/assets/images/book-details/book-sm-2.png" />
                </a>
                <a href="#">
                <img src="/assets/images/book-details/book-sm-3.png" />
                </a>
                <a href="#">
                <img src="/assets/images/book-details/book-sm-1.png" />
                </a>
                <a href="#">
                <img src="/assets/images/book-details/book-sm-2.png" />
                </a>
            </div>
        </div>
        <div class="row" style="margin-top:10px">
            <div class="col-xs-12 pull-left">
                <a class="link-back" href="/">Quick look inside</a>
            </div>
        </div>

        <div class="category-slider">
        <div class="row">
            <div class="col-xs-12 pull-left">
                <div><span class="more-from">More from</span> <span>Adventure</span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 book-category-slider">
                <a href="#"><img style="padding-left:0" src="/assets/images/book-details/more-book1.png"></a>
                <a href="#"><img src="/assets/images/book-details/more-book2.png"></a>
                <a href="#"><img src="/assets/images/book-details/more-book3.png"></a>
                <a href="#"><img src="/assets/images/book-details/more-book4.png"></a>
                <a href="#"><img src="/assets/images/book-details/more-book5.png"></a>
                <a href="#"><img src="/assets/images/book-details/more-book6.png"></a>
                <a href="#"><img src="/assets/images/book-details/more-book7.png"></a>
                <a href="#"><img src="/assets/images/book-details/more-book8.png"></a>
            </div>
        </div>
        </div>
    </div>
@endsection
