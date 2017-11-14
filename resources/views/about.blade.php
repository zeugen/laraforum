@extends('layouts.user.app')
@section('title','| about')
@section('content')
  <div class="wrapper">
      <div class="page-header clear-filter" filter-color="green">
          <div class="page-header-image" data-parallax="true" style="background-image:url(../img/fitness_tracker.jpg)" >
          </div>
          <div class="container">
              <div class="content-center brand">
                  <img class="n-logo" src={{asset('img/plantlogo.png')}} alt="">
                  <h1 class="h1-seo">Aurora.</h1>
                  <h3>What we are all about</h3>
              </div>

          </div>
      </div>
      <div class="main">


          <div class="section">
              <div class="container text-center">
                  <div class="row justify-content-md-center">
                      <div class="col-md-12 col-lg-8">
                          <h2 class="title">About us</h2>
                          <h5 class="description">Afya fitness is platform used by a select team that includes many renowned nutritionists, and specialists from other areas of health and fitness, who share their extensive experience on how to improve your personal wellbeing.</h5>

                      </div>
                  </div>
              </div>
          </div>
          {{-- profiles --}}
          <div class="section section-nucleo-icons">
              <div class="container text-center ">
                  <div class="row justify-content-md-center">
                      <div class=" col-md-8">
                          <h2 class="title">The Team</h2>
                          <h5 class="description">
                               The teams mission is to help people everywhere look good, feel good, do good in order to live more fulfilling lives every day.
                          </h5>
                          <!-- <div class="nucleo-container">
            <img src="assets/img/nucleo.svg" alt="">
          </div> -->

                      </div>

                  </div>
                  <div class="row justify-content-md-center">
                    <div class="col-sm-3">
                      <img src="{{asset('img/user/admin.jpg')}}" alt="" class="rounded-circle img-raised">
                      <h3>Rogers Momanyi</h3>
                      <h6>Lead Instructor</h6>
                    </div>
                    <div class="col-sm-3">
                      <img src="{{asset('img/user/1.jpg')}}" alt="" class="rounded-circle img-raised">
                      <h3>Nancy Fatma</h3>
                      <h6></h6>
                    </div>
                    <div class="col-sm-3">
                      <img src="{{asset('img/user/7.jpg')}}" alt="" class="rounded-circle img-raised">
                      <h3>Martin Wenger</h3>
                      <h6></h6>
                    </div>
                    <div class="col-sm-3">
                      <img src="{{asset('img/user/12.jpg')}}" alt="" class="rounded-circle img-raised">
                      <h3>Ngash Sage</h3>
                      <h6></h6>
                    </div>
                    <div class="col-sm-3">
                      <img src="{{asset('img/user/3.jpg')}}" alt="" class="rounded-circle img-raised">
                      <h3>Wendy Kimani</h3>
                      <h6></h6>
                    </div>
                    <div class="col-sm-3">
                      <img src="{{asset('img/user/10.jpg')}}" alt="" class="rounded-circle img-raised">
                      <h3>Jacky Waweru</h3>
                      <h6>health</h6>
                    </div>
                    <div class="col-sm-3">
                      <img src="{{asset('img/user/9.jpg')}}" alt="" class="rounded-circle img-raised">
                      <h3>Eva Longoria</h3>
                      <h6>Psychologist</h6>
                    </div>
                    <div class="col-sm-3">
                      <img src="{{asset('img/user/8.jpg')}}" alt="" class="rounded-circle img-raised">
                      <h3>Kevin Wetungu</h3>
                      <h6></h6>
                    </div>
                  </div>
              </div>
          </div>
          <div class="container">
            <div class="row justify-content-md-center sharing-area text-center">
                <div class="text-center col-md-12 col-lg-8">
                    <h3>Thank you for supporting us!</h3>
                </div>

            </div>
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2>Want more?</h2>
                <h5 class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, asperiores sapiente nesciunt, a, ex enim, in perferendis libero veritatis molestiae repellendus! Ea accusantium laboriosam consequuntur, odio doloribus eveniet dignissimos deserunt.</h4>
            </div>
          </div>



      </div>
      <!-- end main  -->

      <footer class="footer" data-background-color="black">
          <div class="container">
              <nav>
                  <ul>
                      <li>
                          <a href="{{url('/')}}">
                              Aurora
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
                  &copy; Aurora
                  <script>
                      document.write(new Date().getFullYear())
                  </script>
              </div>
          </div>
      </footer>
  </div>
@endsection
