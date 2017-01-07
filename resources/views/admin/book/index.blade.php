@extends('layouts.app')

@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <p><a class="btn btn-labeled shiny btn-warning btn-large" href="/admin/book/create"> <i class="btn-label fa fa-plus"></i>Add book </a></p>
            </div>
            <div class="col-lg-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Books</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            <ul class="tickets-list">
                                @foreach($books as $book)
                                    <li class="ticket-item">
                                        <div class="row">
                                            <a href="/admin/book/{{ $book->id }}/edit" class="info">
                                                <div class="ticket-user col-lg-6 col-sm-12">
                                                    @if($book->image)
                                                        <img src="/assets/img/books/thumbnails/{{ $book->image }}" class="user-avatar">
                                                    @endif
                                                    <span class="user-name">{{ $book->title }}</span>
                                                </div>

                                                <div class="ticket-time col-lg-3 col-sm-6 col-xs-12">
                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                    <span class="time"><a href="/admin/sliders/{{ $book->id }}/book" class="btn btn-info">Add gallery</a></span>
                                                </div>



                                                <div class="ticket-state bg-palegreen">
                                                    <i class="glyphicon glyphicon-eye-open"></i>
                                                </div>
                                        </div>
                                        </a>
                                        @endforeach
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 right">
                    {!! $books->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
