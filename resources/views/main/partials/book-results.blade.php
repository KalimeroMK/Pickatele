@if(count($books) === 0)
    <div class="error-msg">No results found...</div><p>&nbsp;</p><p>&nbsp;</p>
@endif

<div class="row">
    @foreach($books as $book)
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="book-entry">
                <img src="/assets/img/books/thumbnails/{{ $book->imagethumb }}">

                <div class="text-center book-title">
                    <h6 class="section-header text-center red">{!! $book->title !!}</h6>
                </div>

                <div class="text-center">
                    <a href="/book/{{ $book->slug }}" class="btn custom-btn pink-btn">Read More</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="row text-center">
    {{  $books->links() }}
</div>