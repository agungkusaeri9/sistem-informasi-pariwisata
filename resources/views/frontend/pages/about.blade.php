@extends('frontend.layouts.app')
@section('content')
<header class="text-center" style="margin-bottom: -70px;background-image: url({{ asset('assets/frontend/images/bg_2.jpg') }})">
    <h1>
        About Us
    </h1>
</header>    

<section class="ftco-section services-section bg-light" style="margin-top: 100px">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon"><span class="flaticon-map-of-roads"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Berita</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon"><span class="flaticon-yatch"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Budaya</h3>
            <p>	203 Fake St. Mountain View, San Francisco, California, USA</p>
          </div>
        </div>      
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon"><span class="flaticon-around"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Kuliner</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>    
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon"><span class="flaticon-compass"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Wisata</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>      
      </div>
    </div>
  </div>
</section>
   
<section class="ftco-counter img" id="section-counter">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex mt-5">
               <img src="{{ $setting->logo() }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                <h2 class="mb-4">{{ $setting->name }}</h2>
                <p>{{ $setting->description }}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center py-5 bg-light mb-4">
                  <div class="text">
                    <strong class="number" data-number="30">{{ $count['news'] }}</strong>
                    <span>Berita</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center py-5 bg-light mb-4">
                  <div class="text">
                    <strong class="number" data-number="200">{{ $count['culture'] }}</strong>
                    <span>Budaya</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center py-5 bg-light mb-4">
                  <div class="text">
                    <strong class="number" data-number="2500">{{ $count['culinary'] }}</strong>
                    <span>Kuliner</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center py-5 bg-light mb-4">
                  <div class="text">
                    <strong class="number" data-number="40">{{ $count['tour'] }}</strong>
                    <span>Wisata</span>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
@endsection