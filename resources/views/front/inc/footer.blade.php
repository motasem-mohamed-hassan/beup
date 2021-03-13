<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Bootslander</h3>
              <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em></p>
                <a href="{{ $info->location_link }}" target="_blank">
                    <p>{{ $info->location }}</p>
                </a>

              <br><br>
                <strong>Phone:</strong> {{ $info->phone }}<br>
                <strong>Email:</strong> {{ $info->email }}<br>
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
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
                @foreach ($categories as $category)
                    <li><i class="bx bx-chevron-right"></i>
                        <a href="{{ route('category', $category->id) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            {{-- <img src="{{ asset('assets/img/beup.png') }}"> --}}
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

  </footer>
