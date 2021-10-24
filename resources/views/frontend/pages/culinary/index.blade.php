@extends('frontend.layouts.app')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('assets/frontend/images/kuliner.jpeg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">Kuliner</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('tour.index') }}"> Rasakan Cita Rasa Masakan Aceh </a></p>
          </div>
        </div>
      </div>
    </section>
  
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
          @foreach ($items as $item)
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="{{ route('culinary.show',$item->slug) }}" class="block-20 w-100">
                <img src="{{ $item->image() }}" alt="" class="w-100">
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
                    <a href="{{ route('tour.show',$item->slug) }}">{{ $item->name }}</a>
                </h3>
               <div class="description">
                <p class="text-justify" style="height: 140px">{{ Str::limit($item->description,100,'...') }}</p>
               </div>
                <div class="star d-flex clearfix">
                  <div class="mr-auto float-left">
                    <?php for($i = 0;$i < floor($item->score($item->category_id,$item->id));$i++): ?>
                      <span class="ion-ios-star text-warning"></span>
                    <?php endfor?>
                  </div>
                  <div class="float-right">
                    <span class="rate">({{ $item->score($item->category_id,$item->id) }})</span>
                  </div>
                </div>

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