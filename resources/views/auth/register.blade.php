@extends('layouts.user._applogin')
@section('title', '| Register')
@section('content')
  <div class="page-header" filter-color="green">
      <div class="page-header-image" style="background-image:url(../img/bg11.jpg)"></div>
      <div class="container">
        <div class="row">

          <div class="col-md-12 content-center">
              <div class="card card-login card-plain">
                <h1>Register</h1>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <label for="name" class="col-md-12 control-label">Name</label>

                      <div class="col-md-12">
                          <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                          @if ($errors->has('name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                      <div class="col-md-12">
                          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password" class="col-md-12 control-label">Password</label>

                      <div class="col-md-12">
                          <input id="password" type="password" class="form-control" name="password" required>

                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="password-confirm" class="col-md-12 control-label">Confirm Password</label>

                      <div class="col-md-12">
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-12 col-md-offset-4">
                          <button type="submit" class="btn btn-primary btn-round btn-lg">
                              <i class="fa fa-btn fa-user"></i>Register
                          </button>
                      </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
      <footer class="footer">
          <div class="container">
              <nav>
                  <ul>
                      <li>
                          <a href="{{url('/')}}">
                              Home
                          </a>
                      </li>
                      <li>
                          <a href="{{url('/about')}}">
                              About Us
                          </a>
                      </li>


                  </ul>
              </nav>
              <div class="copyright">
                  &copy; aurora
                  <script>
                      document.write(new Date().getFullYear())
                  </script>
              </div>
          </div>
      </footer>
  </div>
@endsection
