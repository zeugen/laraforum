@extends('layouts.user._applogin')

@section('title', '| Login')
@section('content')
  <div class="page-header" filter-color="green">
      <div class="page-header-image" style="background-image:url(../img/loginfit2.jpg)"></div>
      <div class="container">
        <div class="row">

          <div class="col-md-12 content-center">
              <div class="card card-login card-plain">
                <h1>Login</h1>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    {{-- <div class="form-group">
                        <div class="col-md-12 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="bootstrap-switch"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div> --}}

                    <div class="form-group">
                        <div class="col-md-12 col-md-offset-4">
                            <button type="submit" class="btn btn-lg btn-primary btn-round ">
                                <i class="fa fa-btn fa-sign-in"></i> Login
                            </button>


                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-md-offset-4">
                            <a class="btn btn-lg btn-link btn-warning btn-round btn-round" href="{{ route('password.request') }}">Forgot Your Password?</a>
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
