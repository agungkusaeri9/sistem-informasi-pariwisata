@extends('frontend.layouts.app')
@section('content')
<header class="text-center" style="margin-bottom: -70px;background-image: url({{ asset('assets/frontend/images/bg_2.jpg') }})">
    <h1>
        Galeri Foto
    </h1>
</header>    
<section class="section-popular-content" id="popularContent">
    <div class="container">
        <div class="section-popular-travel row" style="margin-top: 80px">
            @foreach ($items as $item)
            <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="2000">
                <div class="card-travel text-center d-flex flex-column"
                    style="background-image: url({{ $item->image() }});">
                    <div class="travel-country">{{ $item->location }}</div>
                    <div class="travel-location">{{ $item->name }}</div>
                    <div class="travel-button mt-auto">
                        <a href="{{ route('gallery.show',$item->id) }}"
                            class="btn btn-travel-details px-4">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-4" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-md-12">
                {{ $items->links() }}
            </div>
        </div>
    </div>
</section>
@endsection