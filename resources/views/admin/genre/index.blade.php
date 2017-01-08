@extends('layouts.app')


@section('content')

    <div class="page-body">
        <div class="row">
            <div class="col-lg-12">

                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif


                <p><a class="btn btn-labeled shiny btn-warning btn-large" href="/admin/genre/create"> <i
                                class="btn-label fa fa-plus"></i>Add Genre </a></p>
            </div>


            <div class="col-lg-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Genres</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">

                            {!! $list !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>

@endsection
