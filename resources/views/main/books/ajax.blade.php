@if(count($books->all()) === 0)
    <div class="error-msg">No results found...</div><p>&nbsp;</p><p>&nbsp;</p>
@endif

@foreach(array_chunk($books->all(), 3) as $books)
    <div class="row">
        @foreach($books as $book)
            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="/assets/img/books/{{ $book->image }}">

                <div class="text-center book-title">
                    <h6 class="section-header text-center red">{!! $book->title !!}</h6>
                </div>
                <div class="text-center">
                    <a href="/book/{{ $book->slug }}" class="btn custom-btn pink-btn">Read More</a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row text-center">
        {{  $bookpaginator->links() }}
    </div>
@endforeach