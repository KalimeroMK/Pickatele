@if(!$faqs || count($faqs) === 0)
    <!--<div class="error-msg">No results found...</div>-->
@endif

@foreach($results as $faq)
    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->id}}">
                {{$faq->question}}
            </a>
        </div>

        <div id="collapse{{$faq->id}}" class="accordion-body collapse">
            <div class="accordion-inner">
                {{$faq->answer}}
            </div>
        </div>
    </div>
@endforeach

