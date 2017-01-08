@extends('layouts.app')

@section('content')

    <div class="page-body">
        <div class="row">
            <div class="col-lg-12">
                <legend>Edit genre: {{  $genre->name }}</legend>

                <div style="margin-bottom: 50px"></div>
                {{ Form::model($genres, array('route' => array('genre.update', $genre->id), 'method' => 'PUT','files' => true)) }}

                <div class="form-group">
                    <label for="genrename">Genre title</label>
                    <input type="text" class="form-control" id="genrename" name="name"
                           placeholder="Enter genre name" value="{{  $genre->name }}">
                </div>
                @if ($errors->has('name')) <p class="alert alert-danger">{{ $errors->first('name') }}</p> @endif



                <button type="submit" class="btn btn-default">Update</button>
                {!! Form::close() !!}




                <hr/>

                {{ Form::model('genre', array('route' => array('genre.destroy', $genre->id), 'method' => 'DELETE', 'id' => 'genre'))}}

                <button type="submit" class="btn btn-labeled shiny btn-danger delete"><i
                            class="btn-label fa fa-trash"></i> Delete
                </button>
                {{ Form::close() }}


            </div>
        </div>



    </div>



@endsection
