@extends('frontend.layouts.app')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url();" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">Galeri Video</h1>
        </div>
      </div>
    </div>
  </section>
    
  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 order-md-last ftco-animate">
          <h2 class="mb-3">{{ $item->name }}</h2>
          <p>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $item->url() }}" allowfullscreen></iframe>
              </div>
          </p>
          <p>Lokasi : {{ $item->location }}</p>
          <div>Kategori : {{ $item->category->name }}</div>
          <p>
              {!! $item->description !!}
          </p>

        </div>

        <div class="col-lg-4 sidebar ftco-animate">
          <x-Sidebar></x-Sidebar>
        </div>
      </div>
    </div>
  </section> 
@endsection