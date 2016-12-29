@extends('layouts.app')

@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-lg-offset-1 col-sm-offset-1 col-lg-10 col-sm-10 col-xs-12">

                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif

                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-warning">
                        <span class="widget-caption">Edit {{ $script->name }}</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">

                            {{ Form::model('script', array('route' => array('scripts.destroy', $script->id),
        'method' => 'DELETE', 'class' => 'pull-right'))}}

                            {!! csrf_field() !!}

                            <button type="submit" class="btn btn-labeled shiny btn-danger delete"><i
                                        class="btn-label fa fa-trash"></i> Delete
                            </button>
                            {{ Form::close() }}


                            {{ Form::model('script', array('route' => array('scripts.update', $script->id), 'method' => 'PUT')) }}
                                {!! csrf_field() !!}
                                <div class="form-title">
                                    Script Information
                                </div>
                                <input type="hidden" name="id" value="{{ $script->id }}" />

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <span class="input-icon icon-right">
                                <input type="text" class="form-control" id="nameInput" name="name" placeholder="Name" value="{{ $script->name }}">
                                <i class="glyphicon glyphicon-user circular"></i>
                            </span>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <span class="input-icon icon-right">
                                <textarea class="form-control" id="codeInput" name="code" placeholder="Code">{{ $script->code }}</textarea>
                                </span>
                                    @if ($errors->has('code'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>
                                        <input name="status" class="form-control colored-palegreen" @if ($script->status == 1) checked="checked" @endif }} value="1" type="radio">
                                        <span class="text"> Active</span>
                                    </label>

                                    <label style="padding-left:20px">
                                        <input name="status" class="form-control colored-orange" @if ($script->status == 0) checked="checked" @endif value="0" type="radio">
                                        <span class="text"> Disabled</span>
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-labeled shiny btn-warning btn-large"><i class="btn-label fa fa-plus"></i> Update</button>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection