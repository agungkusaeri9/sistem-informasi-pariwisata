@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">Tambah Berita</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}">
                            @error('title')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="text">Isi</label>
                            <textarea name="text" id="text" cols="30" rows="3" class="form-control @error('text') is-invalid @enderror">{{ old('text') }}</textarea>
                            @error('text')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
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
                            <a href="{{ route('admin.news.index') }}" class="btn btn-warning">Batal</a>
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
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
@endpush
@push('scripts')
<!-- Summernote -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(function(){
        $('#text').summernote({
            height:400
        })
    })
</script>
@endpush