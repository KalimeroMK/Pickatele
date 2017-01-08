@extends('layouts.main')
@section('style')
    <style>
        select.select2 {
            width: 200px !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            color: #fff;
        }

        .select2-container--default .select2-results__option[aria-selected="true"] {
            background-color: #fa2557;
            color: #fff;
        }

        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            color: #fff;
        }

        .select2-results__option--highlighted {
            background-color: #fff;
            color: #fa2557;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            background-color: #fa2557;
            color: #fff;
        }

        .select2-results__option, .select2-container--default .select2-selection--single {
            background-color: #fa2557;
            border-color: #fa2557;
            color: #e4e4e7;
        }
    </style>

@endsection

@include('layouts.mainmenu')
@section('content')
    <div class="books-filter">
        <div class="container">
            <form role="form" novalidate="novalidate" class="form-inline">
                <div class="row text-center">
                    <div class="form-group col-sm-4">
                        <label class="custom">Genre</label>
                        {{ Form::select('genre', $genres, 0, ['class' => 'select2 red form-control']) }}
                    </div>
                    <div class="form-group col-sm-4 age-range">
                        <label class="custom" for="age-range">Age</label>
                        <span>0</span>
                        <input id="age-range" name="age-range" data-slider-id='age-range' type="text"
                               data-slider-min="0" data-slider-max="8" data-slider-step="1" data-slider-value="0"
                               data-slider-tooltip="hide"/>
                        <span>8</span>
                    </div>
                    <div class="form-group col-sm-4">
                        <label class="custom">Partner</label>
                        {{ Form::select('partner', $partners, 0, ['class' => 'select2 red form-control']) }}

                    </div>
                </div>
                <div class="row text-center">
                    <div class="form-group col-sm-4">
                        <label class="custom">Language</label>
                        <select name="language" class="select2 red form-control">
                            <option value="">Select Language</option>
                            <option value="English">English</option>
                            <option value="Spanish">Spanish</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-4">
                        <label class="custom">Bundle</label>
                        {{ Form::select('bundle', $bundles, 0, ['class' => 'select2 red form-control']) }}
                    </div>

                    <div class="form-group col-sm-4">
                        <label class="custom">Level</label>
                        {{ Form::select('level', $levels, 0, ['class' => 'select2 red form-control']) }}
                    </div>
                </div>

                <div class="row text-center">
                    <div class="form-group letter-filter col-sm-12 col-md-8">
                        <label class="custom">By name</label>

                        <div class="form-group">
                            <a href="#" data-filter-value="A">A</a>
                            <a href="#" data-filter-value="B">B</a>
                            <a href="#" data-filter-value="C">C</a>
                            <a href="#" data-filter-value="D">D</a>
                            <a href="#" data-filter-value="E">E</a>
                            <a href="#" data-filter-value="F">F</a>
                            <a href="#" data-filter-value="G">G</a>
                            <a href="#" data-filter-value="H">H</a>
                            <a href="#" data-filter-value="I">I</a>
                            <a href="#" data-filter-value="J">J</a>
                            <a href="#" data-filter-value="K">K</a>
                            <a href="#" data-filter-value="L">L</a>
                            <a href="#" data-filter-value="M">M</a>
                            <a href="#" data-filter-value="N">N</a>
                            <a href="#" data-filter-value="O">O</a>
                            <a href="#" data-filter-value="P">P</a>
                            <a href="#" data-filter-value="Q">Q</a>
                            <a href="#" data-filter-value="R">R</a>
                            <a href="#" data-filter-value="S">S</a>
                            <a href="#" data-filter-value="T">T</a>
                            <a href="#" data-filter-value="U">U</a>
                            <a href="#" data-filter-value="V">V</a>
                            <a href="#" data-filter-value="W">W</a>
                            <a href="#" data-filter-value="X">X</a>
                            <a href="#" data-filter-value="Y">Y</a>
                            <a href="#" data-filter-value="Z">Z</a>
                        </div>
                    </div>

                    <div class="form-group col-sm-6 col-md-2">
                        <div class="custom-radio radio-primary">
                            <input type="radio" id="radio-1" name="radio-filter" value="newest">
                            <label for="radio-1">
                                Newest
                            </label>
                        </div>
                    </div>

                    <div class="form-group col-sm-6 col-md-2">
                        <div class="custom-radio radio-primary">
                            <input type="radio" id="radio-2" name="radio-filter" value="popular">
                            <label for="radio-2">
                                Popular
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-offset-9 col-xs-3">
                        <button class="btn btn-xs custom-btn" style="width: auto" type="reset">Reset</button>
                    </div>
                </div>

                {!! csrf_field() !!}
            </form>

            <div class="row loading text-center pv-30">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container book-list">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="section-header text-center red" style="margin-top: 60px">Book Library</h1>
            </div>
        </div>
        @foreach(array_chunk($books->all(), 3) as $books)
            <div class="row">
                @foreach($books as $book)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <img src="/assets/img/books/{{ $book->image }}">
                        <div class="text-center book-title">
                            <h6 class="section-header text-center red">{!! $book->title !!}</h6>
                        </div>
                        <div class="text-center">
                            <a href="/book/{{ $book->slug }}" class="btn custom-btn pink-btn">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

        <div class="row text-center">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection
