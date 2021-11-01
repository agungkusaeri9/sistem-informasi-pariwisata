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
                        <iframe src="https://www.google.com/maps/embed?pb={{ $setting->map }}" height="200" style="border:0;" allowfullscreen="" loading="lazy" class="w-100"></iframe>
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