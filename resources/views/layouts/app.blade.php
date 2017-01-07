<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8"/>
    <title>Pickatale CMS</title>
    <meta name="description" content="Dashboard"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link id="bootstrap-rtl-link" href="" rel="stylesheet"/>
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="/assets/css/weather-icons.min.css" rel="stylesheet"/>

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300"
          rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!--Beyond styles-->
    <link id="beyond-link" href="/assets/css/beyond.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/demo.min.css" rel="stylesheet"/>
    <link href="/assets/css/skins/orange.min.css" rel="stylesheet"/>
    <link href="/assets/css/typicons.min.css" rel="stylesheet"/>
    <link href="/assets/css/animate.min.css" rel="stylesheet"/>
    <link href="/assets/css/custom.css" rel="stylesheet"/>
    <link id="skin-link" href="/assets/css/skins/orange.css" rel="application/javascript" type="text/css"/>

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="/assets/js/skins.min.js"></script>

    <!--Page Related styles-->
    <link href="/assets/css/dataTables.bootstrap.css" rel="stylesheet"/>
</head>

<!-- /Head -->
<!-- Body -->
<body>
<!-- Loading Container -->
<div class="loading-container">
    <div class="loader"></div>
</div>
<!--  /Loading Container -->
<!-- Navbar -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <a href="{{ url('/admin') }}" class="logo-cms">Pickatale</a>
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    @if(!Auth::user()->image)
                                        <img src="/assets/img/avatars/adam-jansen.jpg">
                                    @else
                                        <img src="/assets/img/avatars/thumbnails/{{ Auth::user()->image }}"
                                             alt="{{ Auth::user()->name }}" class="img-responsive"/>
                                    @endif
                                </div>
                                <section>
                                    <h2><span class="profile"><span>  {{ Auth::user()->name }}</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>  {{ Auth::user()->name }}</a></li>
                                <li class="email"><a>  {{ Auth::user()->email }}</a></li>
                                <!--Avatar Area-->
                                <li>
                                    <div class="avatar-area">
                                        <img src="/assets/img/avatars/thumbnails/{{  Auth::user()->image }}"
                                             class="img-responsive">
                                        <span class="caption">Change Photo</span>
                                    </div>
                                </li>
                                <!--Avatar Area-->
                                <li class="edit">
                                    <a href="/admin/users/{{ Auth::user()->id }}" class="pull-left">Profile</a>
                                    <a href="/admin/users/{{ Auth::user()->id}}/edit" class="pull-right">Setting</a>
                                </li>
                                <!--Theme Selector Area-->
                                <li class="theme-area">
                                    <ul class="colorpicker" id="skin-changer">
                                        <li><a class="colorpick-btn" href="#" style="background-color:#5DB2FF;"
                                               rel="/assets/css/skins/blue.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#2dc3e8;"
                                               rel="/assets/css/skins/azure.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#03B3B2;"
                                               rel="/assets/css/skins/teal.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#53a93f;"
                                               rel="/assets/css/skins/green.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#FF8F32;"
                                               rel="/assets/css/skins/orange.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#cc324b;"
                                               rel="/assets/css/skins/pink.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#AC193D;"
                                               rel="/assets/css/skins/darkred.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#8C0095;"
                                               rel="/assets/css/skins/purple.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#0072C6;"
                                               rel="/assets/css/skins/darkblue.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#585858;"
                                               rel="/assets/css/skins/gray.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#474544;"
                                               rel="/assets/css/skins/black.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#001940;"
                                               rel="/assets/css/skins/deepblue.min.css"></a></li>
                                    </ul>
                                </li>
                                <!--/Theme Selector Area-->
                                <li class="dropdown-footer">
                                    <a href="{{ url('/admin/logout') }}">
                                        Sign out
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                        no space must be between these elements-->
                        <!-- Settings -->
                    </ul>


                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
