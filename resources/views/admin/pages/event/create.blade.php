@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">Tambah Event</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.events.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="start_date">Tanggal Mulai</label>
                            <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" value="{{ old('start_date') }}">
                            @error('start_date')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="end_date">Tanggal Selesai</label>
                            <input type="date" name="end_date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" value="{{ old('end_date') }}">
                            @error('end_date')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="location">Lokasi</label>
                            <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" id="location" value="{{ old('location') }}">
                            @error('location')
                            <div class="is-invalid">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" id="description" cols="30" rows="3" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div id="peta" style="height:400px">

                        </div>
                        <input type="text" name="lat" hidden id="lat">
                        <input type="text" name="lng" hidden id="lng">
                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" value="{{ old('image') }}">
                            @error('image')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <a href="{{ route('admin.events.index') }}" class="btn btn-warning">Batal</a>
                            <button class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
 integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
 crossorigin=""></script>
@endpush
@push('scripts')
<script>
    $(function(){
        var mapOptions = {
            center: [4.6819643,96.518805],
            zoom: 9
        }

        var map = L.map('peta',mapOptions);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: '{{ $key }}'
        }).addTo(map);

        var popup = L.popup();
        var marker = L.marker([0, 0]).addTo(map);
        map.on('click', function(e){
            map.removeLayer(marker);
            L.marker([0,0]).addTo(map);
            var lat = e.latlng.lat;
            var lon = e.latlng.lng;
            marker = L.marker([lat, lon]).addTo(map);
            marker.bindPopup(lat + ',' + lon).openPopup();
            $('#lat').val(lat);
            $('#lng').val(lon);
        })
    })
</script>
@endpush