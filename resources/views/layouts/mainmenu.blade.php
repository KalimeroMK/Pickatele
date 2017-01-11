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
                        <li class="hidden">
                            <a href="/" class="active">Home</a>
                        </li>
                        <li>
                            <a href="/parents">Parents</a>
                        </li>
                        <li>
                            <a href="/educators">Educators</a>
                        </li>
                        <li>
                            <a href="/books">Book Library</a>
                        </li>
                        <li>
                            <a href="/partners">Partners</a>
                        </li>
                        <li>
                            <a href="/about">About Us</a>
                        </li>
                        <li class="hidden">
                            <a href="/">Blog</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- navbar end -->

    </div>
    <!-- main-navigation end -->
@endsection