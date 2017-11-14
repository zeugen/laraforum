<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Aurora @yield('title')</title>

    <!-- Styles -->
    <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css")}}">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ asset("font-awesome/css/font-awesome.min.css")}}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="{{ asset("Ionicons/css/ionicons.min.css")}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ asset("css/AdminLTE.css")}}">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="{{ asset("css/skin-green.min.css")}}">

      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="{{ asset("css/bootstrap3-wysihtml5.min.css")}}">
      {{-- load app styles --}}
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->


    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Scripts -->
    <script>
        window.App = {!! json_encode([
            'csrfToken' => csrf_token(),
            'user' => Auth::user(),
            'signedIn' => Auth::check()
        ]) !!};
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
        /*body { padding-bottom: 100px; }*/
        .level { display: flex; align-items: center; }
        .level-item { margin-right: 1em; }
        .flex { flex: 1; }
        .mr-1 { margin-right: 1em; }
        .ml-a { margin-left: auto; }
        [v-cloak] { display: none; }
    </style>

    @yield('head')
</head>
<body class="hold-transition fixed skin-green sidebar-mini" >
<div id="app" class="wrapper">
  {{-- fixed top navigation - main nav --}}
  <header class="main-header">
    {{-- @include('layouts.admin._adminMainHeaderNav') --}}
    @include ('layouts.admin.nav')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    @include('layouts.admin._adminSidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- ENTER THE MAIN CONTENT HERE - divide it into 2 cols e.g -->
        @yield('content')

        <flash message="{{ session('flash') }}"></flash>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    {{-- @yield('content')

    <flash message="{{ session('flash') }}"></flash> --}}
</div>
{{-- {{footer}} --}}
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2017 <a href="#">Aurora</a>.</strong> All rights reserved.
</footer>

<!-- Scripts -->
<!-- jQuery 3 -->
<script src="{{ asset("js/vendor/jquery.min.js")}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset("js/vendor/jquery-ui.min.js")}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset("js/vendor/bootstrap.min.js")}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset("js/vendor/bootstrap3-wysihtml5.all.min.js")}}"></script>
<!-- Slimscroll -->
<script src="{{ asset("js/vendor/jquery.slimscroll.min.js")}}"></script>

<!-- AdminLTE App -->
<script src="{{ asset("js/vendor/adminlte.min.js")}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>
