@extends('layouts.app')

@section('content')

    <div class="page-body">
        <div class="row">
            <div class="col-lg-12">
                <legend>Edit level: {{  $level->name }}</legend>

                <div style="margin-bottom: 50px"></div>
                {{ Form::model($levels, array('route' => array('levels.update', $level->id), 'method' => 'PUT','files' => true)) }}

                <div class="form-group">
                    <label for="levelname">Levels title</label>
                    <input type="text" class="form-control" id="levelname" name="name"
                           placeholder="Enter level name" value="{{  $level->name }}">
                </div>
                @if ($errors->has('name')) <p class="alert alert-danger">{{ $errors->first('name') }}</p> @endif



                <button type="submit" class="btn btn-default">Update</button>
                {!! Form::close() !!}




                <hr/>

                {{ Form::model('level', array('route' => array('levels.destroy', $level->id), 'method' => 'DELETE', 'id' => 'level'))}}

                <button type="submit" class="btn btn-labeled shiny btn-danger delete"><i
                            class="btn-label fa fa-trash"></i> Delete
                </button>
                {{ Form::close() }}


            </div>
        </div>



    </div>



@endsection
