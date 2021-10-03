@extends('layouts.app')

@section('content')

    <div class="page-body">
        <div class="row">
            <div class="col-lg-12">
                @if($status)
                    {{ Form::model($levels, array('route' => array('levels.store'), 'method' => 'POST', 'files'=>true)) }}
                    {!! csrf_field() !!}
                    <legend>Add Levels</legend>
                    <div class="form-group">
                        <label for="name">Level</label>
                        <input type="text" class="form-control" id="categoryname" name="name" placeholder="Enter level name">
                    </div>
                    @if ($errors->has('name')) <p class="alert alert-danger">{{ $errors->first('name') }}</p> @endif

                    <div class="form-group">
                        <label for="parent_id">Sub level</label>

                        <select name="parent_id" id="parent_id" class="form-control">
                            <option value="null">Main level</option>

                            @foreach ($levels as $level)
                                <option value="{{ $level->id }}">@for ($i = 0; $i < $level->depth; $i++) - @endfor {{ $level->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Create</button>
                    {!! Form::close() !!}
                @else

                    {{ Form::model('levels', array('route' => array('levels.store'), 'method' => 'POST', 'files'=>true)) }}
                    <legend>Add level</legend>
                    <div class="form-group">
                        <label for="levelname">Level title</label>
                        <input type="text" class="form-control" id="levelname" name="name" placeholder="Level">
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
