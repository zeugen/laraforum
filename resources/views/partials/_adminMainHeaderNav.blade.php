
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>Aurora</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Aurora</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <li class="dropdown messages-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-envelope-o"></i>
          <span class="label label-success">4</span>
        </a>
          <ul class="dropdown-menu">
            <li class="header">You have 4 messages</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li>
                  <!-- start message -->

                </li>
                <!-- end message -->
              </ul>
            </li>

          </ul>
        </li>


        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="{{Auth::user()->photo->file}}" class="user-image" alt="User Image">
          <span class="hidden-xs">{{Auth::user()->name}}</span>
        </a>

        </li>

      </ul>
    </div>
  </nav>
