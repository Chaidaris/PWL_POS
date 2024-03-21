@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'Level User')
@section('content_header_title', 'Level User')
@section('content_header_subtitle', 'Create')

{{-- Content body: main page content --}}
@section('content_body')
    <div class="container">
        <div class="card">
            <div class="card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat Level User Baru</h3>
            </div>
            <form method="POST" action="../level">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeLevel">Kode Level User</label>
                        <input type="number" class="form-control" id="kodeLevel" name="kodeLevel" placeholder="Masukkan Kode Level User">
                    </div>
                    <div class="form-group">
                        <label for="namaLevel">Nama Level User</label>
                        <input type="text" class="form-control" id="namaLevel" name="namaLevel" placeholder="Masukkan Nama Level User">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection