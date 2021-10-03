@extends('layouts.app')

@section('content')
        <div class="page-body">
            <div class="row">
                <div class="col-lg-12">
                    <p><a class="btn btn-labeled shiny btn-warning btn-large" href="/admin/scripts/create"> <i
                                    class="btn-label fa fa-plus"></i>Add script </a></p>
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
                            <span class="widget-caption themesecondary">Scripts</span>
                        </div><!--Widget Header-->
                        <div class="widget-body  no-padding">
                            <div class="tickets-container">
                                @unless (count($scripts))
                                    <p>Unfortunately, no items were returned.</p>
                                @endunless

                                <ul class="tickets-list">
                                    @foreach($scripts as $script)
                                        <li class="ticket-item">
                                            <div class="row">
                                                <a href="/admin/scripts/{{ $script->id }}" class="info">
                                                    <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                        <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                        <span class="time">{{$script->name}} @if ($script->status == 1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif</span>
                                                    </div>
                                                    <div class="ticket-type  col-lg-8 col-sm-6 col-xs-12">
                                                        <span class="divider hidden-xs"></span>
                                                        <span class="">{{ substr($script->code, 0, 100) }}</span>
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
                        {!! $scripts->links() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection
