@extends('layouts.master')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>{{ __('home.slogane') }}<br><span>{{ __('home.company name') }}</span></h1>
            <h2>{{ __('home.slogane2') }}</h2>
            <div class="text-center text-lg-left">
              <a href="#about" class="btn-get-started scrollto">{{ __('home.Get Started') }}</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="{{ $about->video }}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>{{ $about->head_title }}</h3>
            <p>{{ $about->head_description }}</p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">{{ $about->body_title_1 }}</a></h4>
              <p class="description">{{ $about->body_description_1 }}</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">{{ $about->body_title_2 }}</a></h4>
              <p class="description">{{ $about->body_description_2 }}</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">{{ $about->body_title_3 }}</a></h4>
              <p class="description">{{ $about->body_description_3 }}</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>{{ __('home.Features') }}</h2>
          <p>{{ __('home.Check The Features') }}</p>
        </div>

        <div class="row" data-aos="fade-left">
          @foreach ($categories as $key => $category)
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                @if($key == 0)<i class="ri-store-line" style="color: #ffbb2c;"></i>@endif
                @if($key == 1)<i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>@endif
                @if($key == 2)<i class="ri-calendar-todo-line" style="color: #e80368;"></i>@endif
                @if($key == 3)<i class="ri-paint-brush-line" style="color: #e361ff;"></i>@endif
                @if($key == 4)<i class="ri-database-2-line" style="color: #47aeff;"></i>@endif
                @if($key == 5)<i class="ri-gradienter-line" style="color: #ffa76e;"></i>@endif
                @if($key == 6)<i class="ri-file-list-3-line" style="color: #11dbcf;"></i>@endif
                @if($key == 7)<i class="ri-price-tag-2-line" style="color: #4233ff;"></i>@endif
                @if($key == 8)<i class="ri-anchor-line" style="color: #b2904f;"></i>@endif
                @if($key == 9)<i class="ri-disc-line" style="color: #b20969;"></i>@endif
                @if($key == 10)<i class="ri-base-station-line" style="color: #ff5828;"></i>@endif
                @if($key == 11)<i class="ri-fingerprint-line" style="color: #29cc61;"></i>@endif
              <h3><a href="{{ route('category', $category->id) }}">{{ $category->name }}</a></h3>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">{{ __('home.Happy Clients no') }}</span>
              <p>{{ __('home.Happy Clients') }}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">{{ __('home.Projects no') }}</span>
              <p>{{ __('home.Projects') }}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">{{ __('home.Hours Of Support no') }}</span>
              <p>{{ __('home.Hours Of Support') }}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">{{ __('home.Hard Workers no') }}</span>
              <p>{{ __('home.Hard Workers') }}</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>{{ __('home.Gallery title') }}</h2>
          <p>{{ __('home.Gallery') }}</p>
        </div>

        <div class="row no-gutters" data-aos="fade-left">
            @foreach ($posts as $post)
            <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                    <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                    <img src="{{ asset('storage/posts/'.$post->image) }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            @endforeach

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in">

            @foreach ($logos as $logo)
            <div class="testimonial-item">
                <img src="{{ asset('storage/logos/'.$logo->image) }}" class="testimonial-img" alt="">
                <h3>{{ $logo->name }}</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  {{ $logo->words }}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            @endforeach

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>{{ __('home.Team title') }}</h2>
          <p>{{ __('home.Team') }}</p>
        </div>

        <div class="row" data-aos="fade-left">
            @foreach ($team as $member)
            <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic"><img src="{{asset('storage/avatars/'.$member->image)}}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>{{$member->name}}</h4>
                    <span>{{$member->position}}</span>
                    <div class="social">
                      <a href=""><i class="icofont-twitter"></i></a>
                      <a href=""><i class="icofont-facebook"></i></a>
                      <a href=""><i class="icofont-instagram"></i></a>
                      <a href=""><i class="icofont-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
        </div>

      </div>
    </section><!-- End Team Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>{{ __('home.Contact title') }}</h2>
          <p>{{ __('home.Contact') }}</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>{{ __('home.Location') }}</h4>
                <p>{{ $info->location }}</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>{{ __('home.Email') }}</h4>
                <p>{{ $info->email }}</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>{{ __('home.Call') }}</h4>
                <p>{{ $info->phone }}</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="{{ route('send.mail') }}" method="post" role="form">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control @error('title') is-invalid @enderror" id="name" placeholder="{{ __('home.Your Name') }}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="email" class="form-control @error('title') is-invalid @enderror" name="email" id="email" placeholder="{{ __('home.Your Email') }}" data-rule="email" data-msg="Please enter a valid email" />
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="subject" id="subject" placeholder="{{ __('home.Subject') }}" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        @error('subject')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group">
                    <textarea class="form-control @error('title') is-invalid @enderror" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="{{ __('home.Message') }}"></textarea>
                        @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
                    <div class="text-center"><button class="btn btn-success" type="submit">{{ __('home.Send Message') }}</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection


