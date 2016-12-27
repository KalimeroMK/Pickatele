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
                        <span class="widget-caption">Edit {{ $user-> name }}</span>
                    </div>
                    <div class="widget-body">
                        @if(!!$user->image)
                            <img src="/assets/img/avatars/thumbnails/{{ $user->image }}" alt="{{ $user->name }}"
                                 class="img-responsive"/>
                        @endif
                        <div class="col-md-12 pull-right profile-header row">
                        </div>

                        <div id="horizontal-form">
                            {{ Form::model('users', array('route' => ['users.update', $user->id], 'method' =>
                            'PATCH', 'files' => true)) }}
                            <div class="form-title">
                                {{ $user-> name }} Informations
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
                     <div class="form-group">
                         {!! Form::text('name', $user->name , ['placeholder' => 'Name','class'=>'form-control']) !!}
                         @if ($errors->has('name')) <p
                                 class="alert alert-danger">{{ $errors->first('name') }}</p> @endif
                     </div>
                     <i class="glyphicon glyphicon-user circular"></i>
                 </span>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <span class="input-icon icon-right">
                    <div class="form-group">
                        {!! Form::text('email', $user->email , ['placeholder' => 'Email Address','class'=>'form-control']) !!}
                        @if ($errors->has('email')) <p
                                class="alert alert-danger">{{ $errors->first('email') }}</p> @endif
                    </div>
                    <i class="fa fa-envelope-o circular"></i>
                </span>
                            </div>


                            <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                <span class="input-icon icon-right">
                    <div class="form-group">
                        {{ Form::select('role', ['admin' => 'Admin', 'manager' => 'Manager', 'editor' => 'Editor'], $user->role, ['class' => 'form-control']) }}
                        @if ($errors->has('role')) <p class="alert alert-danger">{{ $errors->first('role') }}</p> @endif
                    </div>
                </span>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-icon icon-right">
                    {!! Form::password('password', ['placeholder' => 'Password','class'=>'form-control']) !!}
                    @if ($errors->has('password')) <p
                            class="alert alert-danger">{{ $errors->first('password') }}</p> @endif
                    <i class="fa fa-lock circular"></i>
                </span>

                            </div>
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <span class="input-icon icon-right">
                   <div class="form-group">
                    {!! Form::password('password_confirmation', ['placeholder' => 'Password confirmation','class'=>'form-control']) !!}
                       @if ($errors->has('password_confirmation')) <p
                               class="alert alert-danger">{{ $errors->first('password_confirmation') }}</p> @endif
                </div>
                <i class="fa fa-lock circular"></i>
            </span>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-labeled shiny btn-palegreen btn-large"><i
                                        class="btn-label fa fa-cloud-upload"></i> Update
                            </button>
                            <a href="/admin/users" class="btn btn-labeled shiny btn-default btn-large"><i
                                        class="btn-label fa fa-arrow-circle-left"></i> Cancel</a>
                            </form>

                        </div>


                    </div>
                </div>
            </div>
        </div>

@endsection
