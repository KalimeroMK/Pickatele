@section('mainmenu')
    <!-- main-navigation start -->
    <!-- classes: -->
    <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
    <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
    <!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
    <!-- ================ -->
    <div class="main-navigation  animated ">

        <!-- navbar start -->
        <!-- ================ -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">

                <!-- Toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul id="fullpage-menu" class="nav navbar-nav navbar-right uppercase">
                        <li data-menuanchor="firstPage"><a href="/">Home</a></li>
                        @foreach($staticpages as $staticpage)
                            <li><a href="/{{ $staticpage->slug }}">{{ $staticpage->title }}</a></li>
                        @endforeach
                        <li data-menuanchor="fourthPage"><a href="#fourthPage">Book Library</a>
                        </li>
                        <li data-menuanchor="fifthPage"><a href="#fifthPage">About Us</a></li>
                        <li data-menuanchor="fifthPage"><a href="#fifthPage">Blog</a></li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- navbar end -->

    </div>
    <!-- main-navigation end -->
@endsection