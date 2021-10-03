@extends('layouts.app')

@section('content')

    <div class="page-body">
        <div class="row">
            <div class="col-lg-12">
                @if($status)
                    {{ Form::model($genres, array('route' => array('genre.store'), 'method' => 'POST', 'files'=>true)) }}
                    {!! csrf_field() !!}
                    <legend>Add Genres</legend>
                    <div class="form-group">
                        <label for="name">Genre</label>
                        <input type="text" class="form-control" id="categoryname" name="name" placeholder="Enter genre name">
                    </div>
                    @if ($errors->has('name')) <p class="alert alert-danger">{{ $errors->first('name') }}</p> @endif

                    <div class="form-group">
                        <label for="parent_id">Sub genre</label>

                        <select name="parent_id" id="parent_id" class="form-control">
                            <option value="null">Main genre</option>

                            @foreach ($genres as $genre)
                                <option value="{{ $genre->id }}">@for ($i = 0; $i < $genre->depth; $i++) - @endfor {{ $genre->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Create</button>
                    {!! Form::close() !!}
                @else

                    {{ Form::model('genres', array('route' => array('genre.store'), 'method' => 'POST', 'files'=>true)) }}
                    <legend>Add genre</legend>
                    <div class="form-group">
                        <label for="genrename">Genre title</label>
                        <input type="text" class="form-control" id="genrename" name="name" placeholder="Genre">
                    </div>
                    @if ($errors->has('name')) <p class="alert alert-danger">{{ $errors->first('name') }}</p> @endif

                    <input type="hidden" name="parent_id" value="null">
                    <button type="submit" class="btn btn-default">Create</button>
                    {!! Form::close() !!}

                @endif
            </div>
        </div>
    </div>
@endsection
