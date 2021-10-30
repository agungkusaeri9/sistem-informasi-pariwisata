@extends('frontend.layouts.app')
@section('content')
<section class="ftco-section ftco-no-pb testimony-section" style="background-image: url({{ asset('assets/frontend/images/bg_1.jpg') }});">
    <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
        <h2 class="mb-4">PARIWISATA ACEH PIDIE</h2>
      </div>
    </div>
    <div class="row ftco-animate" >
      <div class="col-md-12 testimonial">
        <div class="carousel-testimony owl-carousel ftco-owl">
          <div class="item">
            <div class="testimony-wrap img" style="background-image: url({{ asset('assets/frontend/images/gedung.png') }});">
                <div class="overlay"></div>
              <div class="text">
                <p class="mb-4">Temukan Destinasi Wisata Anda Di Kaputen Pidie</p>
                <p class="name">Pidie Convention Center</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap" style="background-image: url({{ asset('assets/frontend/images/pidie.png') }});">
                <div class="overlay"></div>
              <div class="text">
                <p class="mb-4">Terdapat Banyak Tempat Menarik Untuk Dikunjungi</p>
                <p class="name"></p>
                <span class="position"></span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap" style="background-image: url({{ asset('assets/frontend/images/seudati.jpg') }});">
                <div class="overlay"></div>
              <div class="text">
                <p class="mb-4">Keberagaman Budaya Dan Sejarah Yang Terjaga Dengan Baik</p>
                <p class="name"></p>
                <span class="position"></span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap" style="background-image: url({{ asset('assets/frontend/images/kuliner.jpeg') }});">
                <div class="overlay"></div>
              <div class="text">
                <p class="mb-4">Terdapat Berbagai Kuliner Khas Pidie</p>
                <p class="name"></p>
                <span class="position"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
                <div class="col-md-12">
                
                </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <h2 class="mb-4">Tempat Terbaik Wisata Pidie</h2>
        <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
      </div>
    </div>
        <div class="row justify-content-center">
            @foreach ($tours as $tour)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="project">
                    <div class="img">
                        <img src="{{ $tour->image() }}" class="img-fluid" alt="Colorlib Template">
                    </div>
                    <div class="text">
                        <span>{{ $tour->created_at->translatedFormat('d/m/Y H:i:s') }}</span>
                        <h3><a href="">{{ $tour->name }}</a></h3>
                        <div class="star d-flex clearfix">
                            <div class="mr-auto float-left">
                              <?php for($i = 0;$i < floor($tour->score($tour->category_id,$tour->id));$i++): ?>
                              <span class="ion-ios-star"></span>
                            <?php endfor?>
                            </div>
                            <div class="float-right">
                                <span class="rate"><span>({{ $tour->score($tour->category_id,$tour->id) }})</a></span>
                            </div>
                        </div>
                    </div>
                    <a href="{{ $tour->image() }}" class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="icon-expand"></span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Kebudayaan</h2>
      </div>
    </div>
    <div class="row d-flex">
      @foreach ($cultures as $culture)
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
          <a href="" class="block-20 w-100">
            <img src="{{ $culture->image() }}" alt="" class="w-100">
          </a>
          <div class="text mt-3 float-right d-block">
            <div class="d-flex align-items-center pt-2 mb-4 topp">
              <div class="one">
                <span class="day">{{ $culture->created_at->translatedFormat('d') }}</span>
              </div>
              <div class="two">
                <span class="yr">{{ $culture->created_at->translatedFormat('Y') }}</span>
                <span class="mos">{{ $culture->created_at->translatedFormat('m') }}</span>
              </div>
            </div>
            <h3 class="heading"><a href="">{{ $culture->name }}</a></h3>
            <div class="star d-flex clearfix">
              <div class="mr-auto float-left">
                <?php for($i = 0;$i < floor($culture->score($culture->category_id,$culture->id));$i++): ?>
                  <span class="ion-ios-star"></span>
                <?php endfor?>
              </div>
              <div class="float-right">
                <span class="rate"><span>({{ $culture->score($culture->category_id,$culture->id) }})</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <hr>

  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Kuliner</h2>
      </div>
    </div>

    <div class="row d-flex">
      @foreach ($culinaries as $culinary)
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
          <a href="" class="block-20 w-100">
            <img src="{{ $culinary->image() }}" alt="" class="w-100">
          </a>
          <div class="text mt-3 float-right d-block">
            <div class="d-flex align-items-center pt-2 mb-4 topp">
              <div class="one">
                <span class="day">{{ $culinary->created_at->translatedFormat('d') }}</span>
              </div>
              <div class="two">
                <span class="yr">{{ $culinary->created_at->translatedFormat('Y') }}</span>
                <span class="mos">{{ $culinary->created_at->translatedFormat('m') }}</span>
              </div>
            </div>
            <h3 class="heading"><a href="">{{ $culinary->name }}</a></h3>
            <div class="star d-flex clearfix">
              <div class="mr-auto float-left">
                <?php for($i = 0;$i < floor($culinary->score($culinary->category_id,$culinary->id));$i++): ?>
                  <span class="ion-ios-star"></span>
                <?php endfor?>
              </div>
              <div class="float-right">
                <span class="rate"><span>({{ $culinary->score($culinary->category_id,$culinary->id) }})</span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<section class="ftco-counter img" id="section-counter">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 d-flex">
        <div class="img d-flex align-self-stretch" style="background-image:url({{ asset('assets/frontend/images/kab.jpg') }});"></div>
      </div>
      <div class="col-md-6 pl-md-5 py-5">
        <div class="row justify-content-start pb-3">
          <div class="col-md-12 heading-section ftco-animate">
            <h2 class="mb-4">Tentang Website</h2>
            <p>Website Pariwisata Pidie adalah sebuah portal informasi pariwisata Kabupaten Pidie. Situs ini menyediakan berbagai informasi seputar pariwisata seperti destinasi wisata, kuliner, kebudayaan dan sejarah, serta event-event terbaru yang ada di Kabupaten Pidie.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center py-5 bg-light mb-4">
              <div class="text">
                <strong class="number" data-number="{{ $count['tour'] }}">0</strong>
                <span>Destinasi Wisata</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center py-5 bg-light mb-4">
              <div class="text">
                <strong class="number" data-number="{{ $count['culinary'] }}">0</strong>
                <span>Kuliner</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center py-5 bg-light mb-4">
              <div class="text">
                <strong class="number" data-number="{{ $count['culture'] }}">0</strong>
                <span>Kebudayaan</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center py-5 bg-light mb-4">
              <div class="text">
                <strong class="number" data-number="{{ $count['gallery'] }}">0</strong>
                <span>Galeri</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
