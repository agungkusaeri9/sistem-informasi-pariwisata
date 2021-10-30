@extends('frontend.layouts.app')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('assets/frontend/images/image_2.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">Galeri Video</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('tour.index') }}"> Semua Tentang Aceh Pidie</a></p>
          </div>
        </div>
      </div>
    </section>
  
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
          @foreach ($items as $item)
          {{-- <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="{{ route('videos.show',$item->id) }}" class="block-20">
                
              </a>
              <div class="text mt-3 float-right d-block">
                <div class="d-flex align-items-center pt-2 mb-4 topp">
                  <div class="one">
                    <span class="day">{{ $item->created_at->translatedFormat('d') }}</span>
                  </div>
                  <div class="two">
                    <span class="yr">{{ $item->created_at->translatedFormat('y') }}</span>
                    <span class="mos">{{ $item->created_at->translatedFormat('m') }}</span>
                  </div>
                </div>
                <h3 class="heading">
                    <a href="{{ route('videos.show',$item->id) }}">{{ $item->name }}</a>
                </h3>
               <div class="description">
                <div>Lokasi : {{ $item->location }}</div>
                <div>Kategori : {{ $item->category->name }}</div>
               </div>
              </div>
            </div>
          </div> --}}
          <div class="col-md-4 col-lg-4 ftco-animate">
            <div class="project">
                <div class="img">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item w-100" src="{{ $item->url() }}" allowfullscreen></iframe>
                  </div>
                </div>
                <div class="text">
                    <span>{{ $item->created_at->translatedFormat('d/m/Y H:i:s') }}</span>
                    <h3><a href="{{ route('videos.show',$item->id) }}">{{ $item->name }}</a></h3>
                    <div>Kategori : {{ $item->category->name }}</div>
                    <div>Lokasi : {{ $item->location }}</div>
                </div>
            </div>
          </div>
          @endforeach
        </div>
  
  
        <div class="row mt-5">
          <div class="col text-center">
            {{ $items->links() }}
          </div>
        </div>
      </div>
  
  
</section>
@endsection