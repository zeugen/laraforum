<!DOCTYPE html>
<html>
{{-- Include head partial file --}}
  <head>
    @include('partials._Adminhead')
  </head>


<body class="hold-transition fixed skin-purple sidebar-mini">
  <div class="wrapper">
    {{-- fixed top navigation - main nav --}}
    <header class="main-header">
      @include('partials._adminMainHeaderNav')
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      @include('partials._adminSidebar')
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
          @yield('body-content')
        </div>
        <!-- /.row (main row) -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2017 <a href="#">Aurora</a>.</strong> All rights reserved.
    </footer>

  </div>
  <!-- ./wrapper -->

@include('partials._adminScripts')


</body>

</html>
