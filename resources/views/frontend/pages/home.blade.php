@extends('frontend.layouts.app')
@section('content')
<header class="text-center" style="margin-bottom: -70px">
    <h1>
        Explore The Beautiful World
        <br />
        As Easy One Click
    </h1>
    <p class="mt-3">
        You will see beautiful
        <br />
        moment you never see before
    </p>
    <a href="javascript:void(0)" class="btn btn-get-started px-4 mt-4">
        Get started
    </a>
</header>
<main>
    <div class="container" data-aos="zoom-in">
        <section class="section-stats row justify-content-center " id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>{{ $count['news'] }}</h2>
                <p>Berita</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>{{ $count['culture'] }}</h2>
                <p>Budaya</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>{{ $count['culinary'] }}</h2>
                <p>Kuliner</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>{{ $count['tour'] }}</h2>
                <p>Wisata</p>
            </div>
        </section>
    </div>
    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Wisata Popular</h2>
                    <p>
                        Something that you never try
                        <br />
                        before in this world
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                @foreach ($tours as $tour)
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="2000">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url({{ $tour->image() }});">
                        <div class="travel-country">{{ $tour->location }}</div>
                        <div class="travel-location">{{ $tour->name }}</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('tour.show',$tour->slug) }}"
                                class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-popular" id="popular" style="margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Kuliner</h2>
                    <p>
                        Something that you never try
                        <br />
                        before in this world
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                @foreach ($culinaries as $culinary)
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="2000">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url({{ $culinary->image() }});">
                        <div class="travel-country">{{ $culinary->location }}</div>
                        <div class="travel-location">{{ $culinary->name }}</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('culinary.show',$culinary->slug) }}"
                                class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-popular" id="popular" data-aos="fade-up" data-aos-duration="2000" style="margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Budaya</h2>
                    <p>
                        Something that you never try
                        <br />
                        before in this world
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                @foreach ($cultures as $culture)
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="2000">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url({{ $culture->image() }});">
                        <div class="travel-country">{{ $culture->location }}</div>
                        <div class="travel-location">{{ $culture->name }}</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('culture.show',$culture->slug) }}"
                                class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center" data-aos="fade-up" data-aos-duration="2000">
                    <h2>They Are Loving Us </h2>
                    <p>Moments were giving them
                        <br>
                        the best experience
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-testimonial-content" id="testimonialContent">
        <div class="container">
            <div class="section-populer-travel row justify-content-center">
                @foreach ($inboxes as $inbox)
                <div class="col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="2000">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{ asset('assets/frontend/images/user.jpg') }}" alt="User" class="mb-4 rounded-circle" style="max-height: 80px">
                            <h3 class="mb-4">{{ $inbox->name }}</h3>
                            <p class="testimonial">
                                " {{ $inbox->text }} "
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section-testimonial-content" style="margin-top: 20px">
        <div class="container">
            <div class="section-populer-travel row justify-content-center">
                <div class="col-md-4">
                    <h2>{{ $latest_video->name }}</h2>
                    <h5>{{ $latest_video->category->name }}</h5>
                    <p>{{ $latest_video->description }}</p>
                </div>
                <div class="col-md-8">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ $latest_video->url() }}" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@push('styles')
<style>
    header{
        background-image: url("{{ asset('assets/frontend/images/bg_2.jpg') }}");
    }
    @media (max-width:567px){
        .stats-detail p{
            font-size: 12px;
        }
    }
</style>
<link rel="stylesheet" href="{{ asset('assets/frontend/toastr/toastr.min.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('assets/frontend/toastr/toastr.min.js') }}"></script>
@if (session('success'))
<script>
    toastr.success('{{ session('success') }}', 'Success !')
</script>
@endif
@endpush