<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lead Edge Sourcing Back </title>

    <!-- Bootstrap core CSS -->

    <link href="{{ URL::asset('public/admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('public/admin/fonts/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('public/admin/css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ URL::asset('public/admin/css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/admin/css/maps/jquery-jvectormap-2.0.1.css') }}" />
    <link href="{{ URL::asset('public/admin/css/icheck/flat/green.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('public/admin/css/floatexamples.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ URL::asset('public/admin/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin/js/nprogress.js') }}"></script>
    <script>
        NProgress.start();
    </script>
    
    <!--[if lt IE 9]>
        <script src="{{ URL::asset('../assets/js/ie8-responsive-file-warning.js') }}"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{url('back')}}" class="site_title"><i class="fa fa-paw"></i> <span>LES</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="public/admin/images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{$user->name}}</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    @include('admin.sidebar_menu');



            @include('admin.top_navigation');


            <!-- page content -->
            @yield('page-content');
            <div class="right_col" role="main">

                @yield('head-row');

                @yield('top-row');

                @yield('mid-row');

                @yield('last-row');


                <!-- footer content -->

                <footer>
                    <div class="">
                        <p class="pull-right">Powered By<a>Ignis Avis Inc</a>. |
                            <span class="lead"> <i class="fa fa-paw"></i>Lead Edge Sourcing Back Panel</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
            <!-- /page content -->

        </div>

    </div>


@include('admin.js_footer');