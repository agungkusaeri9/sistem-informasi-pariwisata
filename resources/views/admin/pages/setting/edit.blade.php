@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">Pengaturan Situs</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.setting.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $item->name ?? old('name') }}">
                            @error('name')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" id="description" cols="30" rows="3" class="form-control @error('description') is-invalid @enderror">{{ $item->description ?? old('description') }}</textarea>
                            @error('description')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea name="address" id="address" cols="30" rows="3" class="form-control @error('address') is-invalid @enderror">{{ $item->address ?? old('address') }}</textarea>
                            @error('address')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="map">Map</label>
                            <textarea name="map" id="map" cols="30" rows="3" class="form-control @error('map') is-invalid @enderror">{{ $item->map ?? old('map') }}</textarea>
                            @error('map')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Nomor Hp</label>
                            <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" value="{{ $item->phone_number ?? old('phone_number') }}">
                            @error('phone_number')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $item->email ?? old('email') }}">
                            @error('email')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="twitter_link">Link Twitter</label>
                            <input type="text" name="twitter_link" class="form-control @error('twitter_link') is-invalid @enderror" id="twitter_link" value="{{ $item->twitter_link ?? old('twitter_link') }}">
                            @error('twitter_link')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="facebook_link">Link Facebook</label>
                            <input type="text" name="facebook_link" class="form-control @error('facebook_link') is-invalid @enderror" id="facebook_link" value="{{ $item->facebook_link ?? old('facebook_link') }}">
                            @error('facebook_link')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="instagram_link">Link Instagram</label>
                            <input type="text" name="instagram_link" class="form-control @error('instagram_link') is-invalid @enderror" id="instagram_link" value="{{ $item->instagram_link ?? old('instagram_link') }}">
                            @error('instagram_link')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="dilihat">Dilihat</label>
                            <input type="number" value="{{ $item->visitor }}" disabled class="form-control">
                        </div>
                        <div class="form-group form-row">
                            <div class="col-12">
                                <label for="">Logo</label>
                            </div>
                            <div class="col-3">
                                <img src="{{ $item->logo() }}" alt="" style="height: 80px" class="w-100">
                            </div>
                            <div class="col-9">
                                <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror" id="logo" value="{{ old('logo') }}">
                                @error('logo')
                                    <div class="is-invalid">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('styles')
<!-- Toastr -->
<link rel="stylesheet" href="{{ asset('assets/sbadmin2/toastr/toastr.min.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('assets/sbadmin2/toastr/toastr.min.js') }}"></script>
@include('admin.layouts.partials.toast')
@endpush