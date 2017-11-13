<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{Auth::user()->photo->file}}" class="user-image" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>{{Auth::user()->name}}</p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header"><i class="fa fa-dashboard"></i> <span>Dashboard</span></li>
    <li class="treeview {{Request::is('admin/users') ? "active" :""}} ">
      <a href="#">
      <i class="fa fa-users"></i>
      <span>View Home Page</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
      <ul class="treeview-menu">
        <li><a href="{{url('/home')}}"><i class="fa fa-circle-o"></i> Aurora</a></li>



      </ul>
    </li>



    <li class="treeview {{Request::is('admin/users') ? "active" :""}} ">
      <a href="#">
      <i class="fa fa-users"></i>
      <span>App Users</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
      <ul class="treeview-menu">
        <li><a href="{{route('admin.users.index')}}"><i class="fa fa-circle-o"></i> Users</a></li>
        <li><a href="{{route('admin.users.create')}}"><i class="fa fa-circle-o"></i> Create</a></li>


      </ul>
    </li>
    <li class="treeview {{Request::is('admin/posts') ? "active" :""}}">
      <a href="#">
      <i class="fa fa-book"></i>
      <span>Posts</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
      <ul class="treeview-menu">
        <li class=""><a href="{{route('admin.posts.index')}}"><i class="fa fa-circle-o"></i> All Posts</a></li>
        <li><a href="{{route('admin.posts.create')}}"><i class="fa fa-circle-o"></i> Create Post</a></li>

        <li class="treeview {{Request::is('admin/categories') ? "active" :""}}">
          <a href="#"><i class="fa fa-circle-o"></i> Post Categories
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
          <ul class="treeview-menu ">
            <li><a href="{{route('admin.categories.index')}}"><i class="fa fa-circle-o"></i> Categories</a></li>

          </ul>
        </li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
      <i class="fa fa-table"></i> <span>Tables</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
      <ul class="treeview-menu">
        <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
        <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
      </ul>
    </li>

    <li>
      <a href="pages/mailbox/mailbox.html">
      <i class="fa fa-envelope"></i> <span>Mailbox</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-yellow">12</small>
        <small class="label pull-right bg-green">16</small>
        <small class="label pull-right bg-red">5</small>
      </span>
    </a>
    </li>
    <li class="treeview">
      <a href="#">
      <i class="fa fa-share"></i> <span>Multilevel</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-circle-o"></i> Level One
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level Two
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
      </ul>
    </li>
    <li><a href="{{ url('/logout') }}" class="btn btn-lg btn-info"><i class="fa fa-sign-out"></i> Logout</a></li>


  </ul>
</section>
