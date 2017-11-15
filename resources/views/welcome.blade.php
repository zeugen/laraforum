@extends('layouts.user.app')
@section('title', '| Welcome')

@section('content')
  <div class="wrapper">
      <div class="page-header clear-filter" filter-color="green">
          <div class="page-header-image" data-parallax="true" style="background-image:url(../img/about.jpg)">
          </div>
          <div class="container">
              <div class="content-center brand">
                  <img class="n-logo" src={{asset('img/plantlogo.png')}} alt="">
                  <h1 class="h1-seo">Aurora.</h1>
                  <h3>For those in pursuit of good health</h3>
              </div>

          </div>
      </div>



  </div>
@endsection
