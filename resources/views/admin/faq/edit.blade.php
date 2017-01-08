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
                        <span class="widget-caption">Edit {{ $faq->name }}</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">

                            {{ Form::model('faq', array('route' => array('faq.destroy', $faq->id),
                                        'method' => 'DELETE', 'class' => 'pull-right'))}}

                            {!! csrf_field() !!}

                            <button type="submit" class="btn btn-labeled shiny btn-danger delete"><i
                                        class="btn-label fa fa-trash"></i> Delete
                            </button>
                            {{ Form::close() }}


                            {{ Form::model('faq', array('route' => array('faq.update', $faq->id), 'method' => 'PUT')) }}
                            {!! csrf_field() !!}
                            <div class="form-title">
                                Script Information
                            </div>
                            <input type="hidden" name="id" value="{{ $faq->id }}" />

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <span class="input-icon icon-right">
                                <label for="question">Question?</label>
                                <input type="text" class="form-control" id="question" name="question" placeholder="question" value="{{ $faq->question }}">
                                <i class="glyphicon glyphicon-user circular"></i>
                            </span>
                                @if ($errors->has('question'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('question') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('answer') ? ' has-error' : '' }}">
                            <span class="input-icon icon-right">
                                <label for="answer">Answer</label>
                                <textarea class="form-control" id="answer" name="answer" placeholder="Answer">{{ $faq->answer }}</textarea>
                                </span>
                                @if ($errors->has('code'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>
                                    <input name="status" class="form-control colored-palegreen" @if ($faq->status == 1) checked="checked" @endif }} value="1" type="radio">
                                    <span class="text"> Active</span>
                                </label>

                                <label style="padding-left:20px">
                                    <input name="status" class="form-control colored-orange" @if ($faq->status == 0) checked="checked" @endif value="0" type="radio">
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