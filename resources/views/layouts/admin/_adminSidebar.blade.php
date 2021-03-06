<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="#" class="user-image" alt="User Image">
    </div>
    <div class="pull-left info">
      <p><span class="hidden-xs">{{Auth::user()->name}}</span> </p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header"><i class="fa fa-dashboard"></i> <span>Dashboard</span></li>
    <li class="treeview  ">
      <a href="#">
      <i class="fa fa-users"></i>
      <span>View Blog</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
      <ul class="treeview-menu">
        <li><a href="{{url('/home')}}"><i class="fa fa-circle-o"></i> Posts</a></li>
        <li><a href="{{url('/home')}}"><i class="fa fa-circle-o"></i> Categories</a></li>




      </ul>
    </li>
    <li class="treeview  ">
      <a href="#">
      <i class="fa fa-users"></i>
      <span>View Forum</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-circle-o"></i> New Thread</a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-circle-o"></i> Browse
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
        <ul class="treeview-menu">
          <li><a href="/threads"><i class="fa fa-circle-o"></i> All threads</a></li>
          <li><a href="/threads?popular=1"><i class="fa fa-circle-o"></i> Popular Threads</a></li>
          <li><a href="/threads?unanswered=1"><i class="fa fa-circle-o"></i> Unanswered Threads</a></li>

        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-circle-o"></i> Channels
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
        <ul class="treeview-menu">
          @foreach (App\Channel::all() as $channel)
              <li><a href="/threads/{{ $channel->slug }}"><i class="fa fa-circle-o"></i>{{ $channel->name }}</a></li>

          @endforeach


        </ul>
      </li>

    </ul>
    </li>


    @if (Auth::user()->role->name === 'administrator')
      <li class="treeview {{Request::is('admin/users') ? "active" :""}} ">
        <a href="#">
        <i class="fa fa-users"></i>
        <span>App Users</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
        <ul class="treeview-menu">
          <li><a href="{{route('users.index')}}"><i class="fa fa-circle-o"></i> Users</a></li>
          <li><a href="{{route('users.create')}}"><i class="fa fa-circle-o"></i> Create</a></li>


        </ul>
      </li>
    @endif

    <li class="treeview ">
      <a href="#">
      <i class="fa fa-book"></i>
      <span>Posts</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
      <ul class="treeview-menu">
        <li class=""><a href="{{route('posts.index')}}"><i class="fa fa-circle-o"></i> All Posts</a></li>
        <li><a href="{{route('posts.create')}}"><i class="fa fa-circle-o"></i> Create Post</a></li>

        @if (Auth::user()->role->name === 'administrator')
        <li class="treeview {{Request::is('admin/categories') ? "active" :""}}">
          <a href="#"><i class="fa fa-circle-o"></i> Post Categories
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
          <ul class="treeview-menu ">
            <li><a href="{{route('categories.index')}}"><i class="fa fa-circle-o"></i> Categories</a></li>
            <li><a href="{{route('categories.create')}}"><i class="fa fa-circle-o"></i> Create Category</a></li>

          </ul>
        </li>
      @endif
      </ul>
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
    {{-- <li><a href="#" class="btn btn-lg btn-info"><i class="fa fa-sign-out"></i> Logout</a></li> --}}
    <li>
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST"
              style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>


  </ul>
</section>
