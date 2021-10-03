@extends('layouts.app')

@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-lg-offset-1 col-sm-offset-1 col-lg-10 col-sm-10 col-xs-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-warning">
                        <span class="widget-caption">Add new user</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">
                            {{ Form::model('users', array('route' => ['users.store'], 'method' =>
                           'POST', 'files' => true)) }}
                                <div class="form-title">
                                    User Information
                                </div>

                                <div class="input-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        <span class="input-group-btn">
                            <span class="btn btn-info shiny btn-file">
                            <i class="btn-label fa fa-image"> </i> Browse... <input type="file" name="image">
                         </span>
                        </span>
                                    <input type="text" class="form-control" readonly="">
                                    @if ($errors->has('image')) <p
                                            class="alert alert-danger">{{ $errors->first('image') }}</p> @endif
                                </div>
                                <br/>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <span class="input-icon icon-right">
                                <input type="text" class="form-control" id="userameInput" name="name" placeholder="Name"
                                       value="{{ old('name') }}">
                                <i class="glyphicon glyphicon-user circular"></i>
                            </span>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <span class="input-icon icon-right">
                                <input type="email" class="form-control" id="emailInput" name="email"
                                       placeholder="Email Address" value="{{ old('email') }}">
                                <i class="fa fa-envelope-o circular"></i>
                            </span>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <span class="input-icon icon-right">
                                <select name="role">
                                    <option value="admin">Admin</option>
                                    <option value="manager">Manager</option>
                                    <option value="editor">Editor</option>
                                </select>
                                <i class="fa fa-envelope-o circular"></i>
                            </span>
                            @if ($errors->has('role'))
                                <span class="help-block">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="input-icon icon-right">
                                <input type="password" class="form-control" id="passwordInput" name="password"
                                       placeholder="Password">
                                <i class="fa fa-lock circular"></i>
                            </span>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <span class="input-icon icon-right">
                                <input type="password" class="form-control" id="confirmPasswordInput"
                                       name="password_confirmation" placeholder="Confirm Password">
                                <i class="fa fa-lock circular"></i>
                            </span>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-labeled shiny btn-warning btn-large"><i
                                    class="btn-label fa fa-plus"></i> Register
                        </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
