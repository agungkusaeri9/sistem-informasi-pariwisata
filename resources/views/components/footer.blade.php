<div>
    <footer class="ftco-footer ftco-footer-2 ftco-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Note : </h2>
                <p> Jika terdapat kendala sistem Error dan kesulitan dalam mengaplikasikan Website Wisata Pidie, silahkan menghubungi Admin melalui via Contact yang tersedia. Terimakasih...</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                  <li class="ftco-animate"><a href="{{ $setting->twitter_link }}"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="{{ $setting->facebook_link }}"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="{{ $setting->instagram_link }}"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-5">
                <h2 class="ftco-heading-2"> Services Infromation</h2>
                <ul class="list-unstyled">
                    <li>
                      <a href="{{ route('contact') }}">Kontak</a>
                    </li>
                    <li>
                      <a href="{{ route('about') }}">Tentang</a>
                    </li>
                    @foreach ($categories as $category)
                    <li>
                      <a href="@if($category->slug === 'wisata') {{ route('tour.index') }} @elseif($category->slug === 'kuliner') {{ route('culinary.index') }} @elseif($category->slug === 'kebudayaan') {{ route('culture.index') }} @elseif($category->slug === 'berita') {{ route('news.index') }} @elseif($category->slug === 'event') {{ route('event.index') }} @elseif($category->slug === 'tiket') {{ route('ticket.index') }} @endif">{{ Str::title($category->name) }}</a>
                    </li>
                    @endforeach
                </ul>
              </div>
            </div>
          
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Ada Pertanyaan?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">{{ $setting->address }}</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{ $setting->phone_number }}</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{ $setting->email }}</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <p>Copyright &copy; {{ \Carbon\Carbon::now()->format('Y') }} All rights reserved <i aria-hidden="true"></i> by <a>{{ $setting->name }}</a></p>
            </div>
          </div>
        </div>
    </footer>
</div>