<!-- /Navbar -->
<!-- Main Container -->
<div class="main-container container-fluid">
    <!-- Page Container -->
    <div class="page-container">

        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
            <!-- Page Sidebar Header-->
            <div class="sidebar-header-wrapper">
                <input type="text" class="searchinput"/>
                <i class="searchicon fa fa-search"></i>
                <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
            </div>
            <!-- /Page Sidebar Header -->
            <!-- Sidebar Menu -->
            <ul class="nav sidebar-menu">
                <!--Dashboard-->



                <li class="">
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon glyphicon glyphicon-home"></i>
                        <span class="menu-text"> Homepage </span>

                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu" style="display: none;">
                        <li>
                            <a href="/admin/settings" class="menu">
                                <i class="menu-icon glyphicon glyphicon-cog"></i>
                                <span class="menu-text"> Settings </span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/slider" class="menu">
                                <i class="menu-icon fa fa-image"></i>
                                <span class="menu-text"> Slider </span>
                            </a>
                        </li>

                    </ul>
                </li>








                <li class="">
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon glyphicon glyphicon-book"></i>
                        <span class="menu-text"> Books </span>

                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu" style="display: none;">

                        <li ui-sref-active="active">
                            <a ui-sref="app.tabs" href="#/app/tabs">
                                <span class="menu-text">Genre</span>
                            </a>
                        </li>
                        <li ui-sref-active="active">
                            <a ui-sref="app.tabs" href="#/app/tabs">
                                <span class="menu-text">Bundle</span>
                            </a>
                        </li>
                        <li ui-sref-active="active">
                            <a ui-sref="app.alerts" href="#/app/alerts">
                                <span class="menu-text">Partner</span>
                            </a>
                        </li>
                        <li ui-sref-active="active">
                            <a ui-sref="app.modals" href="#/app/modals">
                                <span class="menu-text">Level</span>
                            </a>
                        </li>
                    </ul>
                </li>






                <li class="">
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon glyphicon glyphicon-home"></i>
                        <span class="menu-text"> Pages </span>

                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu" style="display: none;">
                        <li>
                            <a href="/admin/mainpages" class="menu">
                                <i class="menu-icon fa fa-sort-amount-desc"></i>
                                <span class="menu-text"> Main pages </span>

                            </a>
                        </li>
                        <li>
                            <a href="/admin/staticpage" class="menu">
                                <i class="menu-icon fa fa-file"></i>
                                <span class="menu-text"> Static pages </span>

                            </a>
                        </li>

                    </ul>
                </li>




                <li>
                    <a href="/admin/users" class="menu">
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-text"> Users </span>

                    </a>
                </li>
                <li>
                    <a href="/admin/scripts" class="menu">
                        <i class="menu-icon fa fa-code"></i>
                        <span class="menu-text"> Scripts </span>
                    </a>
                </li>

            </ul>
            <!-- /Sidebar Menu -->
        </div>
        <!-- /Page Sidebar -->


        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="/admin">CMS</a>
                    </li>

                </ul>
            </div>
            <!-- /Page Breadcrumb -->
            <!-- Page Header -->
            <div class="page-header position-relative">
                <div class="header-title">
                    <h1>

                    </h1>
                </div>
                <!--Header Buttons-->
                <div class="header-buttons">
                    <a class="sidebar-toggler" href="#">
                        <i class="fa fa-arrows-h"></i>
                    </a>
                    <a class="refresh" id="refresh-toggler" href="">
                        <i class="glyphicon glyphicon-refresh"></i>
                    </a>
                    <a class="fullscreen" id="fullscreen-toggler" href="#">
                        <i class="glyphicon glyphicon-fullscreen"></i>
                    </a>
                </div>
                <!--Header Buttons End-->
            </div>
            <!-- /Page Header -->

            @yield('content')
        </div>
        <!--Basic Scripts-->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/slimscroll/jquery.slimscroll.min.js"></script>


        <script type="text/javascript" src="/assets/js/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="/assets/js/ckconf.js"></script>
        <!--Beyond Scripts-->
        <script src="/assets/js/beyond.js"></script>

        <script src="/assets/js/bootbox/bootbox.js"></script>

    @yield('scripts')
    <!-- Custom Scripts -->
        <script src="/assets/js/custom.js"></script>

</body>
</html>
