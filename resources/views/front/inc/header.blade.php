<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center">

      <div class="logo m-auto">
        <h1 class="text-light"><a href="{{ route('home') }}"><span>Bootslander</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#team">Team</a></li>
          <li class="drop-down"><a href="">Categories</a>
            <ul>
                @foreach($categories as $category)
                <li class="drop-down"><a href="{{ route('category', $category->id) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach


        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


