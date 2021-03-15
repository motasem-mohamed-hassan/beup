<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center ">

        <div class="logo " id="logo">
            @if(LaravelLocalization::getCurrentLocale() == 'en')
                <h1 style="margin:5px -8px 0px ;" class="text-light"><a href="{{ route('home') }}"><img src="{{ asset('assets/img/beup.png') }}" alt="" class="img-fluid" style="width: 40px;margin-top:8px"><span>BE UP AGENCY</span></a></h1>
            @else
                <h1 style="margin:5px -8px 0px ;" class="text-light"><a href="{{ route('home') }}"><span>BE UP AGENCY</span><img src="{{ asset('assets/img/beup.png') }}" alt="" class="img-fluid" style="width: 40px;margin-top:8px"></a></h1>
            @endif
          </div>

      <nav class="nav-menu d-none d-lg-block m-auto">
        <ul>
          <li class="active"><a href="{{ route('home') }}">{{ __('header.Home') }}</a></li>
          <li><a href="#about">{{ __('header.About') }}</a></li>
          {{-- <li><a href="#features">{{ __('header.Features') }}</a></li> --}}
          <li><a href="#gallery">{{ __('header.Gallery') }}</a></li>
          <li><a href="#team">{{ __('header.Team') }}</a></li>
          <li class="drop-down"><a href="">{{ __('header.Categories') }}</a>
            <ul>
                @foreach($categories as $category)
                <li class="drop-down"><a href="{{ route('category', $category->id) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
          </li>
          <li><a href="#contact">{{ __('header.Contact') }}</a></li>
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


