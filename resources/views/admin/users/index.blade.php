@extends('layouts.app')

@section('content')
    <div class="page-body">
        <div class="row">

            <div class="col-lg-12">
                <p><a class="btn btn-labeled shiny btn-warning btn-large" href="/admin/users/create"> <i
                                class="btn-label fa fa-plus"></i>Add user </a></p>
            </div>
            <div class="col-lg-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Users</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            <ul class="tickets-list">
                                @foreach($users as $user)
                                    <li class="ticket-item">
                                        <div class="row">
                                            <a href="/admin/users/{{ $user->id }}" class="info">
                                                <div class="ticket-user col-lg-6 col-sm-12">
                                                    @if($user->image)
                                                        <img src="/assets/img/avatars/thumbnails/{{ $user->image }}"
                                                             class="user-avatar">
                                                    @endif
                                                    <span class="user-name">{{ $user->name }}</span>
                                                </div>
                                                <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                    <i class="glyphicon glyphicon-envelope"></i>
                                                    <span class="time">{{$user->email}}</span>
                                                </div>
                                                <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                    <span class="divider hidden-xs"></span>
                                                    <span class="type">{{ $user->role }}</span>
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
                    {!! $users->links() !!}
                </div>
            </div>
@endsection
