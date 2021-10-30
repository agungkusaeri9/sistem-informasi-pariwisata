@extends('frontend.layouts.app')
@section('content')
<!-- Header -->
<header class="text-center">
    <h1>
        Explore the World,
        <br>
        As Easy One Click
    </h1>
    <p class="mt-3">
        You will be see beautiful
        <br>
        moment you never see before
    </p>
    <a href="#" class="btn btn-get-started px-4 mt-4">
        Get Started
    </a>
</header>

<main>
    <div class="container" data-aos="zoom-in">
        <section class="section-stats row justify-content-center " id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>{{ $count['event'] }}</h2>
                <p>Event</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>{{ $count['culinary'] }}</h2>
                <p>Kuliner</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>{{ $count['culture'] }}</h2>
                <p>Kebudayaan</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>{{ $count['ticket'] }}</h2>
                <p>Tiket</p>
            </div>
        </section>
    </div>

    <section class="section-popular" id="popular">
        <div class="continer">
            <div class="row">
                <div class="col text-center section-popular-heading" data-aos="fade-up" data-aos-duration="2000">
                    <h2>Wisata Populer</h2>
                    <p>Something that you never try
                        <br>
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
                        style="background-image: url({{ $tour->image() }})">
                        <div class="travel-country">{{ $tour->location }}</div>
                        <div class="travel-location">{{ $tour->name }}</div>
                        <div class="travel-button mt-auto">
                            <a href="#" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- kuliner --}}
    <section class="section-popular" id="popular" style="margin-top: 20px;padding-top:0px;">
        <div class="continer">
            <div class="row">
                <div class="col text-center section-popular-heading" data-aos="fade-up" data-aos-duration="2000">
                    <h2>Kuliner</h2>
                    <p>Rasakan Cita Rasa Masakan Aceh
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
                        style="background-image: url({{ $culinary->image() }})">
                        <div class="travel-country">{{ $culinary->location }}</div>
                        <div class="travel-location">{{ $culinary->name }}</div>
                        <div class="travel-button mt-auto">
                            <a href="#" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- akhir kuliner --}}

    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h2>Our Networks</h2>
                    <p>Companies are trusted us
                        <br> more than just a trip
                    </p>
                </div>
                <div class="col-md-8 text-center" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="{{ asset('assets/frontend1/images/logo.jpg') }}" />
                </div>
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
                    <div class="card card-testimonial text-center" style="max-height: 700px">
                        <div class="testimonial-content">
                            <img src="{{ asset('assets/frontend1/images/person_1.jpg') }}" alt="User" class="mb-4 rounded-circle img-fluid">
                            <h3 class="mb-4">{{ $inbox->name }}</h3>
                            <p class="testimonial">
                                " {{ $inbox->text }} "
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip To Nusa Penida
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                        I Need Help
                    </a>
                    <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
