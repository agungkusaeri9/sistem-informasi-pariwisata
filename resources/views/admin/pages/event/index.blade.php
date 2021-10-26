@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h6>Data Event</h6>
                        <a href="{{ route('admin.events.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Event</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="table" class="table table-bordered table-hover w-100">
                        <thead>
                            <tr>
                                <th  style="width:20px">No</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Lokasi</th>
                                <th>Deskripsi</th>
                                <th>Skor</th>
                                <th class="text-center" style="width:80px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td><img src="{{ $item->image() }}" alt="" class="img-fluid" style="height: 80px;width:80px"></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->start_date->translatedFormat('d/m/Y') }}</td>
                                <td>{{ $item->end_date->translatedFormat('d/m/Y') }}</td>
                                <td>{{ $item->location }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->score($item->category_id,$item->id) }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.events.edit',$item->id) }}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('admin.events.destroy',$item->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/sbadmin2/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/sbadmin2/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<!-- Toastr -->
<link rel="stylesheet" href="{{ asset('assets/sbadmin2/toastr/toastr.min.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('assets/sbadmin2/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/sbadmin2/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/sbadmin2/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/sbadmin2/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/sbadmin2/toastr/toastr.min.js') }}"></script>
@include('admin.layouts.partials.toast')
<script>
    $(function () {
      $('#table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
        columnDefs: [
            { orderable: false, targets: 0 }
        ],
      });
    });
</script>
@endpush