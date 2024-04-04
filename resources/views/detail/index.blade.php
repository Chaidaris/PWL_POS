@extends('layouts.template')
@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
            <a class="btn btn-sm btn-primary mt-1" href="{{ url('detail/create') }}">Tambah</a>
        </div>
    </div>
    <div class="card-body">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Filter</label>
                    <div class="col-3">
                        <select type="text" class="form-control" id="barang_id" name="barang_id" required>
                            <option value="">- Semua -</option>
                            @foreach($barang as $item)
                            <option value="{{ $item->barang_id }}">{{ $item->barang_nama }}</option>
                            @endforeach
                        </select>
                        <small class="form-text text-muted">Nama Barang</small>
                    </div>
                    <div class="col-3">
                        <select type="text" class="form-control" id="penjualan_id" name="penjualan_id" required>
                            <option value="">- Semua -</option>
                            @foreach($penjualan as $item)
                            <option value="{{ $item->penjualan_id }}">{{ $item->penjualan_kode }}</option>
                            @endforeach
                        </select>
                        <small class="form-text text-muted">Kode penjualan</small>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped table-hover table-sm" id="table_detail">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode penjualan</th>
                    <th>Jumlah Barang</th>
                    <th>Total Harga</th>
                    <th>Nama Barang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection
@push('css')
@endpush
@push('js')
<script>
    $(document).ready(function() {
        var dataDetail = $('#table_detail').DataTable({
            serverSide: true,
            ajax: {
                "url": "{{ url('detail/list') }}",
                "dataType": "json",
                "type": "POST",
                "data": function(d) {
                    d.barang_id = $('#barang_id').val();
                    d.penjualan_id = $('#penjualan_id').val();
                }
            },
            columns: [{
                data: "DT_RowIndex",
                className: "text-center",
                orderable: false,
                searchable: false
            }, {
                data: "penjualan.penjualan_kode",
                className: "",
                orderable: false,
                searchable: false
            },{
                data: "jumlah",
                className: "",
                orderable: true,
                searchable: true
            }, {
                data: "harga",
                className: "",
                orderable: true,
                searchable: true
            }, {
                data: "barang.barang_nama",
                className: "",
                orderable: false,
                searchable: false
            }, {
                data: "action",
                className: "",
                orderable: false,
                searchable: false
            }]
        });
        $('#penjualan_id').on('change', function() {
            dataDetail.ajax.reload();
        });

        $('#barang_id').on('change', function() {
            dataDetail.ajax.reload();
        });
    });
</script>
@endpush
