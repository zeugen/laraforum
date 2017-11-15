@extends('layouts.user._applogin')

@section('content')
  <div class="page-header" filter-color="green">
      <div class="page-header-image" style="background-image:url(../img/login.jpg)"></div>
      <div class="container">
        <div class="row">

          <div class="col-md-12 content-center">
              <div class="card card-login card-plain">
                <h1>Password reset</h1>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

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

                    <div class="form-group">
                        <div class="col-md-12 col-md-offset-4">
                            <button type="submit" class="btn btn-primary btn-lg btn-round">
                                <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
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
                          <a href="{{url('/')}}">
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
