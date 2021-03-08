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
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>{{ __('home.About title') }}</h3>
            <p>{{ __('home.About') }}</p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">{{ __('home.About desc title1') }}</a></h4>
              <p class="description">{{ __('home.About desc1') }}</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">{{ __('home.About desc title2') }}</a></h4>
              <p class="description">{{ __('home.About desc2') }}</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">{{ __('home.About desc title3') }}</a></h4>
              <p class="description">{{ __('home.About desc3') }}</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Features</h2>
          <p>Check The Features</p>
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
              <h3><a href="{{ route('category', $category->id) }}">{{ $category->name_en }}</a></h3>
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

    <!-- ======= Details Section ======= -->
    {{-- <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check"></i> Iure at voluptas aspernatur dignissimos doloribus repudiandae.</li>
              <li><i class="icofont-check"></i> Est ipsa assumenda id facilis nesciunt placeat sed doloribus praesentium.</li>
            </ul>
            <p>
              Voluptas nisi in quia excepturi nihil voluptas nam et ut. Expedita omnis eum consequatur non. Sed in asperiores aut repellendus. Error quisquam ab maiores. Quibusdam sit in officia
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Corporis temporibus maiores provident</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <p>
              Inventore id enim dolor dicta qui et magni molestiae. Mollitia optio officia illum ut cupiditate eos autem. Soluta dolorum repellendus repellat amet autem rerum illum in. Quibusdam occaecati est nisi esse. Saepe aut dignissimos distinctio id enim.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
            <p>
              Qui consequatur temporibus. Enim et corporis sit sunt harum praesentium suscipit ut voluptatem. Et nihil magni debitis consequatur est.
            </p>
            <p>
              Suscipit enim et. Ut optio esse quidem quam reiciendis esse odit excepturi. Vel dolores rerum soluta explicabo vel fugiat eum non.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-4.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <ul>
              <li><i class="icofont-check"></i> Et praesentium laboriosam architecto nam .</li>
              <li><i class="icofont-check"></i> Eius et voluptate. Enim earum tempore aliquid. Nobis et sunt consequatur. Aut repellat in numquam velit quo dignissimos et.</li>
              <li><i class="icofont-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div>

      </div>
    </section> --}}
    <!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>{{ __('home.Gallery title') }}</h2>
          <p>{{ __('home.Gallery') }}</p>
        </div>

        <div class="row no-gutters" data-aos="fade-left">

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

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

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

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

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
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>{{ __('home.Email') }}</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>{{ __('home.Call') }}</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">{{ __('home.Send Message') }}</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection


