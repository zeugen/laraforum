<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Aurora @yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /> --}}
    <!-- CSS Files -->
        {{-- <link href="{{asset('css/now-ui-kit.css')}}" rel="stylesheet" /> --}}
    {{-- bootstrap test --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    {{-- <link href="{{asset('css/demo.css')}}" rel="stylesheet" /> --}}
    <link href="{{asset('css/masonry.css')}}" rel="stylesheet" />
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ url('/') }}" rel="tooltip" title="For those in pursuit of good health" data-placement="bottom" target="_blank">
                    Aurora
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image={{asset('img/blurred-image-1.jpg')}}>
                <ul class="navbar-nav">

                    <li class="nav-item {{Request::is('/') ? "active" :""}}">
                        <a class="nav-link" href="{{ url('/') }}">
                            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                            <p>Home</p>
                        </a>

                    </li>
                    <li class="nav-item {{Request::is('/about') ? "active" :""}}">
                        <a class="nav-link" href="{{ url('/about') }}">
                            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                            <p>About</p>
                        </a>

                    </li>
                    <!-- authentication links -->
                    @if(Auth::guest())
                    <li class="nav-item {{Request::is('/login') ? "active" :""}}">
                        <a class="nav-link" href="{{ url('/login') }}" >
                            <i class="now-ui-icons files_paper"></i>
                            <p>Login</p>
                        </a>
                    </li>
                    <li class="nav-item {{Request::is('/register') ? "active" :""}}">
                        <a class="nav-link btn btn-neutral" href="{{ url('/register') }}" >
                            <i class="now-ui-icons arrows-1_share-66"></i>
                            <p>Register</p>
                        </a>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>
                              {{ Auth::user()->name }}
                            </p>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                        </div>
                    </li>
                    @endif



                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    @yield('content')

    <!--   Core JS Files   -->
    <script src="{{asset('js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
     <script src="{{asset('/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="{{asset('js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
     <script src="{{asset('js/now-ui-kit.js')}}" type="text/javascript"></script>
    <script type="text/javascript">


        function scrollToDownload() {

            if ($('.section-download').length != 0) {
                $("html, body").animate({
                    scrollTop: $('.section-download').offset().top
                }, 1000);
            }
        }
    </script>
</body>


</html>
