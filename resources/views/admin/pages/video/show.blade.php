@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h6>Detail Video</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table" class="table table-borderless table-striped w-100">
                            <tr>
                                <th>Nama</th>
                                <td>{{ $item->name }}</td>
                            </tr>
                            <tr>
                                <th>Kategori</th>
                                <td>{{ $item->category->name }}</td>
                            </tr>
                            <tr>
                                <th>Lokasi</th>
                                <td>{{ $item->location }}</td>
                            </tr>
                            <tr>
                                <th>Url</th>
                                <td>{{ $item->url }}</td>
                            </tr>
                            <tr>
                                <th>Aksi</th>
                                <td>
                                    <a href="{{ route('admin.videos.edit',$item->id) }}" class="btn btn-info btn-sm">Edit</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ $item->url() }}" allowfullscreen></iframe>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection