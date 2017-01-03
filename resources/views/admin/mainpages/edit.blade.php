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
                        <span class="widget-caption">Add main page</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">

                            {{ Form::model('mainpages', array('route' => array('mainpages.update', $mainpage->id), 'method' => 'PUT','files' => true)) }}

                            <div class="img-blog">
                                @if(!!$mainpage->image)
                                    <img class="img-responsive"
                                         src="/assets/img/staticpage/medium/{{ $mainpage->imagemedium }}"
                                         alt="{{ $mainpage->title }}"/>
                                @endif
                            </div>
                            <br/>

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
                                <textarea class="ckeditor" id="title" name="title">{{ $mainpage->title }}</textarea>
                            </div>
                            @if ($errors->has('title')) <p
                                    class="alert alert-danger">{{ $errors->first('title') }}</p> @endif


                            <div class="form-group">
                                <label for="sliderdescription">Slider description</label>
                                <textarea class="ckeditor form-control" id="elm1" name="sliderdescription">{{ $mainpage->sliderdescription }}</textarea>
                            </div>
                            @if ($errors->has('sliderdescription')) <p
                                    class="alert alert-danger">{{ $errors->first('sliderdescription') }}</p> @endif

                            <div class="form-group">
                                <label for="paragraph">Paragraph text</label>
                                <textarea class="ckeditor form-control" id="elm2" name="paragraph">{{ $mainpage->paragraph }}</textarea>
                            </div>
                            @if ($errors->has('paragraph')) <p
                                    class="alert alert-danger">{{ $errors->first('paragraph') }}</p> @endif

                            <div class="form-group">
                                <label for="headertitle">Header title</label>
                                <input type="text" class="form-control" name="headertitle" value="{{ $mainpage->headertitle }}"/>
                            </div>
                            @if ($errors->has('headertitle')) <p
                                    class="alert alert-danger">{{ $errors->first('headertitle') }}</p> @endif


                            <div class="form-group">
                                <label for="secondtitle">Second title</label>
                                <input type="text" class="form-control" name="secondtitle" value="{{ $mainpage->secondtitle }}"/>
                            </div>
                            @if ($errors->has('secondtitle')) <p
                                    class="alert alert-danger">{{ $errors->first('secondtitle') }}</p> @endif

                            <div class="form-group">
                                <label for="seconddescription">Second description</label>
                                <textarea class="ckeditor form-control" id="elm3" name="seconddescription">{{ $mainpage->seconddescription }}</textarea>
                            </div>
                            @if ($errors->has('seconddescription')) <p
                                    class="alert alert-danger">{{ $errors->first('seconddescription') }}</p> @endif


                            <div class="form-group">
                                <label for="secondheadertitle">Second header title</label>
                                <input type="text" class="form-control" name="secondheadertitle" value="{{ $mainpage->secondheadertitle }}"/>
                            </div>
                            @if ($errors->has('secondheadertitle')) <p
                                    class="alert alert-danger">{{ $errors->first('secondheadertitle') }}</p> @endif


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="video">Video link</label>
                                        <input type="text" class="form-control" name="video" value="{{ $mainpage->video }}"/>
                                    </div>
                                    @if ($errors->has('video')) <p
                                            class="alert alert-danger">{{ $errors->first('video') }}</p> @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="thirddescription">Third description</label>
                                        <textarea class="ckeditor" id="elm4" name="thirddescription">{{ $mainpage->thirddescription }}</textarea>
                                    </div>
                                    @if ($errors->has('thirddescription')) <p
                                            class="alert alert-danger">{{ $errors->first('thirddescription') }}</p> @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="sectiontitle">Section title</label>
                                <input type="text" class="form-control" name="sectiontitle" value="{{ $mainpage->sectiontitle }}"/>
                            </div>
                            @if ($errors->has('sectiontitle')) <p
                                    class="alert alert-danger">{{ $errors->first('sectiontitle') }}</p> @endif

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group{{ $errors->has('itemimage') ? ' has-error' : '' }}">
                                        <span class="input-group-btn">
                                            <span class="btn btn-info shiny btn-file">
                                                <i class="btn-label fa fa-image"> </i> Browse item <input type="file"
                                                                                                          name="itemimage">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly="">
                                    </div>
                                    <br/>
                                    @if ($errors->has('itemimage')) <p
                                            class="alert alert-danger">{{ $errors->first('itemimage') }}</p> @endif

                                    <div class="form-group">
                                        <label for="itemtitle">Item title</label>
                                        <input type="text" class="form-control" name="itemtitle" value="{{ $mainpage->itemtitle }}"/>
                                    </div>
                                    @if ($errors->has('itemtitle')) <p
                                            class="alert alert-danger">{{ $errors->first('itemtitle') }}</p> @endif


                                    <div class="form-group">
                                        <label for="itemdescription">Item description</label>
                                        <textarea class="form-control" name="itemdescription"> {{ $mainpage->itemdescription }}</textarea>
                                    </div>
                                    @if ($errors->has('itemdescription')) <p
                                            class="alert alert-danger">{{ $errors->first('itemdescription') }}</p> @endif

                                </div>
                                <div class="col-md-6">


                                    <div class="input-group{{ $errors->has('item2image') ? ' has-error' : '' }}">
                                        <span class="input-group-btn">
                                            <span class="btn btn-info shiny btn-file">
                                                <i class="btn-label fa fa-image"> </i> Browse item 2 <input type="file"
                                                                                                            name="item2image">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly="">
                                    </div>
                                    <br/>
                                    @if ($errors->has('item2image')) <p
                                            class="alert alert-danger">{{ $errors->first('item2image') }}</p> @endif

                                    <div class="form-group">
                                        <label for="item2title">Item 2 title</label>
                                        <input type="text" class="form-control" name="item2title" value="{{ $mainpage->item2title }}" />
                                    </div>
                                    @if ($errors->has('item2title')) <p
                                            class="alert alert-danger">{{ $errors->first('item2title') }}</p> @endif


                                    <div class="form-group">
                                        <label for="item2description">Item 2 description</label>
                                        <textarea class="form-control" name="item2description">{{ $mainpage->item2description }}</textarea>
                                    </div>
                                    @if ($errors->has('item2description')) <p
                                            class="alert alert-danger">{{ $errors->first('item2description') }}</p> @endif

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">


                                    <div class="input-group{{ $errors->has('item3image') ? ' has-error' : '' }}">
                                        <span class="input-group-btn">
                                            <span class="btn btn-info shiny btn-file">
                                                <i class="btn-label fa fa-image"> </i> Browse item 3 <input type="file"
                                                                                                            name="item3image">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly="">
                                    </div>
                                    <br/>
                                    @if ($errors->has('item3image')) <p
                                            class="alert alert-danger">{{ $errors->first('item3image') }}</p> @endif

                                    <div class="form-group">
                                        <label for="item3title">Item 3 title</label>
                                        <input type="text" class="form-control" name="item3title" value="{{ $mainpage->item3title }}"/>
                                    </div>
                                    @if ($errors->has('item3title')) <p
                                            class="alert alert-danger">{{ $errors->first('item3title') }}</p> @endif


                                    <div class="form-group">
                                        <label for="item3description">Item 3 description</label>
                                        <textarea class="form-control" name="item3description">{{ $mainpage->item3description }}</textarea>
                                    </div>
                                    @if ($errors->has('item3description')) <p
                                            class="alert alert-danger">{{ $errors->first('item3description') }}</p> @endif

                                </div>
                                <div class="col-md-6">


                                    <div class="input-group{{ $errors->has('item4image') ? ' has-error' : '' }}">
                                        <span class="input-group-btn">
                                            <span class="btn btn-info shiny btn-file">
                                                <i class="btn-label fa fa-image"> </i> Browse item 4 <input type="file"
                                                                                                            name="item4image">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly="">
                                    </div>
                                    <br/>
                                    @if ($errors->has('item4image')) <p
                                            class="alert alert-danger">{{ $errors->first('item4image') }}</p> @endif

                                    <div class="form-group">
                                        <label for="item4title">Item 4 title</label>
                                        <input type="text" class="form-control" name="item4title" value="{{ $mainpage->item4title }}"/>
                                    </div>
                                    @if ($errors->has('item4title')) <p
                                            class="alert alert-danger">{{ $errors->first('item4title') }}</p> @endif


                                    <div class="form-group">
                                        <label for="item4description">Item 4 description</label>
                                        <textarea class="form-control" name="item4description">{{ $mainpage->item4description }}</textarea>
                                    </div>
                                    @if ($errors->has('item4description')) <p
                                            class="alert alert-danger">{{ $errors->first('item4description') }}</p> @endif

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">


                                    <div class="input-group{{ $errors->has('item5image') ? ' has-error' : '' }}">
                                        <span class="input-group-btn">
                                            <span class="btn btn-info shiny btn-file">
                                                <i class="btn-label fa fa-image"> </i> Browse item 5 <input type="file"
                                                                                                            name="item5image">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly="">
                                    </div>
                                    <br/>
                                    @if ($errors->has('item5image')) <p
                                            class="alert alert-danger">{{ $errors->first('item5image') }}</p> @endif

                                    <div class="form-group">
                                        <label for="item5title">Item 5 title</label>
                                        <input type="text" class="form-control" name="item5title" value="{{ $mainpage->item5title }}"/>
                                    </div>
                                    @if ($errors->has('item5title')) <p
                                            class="alert alert-danger">{{ $errors->first('item5title') }}</p> @endif


                                    <div class="form-group">
                                        <label for="item5description">Item 5 description</label>
                                        <textarea class="form-control" name="item5description">{{ $mainpage->item5description }}</textarea>
                                    </div>
                                    @if ($errors->has('item5description')) <p
                                            class="alert alert-danger">{{ $errors->first('item5description') }}</p> @endif

                                </div>
                                <div class="col-md-6">


                                    <div class="input-group{{ $errors->has('item6image') ? ' has-error' : '' }}">
                                        <span class="input-group-btn">
                                            <span class="btn btn-info shiny btn-file">
                                                <i class="btn-label fa fa-image"> </i> Browse item 6 <input type="file"
                                                                                                            name="item6image">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly="">
                                    </div>
                                    <br/>
                                    @if ($errors->has('item6image')) <p
                                            class="alert alert-danger">{{ $errors->first('item6image') }}</p> @endif

                                    <div class="form-group">
                                        <label for="item6title">Item 6 title</label>
                                        <input type="text" class="form-control" name="item6title" value="{{ $mainpage->item6title }}"/>
                                    </div>
                                    @if ($errors->has('item6title')) <p
                                            class="alert alert-danger">{{ $errors->first('item6title') }}</p> @endif


                                    <div class="form-group">
                                        <label for="item6description">Item 6 description</label>
                                        <textarea class="form-control" name="item6description">{{ $mainpage->item6description }}</textarea>
                                    </div>
                                    @if ($errors->has('item6description')) <p
                                            class="alert alert-danger">{{ $errors->first('item6description') }}</p> @endif

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="user">User</label>
                                <select name="user_id" id="user" class="form-control">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                                @if(Auth::user()->id == $user->id) selected @endif >{{ $user->name }}</option>
                                    @endforeach

                                </select>
                            </div>


                            <div class="form-group">
                                <label>Workflow: </label>
                                @foreach($workflows as $workflow)
                                    <label>
                                        <input name="workflow_id" type="radio"
                                               class="form-control {{ $workflow->color }}" value="{{ $workflow->id }}"
                                               @if($workflow->id  == 1) checked @endif>
                                        <span class="text"> {{ $workflow->name }}</span>
                                    </label>
                                @endforeach
                            </div>


                            <!-- Hidden inputs -->

                            <input type="hidden" name="creator" value="{{ Auth::user()->id  }}">

                            <button type="submit" class="btn btn-labeled shiny btn-info btn-large"><i
                                        class="btn-label fa fa-plus"></i> Update
                            </button>
                            {!! Form::close() !!}

                            <hr/>


                            {{ Form::model('mainpages', array('route' => array('mainpages.destroy', $mainpage->id), 'method' => 'DELETE', 'id' => 'mainpages'))}}

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
