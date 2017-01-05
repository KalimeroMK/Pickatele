@extends('layouts.main')
@include('layouts.mainmenu')
@section('content')
    <div class="books-filter">
        <div class="container">
            <form role="form" novalidate="novalidate" class="form-inline">
                <div class="row text-center">
                <div class="form-group">
                    <label class="custom">Genre</label>
                    <div class="selectdiv">
                        <select>
                        <option value="Adventure">Adventure</option>
                        <option value="Romance">Romance</option>
                        <option value="Comedy">Comedy</option>
                    </select></div>
                </div>
                <div class="form-group age-range">
                    <label class="custom">Age</label>
                    <span>0</span>
                    <input id="age-range" data-slider-id='age-range' type="text"
                           data-slider-min="0" data-slider-max="8" data-slider-step="1" data-slider-value="0"
                           data-slider-tooltip="hide"
                    />
                    <span>8</span>
                </div>
                <div class="form-group">
                    <label class="custom">Partner</label>
                    <div class="selectdiv">
                        <select>
                            <option value="Disney">Disney</option>
                        <option value="BabyFirst">BabyFirst</option>
                    </select>
                        </div>
                </div>
                </div>
                <div class="row text-center">
                    <div class="form-group">
                        <label class="custom">Language</label>
                        <div class="selectdiv">
                            <select>
                            <option value="English">English</option>
                            <option value="Spanish">Spanish</option>
                        </select>
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="custom">Bundle</label>
                        <div class="selectdiv">
                            <select>
                                <option value="1">Bundle 1</option>
                                <option value="2">Bundle 2</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="custom">Level</label>
                        <div class="selectdiv">
                                <select>
                                    <option value="1">Level 1</option>
                                    <option value="2">Level 2</option>
                                </select>
                        </div>
                     </div>
                {{--js-example-basic-single--}}
                </div>

                <div class="row text-center">
                    <div class="form-group letter-filter col-sm-12 col-md-8">
                        <label class="custom">By name</label>
                        <div class="form-group">
                            <a href="a">A</a>
                            <a href="b">B</a>
                            <a href="c">C</a>
                            <a href="D">D</a>
                            <a href="E">E</a>
                            <a href="F">F</a>
                            <a href="G">G</a>
                            <a href="H">H</a>
                            <a href="I">I</a>
                            <a href="J">J</a>
                            <a href="K">K</a>
                            <a href="L">L</a>
                            <a href="M">M</a>
                            <a href="N">N</a>
                            <a href="O">O</a>
                            <a href="P">P</a>
                            <a href="q">Q</a>
                            <a href="r">R</a>
                            <a href="s">S</a>
                            <a href="t">T</a>
                            <a href="u">U</a>
                            <a href="v">V</a>
                            <a href="w">W</a>
                            <a href="x">X</a>
                            <a href="y">Y</a>
                            <a href="z">Z</a>
                        </div>
                    </div>

                    <div class="form-group col-sm-6 col-md-2">
                        {{--<label>--}}
                            {{--<input name="radio-filter" class="form-control" value="1" type="radio">--}}
                            {{--<span class="text"> Newest</span>--}}
                        {{--</label>--}}
                        <div class="custom-radio radio-primary">
                            <input type="radio" id="radio-1" name="radio-filter" value="newest">
                            <label for="radio-1">
                                Newest
                            </label>
                        </div>
                    </div>

                    <div class="form-group col-sm-6 col-md-2">
                        {{--<label>--}}
                            {{--<input name="radio-filter" class="form-control" value="1" type="radio">--}}
                            {{--<span class="text"> Popular</span>--}}
                        {{--</label>--}}
                        <div class="custom-radio radio-primary">
                            <input type="radio" id="radio-2" name="radio-filter" value="popular">
                            <label for="radio-2">
                                Popular
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                <button class="btn custom-btn white-btn">Apply Filter</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container book-list">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="section-header text-center red" style="margin-top: 60px">Book Library</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="/assets/images/book1.png">
                <div class="text-center book-title">
                    <h6 class="section-header text-center red">Tom and Smudge's Rainy Day</h6>
                </div>
                <div class="text-center">
                    <a class="btn custom-btn pink-btn">Read More</a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="/assets/images/book2.png">
                <div class="text-center book-title">
                    <h6 class="section-header text-center red">The Sleepy Time Jungle</h6>
                </div>
                <div class="text-center">
                    <a class="btn custom-btn pink-btn">Read More</a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="/assets/images/book3.png">
                <div class="text-center book-title">
                    <h6 class="section-header text-center red">Count the Animals at the Zoo</h6>
                </div>
                <div class="text-center">
                    <a class="btn custom-btn pink-btn">Read More</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="/assets/images/book4.png">
                <div class="text-center book-title">
                    <h6 class="section-header text-center red">The Christmas Fairies</h6>
                </div>
                <div class="text-center">
                    <a class="btn custom-btn pink-btn">Read More</a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="/assets/images/book5.png">
                <div class="text-center book-title">
                    <h6 class="section-header text-center red">Brian's Grand Adventure</h6>
                </div>
                <div class="text-center">
                    <a class="btn custom-btn pink-btn">Read More</a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="/assets/images/book6.png">
                <div class="text-center book-title">
                    <h6 class="section-header text-center red">The Princess on the Glass Hill</h6>
                </div>
                <div class="text-center">
                    <a class="btn custom-btn pink-btn">Read More</a>
                </div>
            </div>
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
