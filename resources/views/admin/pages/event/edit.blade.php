@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">Edit Event</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.events.update', $item->id) }}" method="post" enctype="multipart/form-data">
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
                            <label for="start_date">Tanggal Mulai</label>
                            <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" value="{{ $item->start_date->translatedFormat('Y-m-d') ?? old('start_date') }}">
                            @error('start_date')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="end_date">Tanggal Selesai</label>
                            <input type="date" name="end_date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" value="{{ $item->end_date->translatedFormat('Y-m-d') ?? old('end_date') }}">
                            @error('end_date')
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
                            <label for="location">Lokasi</label>
                            <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" id="location" value="{{ $item->location ?? old('location') }}">
                            @error('location')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group form-row">
                            <div class="col-12">
                                <label for="">Gambar</label>
                            </div>
                            <div class="col-3">
                                <img src="{{ $item->image() }}" alt="" style="height: 80px" class="w-100">
                            </div>
                            <div class="col-9">
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" value="{{ old('image') }}">
                                @error('image')
                                    <div class="is-invalid">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <a href="{{ route('admin.events.index') }}" class="btn btn-warning">Batal</a>
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection