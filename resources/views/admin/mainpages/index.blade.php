@extends('layouts.app')

@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-lg-12">
                <p><a class="btn btn-labeled shiny btn-warning btn-large" href="/admin/mainpages/create"> <i
                                class="btn-label fa fa-plus"></i>Add main page </a></p>
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
                        <span class="widget-caption themesecondary">Main pages</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            @unless (count($mainpages))
                                <p>Unfortunately, no items were returned.</p>
                            @endunless

                            <ul class="tickets-list">
                                @foreach($mainpages as $mainpage)
                                    <li class="ticket-item">
                                        <div class="row">
                                            <a href="/admin/mainpages/{{ $mainpage->id }}/edit" class="info">
                                                <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                   {{$mainpage->title}}
                                                </div>
                                                <div class="ticket-type  col-lg-8 col-sm-6 col-xs-12">

                                                    <span class="divider hidden-xs"></span>
                                                    {{$mainpage->created_at->diffforhumans() }}
                                                    <span class="">{{ substr($mainpage->code, 0, 100) }}</span>
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
                    {!! $mainpages->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
