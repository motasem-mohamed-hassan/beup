<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
                <h3>BE UP AGENCY</h3>
                <h4>{{ __('home.slogane') }}<br><span>{{ __('home.company name') }}</span></h4>
                <a href="{{ $info->location_link }}" target="_blank">
                    <p>{{ $info->location }}</p>
                </a>

              <br><br>
              <strong>{{ __('home.Call') }}</strong> {{ $info->phone }}<br>
              <strong>{{ __('home.Email') }}</strong> {{ $info->email }}<br>
            </p>
              <div class="social-links mt-3">
                <a href="{{ $info->twitter_link }}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="{{ $info->facebook_link }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{ $info->instagram_link }}" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="{{ $info->linkedin_link }}" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 style="text-align: center">{{ __('header.Useful Links') }}</h4>
            <ul>
                <li><i class="bx bx-chevron-right"></i><a href="index.html">{{ __('header.Home') }}</a></li>
                <li><i class="bx bx-chevron-right"></i><a href="#about">{{ __('header.About') }}</a></li>
                <li><i class="bx bx-chevron-right"></i><a href="#gallery">{{ __('header.Gallery') }}</a></li>
                <li><i class="bx bx-chevron-right"></i><a href="#team">{{ __('header.Team') }}</a></li>
              </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 style="text-align: center">{{ __('header.Categories') }}</h4>
            <ul>
                @foreach ($categories as $category)
                    <li><i class="bx bx-chevron-right"></i>
                        <a href="{{ route('category', $category->id) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter" style="text-align: center">
            <img style="width: 60%;" src="{{asset('assets/img/beup.png')}}">
           <h4>BE UP AGENCY</h4>
           <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

  </footer>
