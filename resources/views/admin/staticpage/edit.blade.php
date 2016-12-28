@extends('layouts.app')
@section('content')

    <div class="page-body">
        <div class="row">
            <div class="col-lg-offset-1 col-sm-offset-1 col-lg-10 col-sm-12 col-xs-12">

                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif

                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-warning">
                        <span class="widget-caption">Edit static page: {{ strip_tags($staticpage->title) }}</span>
                    </div>
                    <div class="widget-body">

                        <div class="img-blog">
                            @if(!!$staticpage->image)
                                <img class="img-responsive"
                                     src="/assets/img/staticpage/medium/{{ $staticpage->imagemedium }}"
                                     alt="{{ $staticpage->title }}"/>
                            @endif
                        </div>
                        <br/>


                        <div id="horizontal-form">

                            {{ Form::model('staticpage', array('route' => array('admin.staticpage.update', $staticpage->id), 'method' => 'PUT','files' => true)) }}
                            {!! csrf_field() !!}


                            <div class="input-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        <span class="input-group-btn">
                            <span class="btn btn-info shiny btn-file">
                                <i class="btn-label fa fa-image"> </i> Browse... <input type="file" name="image">
                            </span>
                        </span>
                                <input type="text" class="form-control" readonly="">
                            </div>
                            <br/>
                            @if ($errors->has('image')) <p
                                    class="alert alert-danger">{{ $errors->first('image') }}</p> @endif

                            <div class="form-group">
                                <label for="title">Title</label>
                                <textarea class="ckeditor" id="title" name="title">{{ $staticpage->title }}</textarea>
                            </div>
                            @if ($errors->has('title')) <p
                                    class="alert alert-danger">{{ $errors->first('title') }}</p> @endif


                            <div class="form-group">
                                <label for="description">Product description</label>
                                <textarea class="ckeditor" id="elm3"
                                          name="description">{{ $staticpage->description }}</textarea>
                            </div>
                            @if ($errors->has('description')) <p
                                    class="alert alert-danger">{{ $errors->first('description') }}</p> @endif


                            <div class="form-group">
                                <label for="user">Translator</label>
                                <select name="user_id" id="user" class="form-control">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                                @if($staticpage->user_id == $user->id) selected @endif >{{ $user->name }}</option>
                                    @endforeach

                                </select>
                            </div>


                            <div class="form-group">
                                <label>Workflow: </label>
                                @foreach($workflows as $workflow)
                                    <label>
                                        <input name="workflow_id" type="radio"
                                               class="form-control {{ $workflow->color }}" value="{{ $workflow->id }}"
                                               @if($workflow->id  == $staticpage->workflow_id) checked @endif>
                                        <span class="text"> {{ $workflow->name }}</span>
                                    </label>
                                @endforeach


                            </div>

                            <button type="submit" class="btn btn-labeled shiny btn-info btn-large"><i
                                        class="btn-label fa fa-plus"></i> Update
                            </button>
                            {!! Form::close() !!}

                            <hr/>


                            {{ Form::model('staticpage', array('route' => array('admin.staticpage.destroy', $staticpage->id), 'method' => 'DELETE', 'id' => 'staticpage'))}}
                            {!! csrf_field() !!}

                            <button type="submit" class="btn btn-labeled shiny btn-danger delete"><i
                                        class="btn-label fa fa-trash"></i> Delete
                            </button>
                            {{ Form::close() }}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
