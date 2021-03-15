@extends('layouts.master')

@section('content')
<section id="details" class="details">
    <div class="container">

    <div class="row">
        <div class=" col-md-8 pt-5 order-2 order-md-1 text-align-center" data-aos="fade-up">
        <h3 style="text-align:center">{{ $this_category->name }}</h3></a>
        <p class="font-italic ">
            {{ $this_category->description }}
        </p>
    </div>
    </div>

      @foreach($posts as $post)
        @if($loop->iteration % 2 == 0)
            <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                <img src="{{ asset('storage/posts/'.$post->image) }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                <a href="{{$post->link}}"><h3>{{ $post->title }}</h3></a>
                <p class="font-italic">
                    {{ $post->body }}
                </p>
                </div>
            </div>
        @else
            <div class="row content">
                <div class="col-md-4" data-aos="fade-right">
                <img src="{{ asset('storage/posts/'.$post->image) }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-4" data-aos="fade-up">
                    <a href="{{$post->link}}"><h3>{{ $post->title }}</h3></a>
                    <p class="font-italic">
                    {{$post->body }}
                </p>
                </div>
            </div>
        @endif
      @endforeach

    </div>
  </section>

@endsection
