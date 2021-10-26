<div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container" style="border-radius: 15px;">
          <a class="navbar-brand" href="{{ route('home') }}"><span style="font-size: 16px;">
            <img src="{{ $setting->logo() }}" alt="" height="40px">
            </span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>
  
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="{{ route('event.index') }}" class="nav-link">Acara</a></li>
              <li class="nav-item"><a href="{{ route('news.index') }}" class="nav-link">Berita</a></li>
              <li class="nav-item dropdown">
                <a href="javascript:void(0)" class="nav-link">Galeri</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{ route('gallery.index') }}">Foto</a>
                  <a class="dropdown-item" href="{{ route('videos.index') }}">Video</a>
                </div>
              </li>
              <li class="nav-item"><a href="{{ route('culture.index') }}" class="nav-link">Kebudayaan</a></li>
              <li class="nav-item"><a href="{{ route('culinary.index') }}" class="nav-link">Kuliner</a></li>
              <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">Tiket</a></li>
              <li class="nav-item"><a href="{{ route('tour.index') }}" class="nav-link">Wisata</a></li>
              <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Kontak</a></li>
              <li class="nav-item cta" ><a href="{{ route('login') }}" class="nav-link " style="border-radius: 15px; ">Login</a></li>
  
            </ul>
          </div>
        </div>
    </nav>
</div>