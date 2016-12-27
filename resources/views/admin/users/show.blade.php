@extends('layouts.app')

@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-container">
                    <div class="profile-header row">
                        <div class="col-lg-2 col-md-4 col-sm-12 text-center">
                            @if(!!$user->image)
                                <img src="/assets/img/avatars/thumbnails/{{ $user->image }}" alt="{{ $user->name }}"
                                     class="header-avatar"/>
                            @endif
                        </div>
                        <div class="col-lg-5 col-md-8 col-sm-12 profile-info">
                            <div class="header-fullname">{{ $user->name }}</div>
                            <div class="header-information">
                                <p>Name: {{ $user->name }} </p>
                                <p>Email: {{ $user->email }}</p>
                                <p>Created at: {{ $user->created_at }}</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 profile-stats">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 stats-col hidden-xs">
                                    <div class="stats-value pink"></div>
                                    <div class="stats-title">ROLE</div>
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 stats-col">
                                    <div class="stats-title orange"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                    <button class="capitalize btn btn-palegreen shiny">{{ $user->role }}</button>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                    <a href="/admin/users/{{ $user->id }}/edit"
                                       class="btn btn-labeled shiny btn-warning edit"><i
                                                class="btn-label fa fa-edit"></i> Edit</a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                    {{ Form::model('users', array('route' => ['users.destroy', $user->id], 'method' =>
                                                              'DELETE', 'files' => true)) }}
                                        <button type="submit" class="btn btn-labeled shiny btn-danger delete"><i
                                                    class="btn-label fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection