@extends('layouts.main')
@include('layouts.mainmenu')
@section('content')
    <div class="books-filter">
        <div class="container">
            <form role="form" novalidate="novalidate" class="form-inline">
                <div class="row text-center">
                <div class="form-group">
                    <label class="custom">Gender</label>
                    <div class="selectdiv">
                        <select>
                        <option value="Adventure">Adventure</option>
                        <option value="Romance">Romance</option>
                        <option value="Comedy">Comedy</option>
                    </select></div>
                </div>
                <div class="form-group">
                    <label class="custom">Age</label>
                    <div class="selectdiv">
                        <select>
                        <option value="Adventure">Adventure</option>
                        <option value="Romance">Romance</option>
                        <option value="Comedy">Comedy</option>
                    </select></div>
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
                <img src="/assets/images/book1.jpg">
                <div class="text-center book-title">
                    <h6 class="section-header text-center red">Arthur's Family Vacation</h6>
                </div>
                <div class="text-center">
                    <a class="btn custom-btn pink-btn">Read More</a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="/assets/images/book2.jpg">
                <div class="text-center book-title">
                    <h6 class="section-header text-center red">The Gigantic Book of Bible Fun</h6>
                </div>
                <div class="text-center">
                    <a class="btn custom-btn pink-btn">Read More</a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="/assets/images/book3.jpg">
                <div class="text-center book-title">
                    <h6 class="section-header text-center red">Rilakkuma Chocolate Cookies</h6>
                </div>
                <div class="text-center">
                    <a class="btn custom-btn pink-btn">Read More</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="/assets/images/book4.jpg">
                <div class="text-center book-title">
                    <h6 class="section-header text-center red">Arthur's Family Vacation</h6>
                </div>
                <div class="text-center">
                    <a class="btn custom-btn pink-btn">Read More</a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="/assets/images/book5.jpg">
                <div class="text-center book-title">
                    <h6 class="section-header text-center red">The Gigantic Book of Bible Fun</h6>
                </div>
                <div class="text-center">
                    <a class="btn custom-btn pink-btn">Read More</a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="/assets/images/book6.jpg">
                <div class="text-center book-title">
                    <h6 class="section-header text-center red">Rilakkuma Chocolate Cookies</h6>
                </div>
                <div class="text-center">
                    <a class="btn custom-btn pink-btn">Read More</a>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <button class="btn custom-btn pink-btn">Load More...</button>
        </div>
    </div>
@endsection