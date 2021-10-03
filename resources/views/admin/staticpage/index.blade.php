@extends('layouts.app')

@section('content')
    <div class="page-body">
        <div class="row">

            <div class="col-lg-12">
                <p><a class="btn btn-labeled shiny btn-warning btn-large" href="/admin/staticpage/create"> <i
                                class="btn-label fa fa-plus"></i>Add Static Page </a></p>
            </div>
            <div class="col-lg-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Static Pages</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            <ul class="tickets-list">
                                @foreach($staticpages as $staticpage)
                                    <li class="ticket-item">
                                        <div class="row">
                                            <div class="ticket-user col-lg-4 col-sm-12">
                                                <a href="/admin/staticpage/{{ $staticpage->id }}/edit" class="info">
                                                    @if($staticpage->image)
                                                        <img src="/assets/img/staticpage/{{ $staticpage->imagethumb }}"
                                                             class="user-avatar">
                                                    @endif
                                                    <span class="user-name">{{ $staticpage->title }}</span>
                                                </a>
                                            </div>
                                            <div class="ticket-time col-lg-4 col-sm-4 col-xs-12">
                                                <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                <i class="glyphicon glyphicon-link"></i>
                                                <span class="time">{{ strip_tags($staticpage->title) }}</span>
                                            </div>
                                            <div class="ticket-type col-lg-4 col-sm-4 col-xs-12">
                                                <span class="divider hidden-xs"></span>
                                                <span class="type">{{ $staticpage->created_at }}</span>
                                            </div>
                                            <div class="ticket-state bg-palegreen">
                                                <i class="glyphicon glyphicon-eye-open"></i>
                                            </div>

                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 right">
                    {!! $staticpages->links() !!}
                </div>
            </div>
        </div>
@endsection




