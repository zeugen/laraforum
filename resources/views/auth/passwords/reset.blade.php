@extends('layouts.user._applogin')

@section('content')
  <div class="page-header" filter-color="green">
      <div class="page-header-image" style="background-image:url(../img/login.jpg)"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-md-offset-2">
                  <div class="panel panel-default">
                      <div class="panel-heading">Reset Password</div>

                      <div class="panel-body">
                          @if (session('status'))
                              <div class="alert alert-success">
                                  {{ session('status') }}
                              </div>
                          @endif

                          <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                              {{ csrf_field() }}

                              <input type="hidden" name="token" value="{{ $token }}">

                              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                  <div class="col-md-6">
                                      <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                      @if ($errors->has('email'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                  <label for="password" class="col-md-4 control-label">Password</label>

                                  <div class="col-md-6">
                                      <input id="password" type="password" class="form-control" name="password" required>

                                      @if ($errors->has('password'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                  <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                  <div class="col-md-6">
                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                      @if ($errors->has('password_confirmation'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('password_confirmation') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="col-md-6 col-md-offset-4">
                                      <button type="submit" class="btn btn-primary">
                                          Reset Password
                                      </button>
                                  </div>
                              </div>
                          </form>
                      </div>
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
