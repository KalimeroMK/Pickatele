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
                        <span class="widget-caption">Add book</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">

                            {{ Form::model('book', array('route' => array('book.store'), 'method' => 'POST', 'files'=>true)) }}
                            {!! csrf_field() !!}


                            <div class="input-group{{ $errors->has('image') ? ' has-error' : '' }}">
							<span class="input-group-btn">
								<span class="btn btn-info shiny btn-file">
									<i class="btn-label fa fa-image"> </i> Browse... <input type="file" name="image">
								</span>
							</span>
                                <input type="text" class="form-control" readonly="">
                            </div>
                            <br />
                            @if ($errors->has('image')) <p class="alert alert-danger">{{ $errors->first('image') }}</p> @endif

                            <div class="form-group">
                                <label for="title">Title</label>
                                <textarea class="ckeditor" id="title" name="title"></textarea>
                            </div>
                            @if ($errors->has('title')) <p class="alert alert-danger">{{ $errors->first('title') }}</p> @endif


                            <div class="form-group">
                                <label>Author </label>
                                <input name="author" type="text" class="form-control">
                            </div>
                            @if ($errors->has('author')) <p
                                    class="alert alert-danger">{{ $errors->first('author') }}</p> @endif

                            <div class="form-group">
                                <label>Video Link:</label>
                                <input name="video" type="text" class="form-control">
                            </div>
                            @if ($errors->has('video')) <p
                                    class="alert alert-danger">{{ $errors->first('video') }}</p> @endif


                            <div class="form-group">
                                <label for="bundle">Bundle</label>

                                <select name="bundle_id" id="bundle" class="form-control">
                                    @foreach ($bundles as $bundle)
                                        <option value="{{ $bundle->id }}">@for ($i = 0; $i < $bundle->depth; $i++) - @endfor {{ $bundle->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            @if ($errors->has('bundle')) <p class="alert alert-danger">{{ $errors->first('bundle') }}</p> @endif


                            <div class="form-group">
                                <label for="country">Country</label>

                                <select name="country_id" id="country" class="form-control">
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="bundle">Level</label>

                                <select name="level_id" id="bundle" class="form-control">
                                    @foreach ($levels as $level)
                                        <option value="{{ $level->id }}">@for ($i = 0; $i < $level->depth; $i++) - @endfor {{ $level->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            @if ($errors->has('level')) <p class="alert alert-danger">{{ $errors->first('level') }}</p> @endif


                            <div class="form-group">
                                <label for="bundle">Genre</label>

                                <select name="categories_id" id="bundle" class="form-control">
                                    @foreach ($genres as $genre)
                                        <option value="{{ $genre->id }}">@for ($i = 0; $i < $genre->depth; $i++)
                                                - @endfor {{ $genre->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="country">Partner</label>

                                <select name="partner_id" id="country" class="form-control">
                                    @foreach ($partners as $partner)
                                        <option value="{{ $partner->id }}">{{ $partner->title }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="age">Age</label>

                                <select name="age" id="age" class="form-control">
                                    @for($i = 1;$i <= 8; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor

                                </select>
                            </div>


                            <div class="form-group">
                                <label for="description">Book description</label>
                                <textarea class="ckeditor" id="elm3" name="description"></textarea>
                            </div>
                            @if ($errors->has('description')) <p class="alert alert-danger">{{ $errors->first('description') }}</p> @endif



                            <div class="form-group">
                                <label for="user">User</label>
                                <select name="user_id" id="user" class="form-control">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" @if(Auth::user()->id == $user->id) selected @endif >{{ $user->name }}</option>
                                    @endforeach

                                </select>
                            </div>


                            <div class="form-group">
                                <label>Workflow: </label>
                                @foreach($workflows as $workflow)
                                    <label>
                                        <input name="workflow_id" type="radio" class="form-control {{ $workflow->color }}" value="{{ $workflow->id }}" @if($workflow->id  == 1) checked @endif>
                                        <span class="text"> {{ $workflow->name }}</span>
                                    </label>
                                @endforeach
                            </div>


                            <!-- Hidden inputs -->

                            <input type="hidden" name="creator" value="{{ Auth::user()->id  }}">

                            <button type="submit" class="btn btn-labeled shiny btn-warning btn-large"><i class="btn-label fa fa-plus"></i> Create</button>
                            {!! Form::close() !!}



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
