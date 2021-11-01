@extends('frontend.layouts.app')
@section('content')
<header class="text-center" style="margin-bottom: -70px;background-image: url({{ asset('assets/frontend/images/bg_2.jpg') }})">
    <h1>
        {{ $item->name }}
    </h1>
</header>    
<main>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Galeri Video
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>{{ $item->name }}</h1>
                        <p>
                            {{ $item->location }}
                        </p>
                        <div class="gallery">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $item->url() }}" allowfullscreen></iframe>
                              </div>
                        </div>
                        <h2>Deskripsi</h2>
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Informasi</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Lokasi</th>
                                <td width="50%" class="text-right">
                                    {{ $item->location }}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Tanggal Dibuat</th>
                                <td width="50%" class="text-right">
                                    {{ $item->created_at->translatedFormat('d F Y') }}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Tanggal Diupdate</th>
                                <td width="50%" class="text-right">
                                    {{ $item->updated_at->translatedFormat('d F Y') }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <span class="p-2 btn btn-block rounded-0 btn-secondary mt-3 py-2">Wisata</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/frontend/xzoom/xzoom.min.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('assets/frontend/xzoom/xzoom.min.js') }}"></script>
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
@endpush