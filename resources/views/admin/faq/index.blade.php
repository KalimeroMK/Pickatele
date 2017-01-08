@extends('layouts.app')

@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-lg-12">
                <p><a class="btn btn-labeled shiny btn-warning btn-large" href="/admin/faq/create"> <i
                                class="btn-label fa fa-plus"></i>Add faq </a></p>
            </div>
            <div class="col-lg-12">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif

                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Help Center</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @unless (count($faqs))
                                <p>Unfortunately, no items were returned.</p>
                            @endunless

                            <ul class="tickets-list">
                                @foreach($faqs as $faq)
                                    <li class="ticket-item">
                                        <div class="row">
                                            <a href="/admin/faq/{{ $faq->id }}" class="info">
                                                <div class="ticket-time  col-lg-5 col-sm-12 col-xs-12">
                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                    <span class="time">{{str_limit($faq->question, 200)}} @if ($faq->status == 1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif</span>
                                                </div>
                                                <div class="ticket-type  col-lg-5 col-sm-12 col-xs-12">
                                                    <span class="divider hidden-xs"></span>
                                                    <span class="">{{ substr(str_limit($faq->answer, 200), 0, 100) }}</span>
                                                </div>
                                                <div class="ticket-type  col-lg-2 col-sm-12 col-xs-12">


                                                    {{ Form::model('faq', array('route' => array('faq.destroy', $faq->id), 'method' => 'DELETE', 'id' => 'partner'))}}
                                                    {!! csrf_field() !!}

                                                    <button type="submit" class="btn btn-labeled shiny btn-danger delete"><i
                                                                class="btn-label fa fa-trash"></i> Delete
                                                    </button>
                                                    {{ Form::close() }}
                                                </div>
                                                <div class="ticket-state bg-palegreen">
                                                    <i class="glyphicon glyphicon-eye-open"></i>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 right">
                    {!! $faqs->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
