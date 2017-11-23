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
    <link rel="stylesheet" href="{{asset('css/vendor/jquery.atwho.css')}}">
    {{-- <link href="{{asset('css/masonry.css')}}" rel="stylesheet" /> --}}
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ url('/') }}" rel="tooltip" title="For those in pursuit of good health" data-placement="bottom" >
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
                      <a class="nav-link" href="{{ url('/home') }}">
                          <i class="now-ui-icons files_single-copy-04"></i>
                          <p>Posts</p>
                      </a>

                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="now-ui-icons ui-2_chat-round"></i>
                          <p>
                            Forum
                          </p>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="/threads">All Threads</a>
                          @if (auth()->check())
                            <a class="dropdown-item" href="/threads?by={{ auth()->user()->name }}">My Threads</a>
                          @endif
                          <a class="dropdown-item" href="/threads?popular=1">Popular Threads</a>
                          <a class="dropdown-item" href="/threads?unanswered=1">Unanswered Threads</a>

                      </div>
                  </li>
                  <li class="nav-item {{Request::is('/about') ? "active" :""}}">
                    @if(Auth()->check())
                      <a class="nav-link" href="/threads/create" >
                          <i class="now-ui-icons arrows-1_share-66"></i>
                          <p>New Thread</p>
                      </a>
                    @else

                      <a class="nav-link" href="/threads/create" rel="tooltip" title="You have to be logged in to submit a thread" data-placement="bottom">
                          <i class="now-ui-icons arrows-1_share-66"></i>
                          <p>New Thread</p>
                      </a>
                    @endif
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                          <p>
                            Channels
                          </p>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                          @foreach (App\Channel::all() as $channel)
                            <a class="dropdown-item"href="/threads/{{ $channel->slug }}">{{ $channel->name }}</a>

                          @endforeach


                      </div>
                  </li>


                    <!-- authentication links -->
                    @if(Auth::guest())
                    <li class="nav-item {{Request::is('/login') ? "active" :""}}">
                        <a class="nav-link" href="{{ route('login') }}" >
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Login</p>
                        </a>
                    </li>
                    <li class="nav-item {{Request::is('/register') ? "active" :""}}">
                        <a class="nav-link btn btn-neutral" href="{{ route('register') }}" >
                            <i class="now-ui-icons gestures_tap-01"></i>
                            <p>Register</p>
                        </a>
                    </li>
                    @else
                      <user-notifications></user-notifications>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>
                              {{ Auth::user()->name }}
                            </p>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                            <a class="dropdown-item" href="{{ route('profile', Auth::user()) }}">My Profile</a>
                            @if (Auth::user()->role->name === 'administrator')
                              <a class="dropdown-item" href="{{ route('users.index') }}">Admin Dashboard</a>
                            @endif
                            @if (Auth::user()->role->name === 'author')
                              <a class="dropdown-item" href="{{ url('author/posts') }}">Author Dashboard</a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                Logout</a>

                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                                      style="display: none;">
                                                                    {{ csrf_field() }}
                                                                </form>
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
