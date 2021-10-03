@extends('layouts.app')

@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-lg-offset-1 col-sm-offset-1 col-lg-10 col-sm-10 col-xs-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-warning">
                        <span class="widget-caption">Add new script</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">
                            <form role="form" method="POST" action="{{ url('/admin/scripts') }}">
                                {!! csrf_field() !!}
                                <div class="form-title">
                                    Script Information
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <span class="input-icon icon-right">
                                <input type="text" class="form-control" id="userameInput" name="name" placeholder="Name" value="{{ old('name') }}">
                            </span>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <span class="input-icon icon-right">
                                <textarea class="form-control" id="codeInput" name="code" placeholder="Code">{{ old('code') }}</textarea>
                                </span>
                                    @if ($errors->has('code'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>
                                        <input name="status" class="form-control colored-palegreen" value="1" @if (old('status') == 1) checked="checked" @endif type="radio">
                                        <span class="text"> Active</span>
                                    </label>

                                    <label style="padding-left:20px">
                                        <input name="status" class="form-control colored-orange" value="0" @if (!old('status')) checked="checked" @endif type="radio">
                                        <span class="text"> Disabled</span>
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-labeled shiny btn-warning btn-large"><i class="btn-label fa fa-plus"></i> Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection