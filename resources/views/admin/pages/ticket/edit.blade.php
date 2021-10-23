@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">Edit Tiket</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.tickets.update', $item->id) }}" method="post" enctype="multipart/form-data">
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
                            <label for="price">Harga</label>
                            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" id="price" value="{{ $item->price ?? old('price') }}">
                            @error('price')
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
                            <a href="{{ route('admin.tickets.index') }}" class="btn btn-warning">Batal</a>
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection