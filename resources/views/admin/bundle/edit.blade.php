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
                        <span class="widget-caption">Edit bundle: {{ strip_tags($bundle->title) }}</span>
                    </div>
                    <div class="widget-body">

                        <div class="img-bundle">
                            @if(!!$bundle->image)
                                <img class="img-responsive" src="/assets/img/bundle/medium/{{ $bundle->imagemedium }}"
                                     alt="{{ $bundle->title }}"/>
                            @endif
                        </div>
                        <br/>


                        <div id="horizontal-form">

                            {{ Form::model('bundle', array('route' => array('bundle.update', $bundle->id), 'method' => 'PUT','files' => true)) }}


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
                                <input type="text" name="title" class="form-control" value="{{ $bundle->title }}" />
                            </div>
                            @if ($errors->has('title')) <p
                                    class="alert alert-danger">{{ $errors->first('title') }}</p> @endif


                            <div class="form-group">
                                <label for="link">Link: </label>
                                <input type="text" class="form-control" id="link" name="link"
                                       value="{{ $bundle->link }}"/>
                            </div>
                            @if ($errors->has('link')) <p
                                    class="alert alert-danger">{{ $errors->first('link') }}</p> @endif

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="title" class="form-control" value="{{ $bundle->price }}" />
                            </div>
                            @if ($errors->has('price')) <p
                                    class="alert alert-danger">{{ $errors->first('price') }}</p> @endif

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="ckeditor" id="elm3"
                                          name="description">{{ $bundle->description }}</textarea>
                            </div>
                            @if ($errors->has('description')) <p
                                    class="alert alert-danger">{{ $errors->first('description') }}</p> @endif


                            <div class="form-group">
                                <label for="user">Editor</label>
                                <select name="user_id" id="user" class="form-control">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                                @if($bundle->user_id == $user->id) selected @endif >{{ $user->name }}</option>
                                    @endforeach

                                </select>
                            </div>


                            <div class="form-group">
                                <label>Workflow: </label>
                                @foreach($workflows as $workflow)
                                    <label>
                                        <input name="workflow_id" type="radio"
                                               class="form-control {{ $workflow->color }}" value="{{ $workflow->id }}"
                                               @if($workflow->id  == $bundle->workflow_id) checked @endif>
                                        <span class="text"> {{ $workflow->name }}</span>
                                    </label>
                                @endforeach


                            </div>


                            <!-- Hidden inputs -->

                            <input type="hidden" name="creator" value="{{ $bundle->creator }}">


                            <button type="submit" class="btn btn-labeled shiny btn-warning btn-large"><i
                                        class="btn-label fa fa-plus"></i> Update
                            </button>
                            {!! Form::close() !!}


                            {{ Form::model('bundle', array('route' => array('bundle.destroy', $bundle->id), 'method' => 'DELETE', 'id' => 'bundle'))}}
                            {!! csrf_field() !!}
                            <br />
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
