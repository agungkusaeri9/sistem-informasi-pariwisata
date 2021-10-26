@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h6>Data Kategori</h6>
                    </div>
                </div>
                <div class="card-body">
                    <table id="table" class="table table-bordered table-hover w-100">
                        <thead>
                            <tr>
                                <th  style="width:20px">No</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Slug</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ $item->image() }}" alt="" height="100" width="100">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>
                                    <a href="{{ route('admin.categories.edit', $item->id) }}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
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