<div>
  <footer class="section-footer mt-5 mb-4 border-top">
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <h5>Tentang Kami</h5>
                        <p>{{ $setting->description }}</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone={{ $setting->phone_number }}" target="_blank" class="btn btn-sm btn-success text-white"><i class="fab fa-whatsapp"></i></a></li>
                          <li class="list-inline-item"><a href="{{ $setting->twitter_link }}" target="_blank" class="btn btn-sm btn-info text-white"><i class="fab fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="{{ $setting->facebook_link }}" target="_blank" class="btn btn-sm btn-primary text-white"><i class="fab fa-facebook"></i></a></li>
                          <li class="list-inline-item"><a href="{{ $setting->instagram_link }}" target="_blank" class="btn btn-sm btn-secondary text-white"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3">
                        <h5>Kontak Kami</h5>
                        <ul class="list-unstyled">
                            <li>{{ $setting->address }}</li>
                            <li>{{ $setting->phone_number }}</li>
                            <li>{{ $setting->email }}</li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3">
                      <h5>Kategori</h5>
                      <ul class="list-unstyled">
                        @foreach ($categories as $category)
                        <li>
                          <a href="@if($category->slug === 'wisata') {{ route('tour.index') }} @elseif($category->slug === 'kuliner') {{ route('culinary.index') }} @elseif($category->slug === 'kebudayaan') {{ route('culture.index') }} @elseif($category->slug === 'berita') {{ route('news.index') }} @elseif($category->slug === 'event') {{ route('event.index') }} @endif">{{ Str::title($category->name) }}</a>
                        </li>
                        @endforeach
                      </ul>
                    </div>
                    <div class="col-12 col-lg-3">
                        <h5>Lokasi</h5>
                        <div id="map" style="height:120px">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row border-top justify-content-center align-items-center pt-4">
            <div class="col-auto text-gray-500 font-weight-light">
                {{ $setting->created_at->format('Y') }} Copyright Noprob All rights reserved {{ $setting->name }}
            </div>
        </div>
    </div>
</footer>
</div>
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/frontend/xzoom/xzoom.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/toastr/toastr.min.css') }}">
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style>
      #map{
        height: 100px !important;
      }
    </style>
@endpush
@push('scripts')
<script src="{{ asset('assets/frontend/xzoom/xzoom.min.js') }}"></script>
<script src="{{ asset('assets/frontend/toastr/toastr.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ $key }}&callback=initMap" defer></script>
    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const uluru = { lat: -25.344, lng: 131.031 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: uluru,
          zoom:13
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }

      window.initMap = initMap;

    </script>
<script>
    $(document).ready(function() {
      $('.xzoom, .xzoom-gallery').xzoom({
        zoomWidth: 500,
        zoomHeight:300,
        title: false,
        tint: '#333',
        Xoffset: 15
      });
    });
</script>
@if (session('success'))
<script>
    toastr.success('{{ session('success') }}', 'Success !')
</script>
@endif
@endpush