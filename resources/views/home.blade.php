@extends('layouts.user.app')
@section('title', '| Home')

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
      <div class="main">
        <div class="container">
        <div class=" row">
            {{-- this column will hold the list of moderators --}}

            {{-- this column will hold the articles --}}
            <div class="col-md-10 offset-md-1">
              @foreach ($posts as $post)
                <section class="article-panel  raised">
                  <header>
                    <div class="post-attrib">
                      <span>{{$post->user->name}}</span>
                      <h6>CATEGORY: <span>{{$post->category->name}}</span></h6>
                      <hr>
                    </div>
                    <h2>{{$post->title}}</h2>
                  </header>
                  <div class="row">
                    {{-- blog image --}}
                    <div class="col-md-5 col-sm-4">
            <img  src="{{$post->photo ? $post->photo->file : url('/img/user/postplaceholder.gif')}}" alt="" class=" ">
                    </div>
                    <div class="col-md-7 col-sm-8">

                      <article class="article-panel-body">
                        <p>{{substr($post->body, 0,250)}}{{strlen($post->body)>250? '...': ''}}</p>

                      </article>
                      <footer>
                        <a href="{{route('posts.single', $post->id)}}" class="btn btn-primary ">Read more</a>
                        <span>
                        <a href="" data-toggle="tooltip" data-placement="top" title="facebook share" data-container="body" data-animation="true"><i class="fa fa-share" aria-hidden="true"></i></a>
                        <a href="" data-toggle="tooltip" data-placement="bottom" title="like this article" data-container="body" data-animation="true"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </span>

                      </footer>
                    </div>
                  </div>
                </section>

              @endforeach
              <div class="row">
                <div class="col-sm-12">

                    {{-- the pagination --}}
                    {{$posts->links()}}

                </div>
              </div>


            </div>
            {{-- this column will hold the categories, filters, tags, links --}}

        </div>
    </div>
{{--
          <div class="section section-nucleo-icons">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-6 col-md-12">
                          <h2 class="title">Your health comes first!</h2>
                          <h5 class="description">
                              We are a team of renowned  specialists from various areas of health and fitness with extensive experience. Our mission is We help people everywhere look good, feel good, do good in order to live more fulfilling lives every day.
                          </h5>
                          <!-- <div class="nucleo-container">
            <img src="assets/img/nucleo.svg" alt="">
          </div> -->
                          @if (Auth::guest())


                          <a href="{{ url('/login') }}" class="btn btn-primary btn-round btn-lg" target="_blank">LOGIN</a>
                          <a href="{{ url('/register') }}" class="btn btn-primary btn-simple btn-round btn-lg" target="_blank">REGISTER</a>
                          @endif
                      </div>
                      <div class="col-lg-6 col-md-12">
                          <div class="icons-container">

                              <img src={{asset('img/aurora.png')}} alt="" class="img-responsive  img-raised">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="section">
              <div class="container text-center">
                  <div class="row justify-content-md-center">
                      <div class="col-md-12 col-lg-8">
                          <h2 class="title">About us</h2>
                          <h5 class="description">Afya fitness is platform used by a select team that includes many renowned nutritionists, and specialists from other areas of health and fitness, who share their extensive experience on how to improve your personal wellbeing.</h5>
                          <a href="{{url('/about')}}" class="btn btn-primary btn-round btn-lg" >View more</a>
                      </div>
                  </div>
              </div>
          </div> --}}



      </div>
      <!-- end main  -->

      <footer class="footer" data-background-color="black">
          <div class="container">
              <nav>
                  <ul>
                      <li>
                          <a href="/home">
                              Aurora
                          </a>
                      </li>
                      <li>
                          <a href="/about">
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
