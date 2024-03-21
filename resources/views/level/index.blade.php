@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'Level User')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Level User')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <span>Tambahkan Level User Baru</span>
                <a href="{{ url('level/create') }}" class="btn btn-primary float-right">Tambah</a>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
