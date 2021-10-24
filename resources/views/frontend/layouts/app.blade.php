<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pariwisata Pidie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/toastr/toastr.min.css') }}">
    @stack('styles')
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container" style="border-radius: 15px;">
        <a class="navbar-brand" href="index.html"><span style="font-size: 16px;">LOGO</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Beranda</a></li>
            <li class="nav-item"><a href="{{ route('news.index') }}" class="nav-link">Berita</a></li>
            <li class="nav-item"><a href="{{ route('tour.index') }}" class="nav-link">Wisata</a></li>
            <li class="nav-item"><a href="{{ route('culinary.index') }}" class="nav-link">Kuliner</a></li>
            <li class="nav-item"><a href="{{ route('culture.index') }}" class="nav-link">Kebudayaan</a></li>
            <li class="nav-item"><a href="{{ route('event.index') }}" class="nav-link">Acara</a></li>
            <li class="nav-item dropdown">
              <a href="javascript:void(0)" class="nav-link">Galeri</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route('gallery.index') }}">Foto</a>
                <a class="dropdown-item" href="{{ route('videos.index') }}">Video</a>
              </div>
            </li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Kontak</a></li>
            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">Tentang</a></li>
            <li class="nav-item cta" ><a href="{{ route('login') }}" class="nav-link " style="border-radius: 15px; ">Login</a></li>

          </ul>
        </div>
      </div>
    </nav>

    <div>
        @yield('content')
    </div>

    <x-Footer></x-Footer>
      
    
  
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/aos.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('assets/frontend/js/google-map.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    <script src="{{ asset('assets/frontend/toastr/toastr.min.js') }}"></script>
    @if (session('success'))
    <script>
        toastr.success('{{ session('success') }}', 'Success !')
    </script>
@endif
    @stack('scripts')
      <script>
        $(function() {
          let now   = '<?= $_SERVER["REQUEST_URI"]; ?>';
          let link  = $('.nav-link');
          $.each(link,function(i,j) {
            if (now == '/pariwisata/'+j.attributes.href.value) {
              j.parentElement.classList.add('active');
            }
          });
        })
      </script>
    </body>
  </html>