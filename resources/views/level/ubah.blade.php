@extends('layouts.app')

@section('subtitle', 'Level User')
@section('content_header_title', 'Level User')
@section('content_header_subtitle', 'Edit')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Level User</h3>
        </div>

        <form method="post" action="{{ url('/level/' . $level->level_id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="card-body">
                <div class="form-group">
                    <label for="kodeLevel">Kode Level User</label>
                    <input type="text" class="form-control" id="kodeLevel" name="kodeLevel"
                        placeholder="Masukkan Kode Level User" value="{{ $level->level_kode }}">
                </div>
                <div class="form-group">
                    <label for="namaLevel">Nama Level User</label>
                    <input type="text" class="form-control" id="namaLevel" name="namaLevel"
                        placeholder="Masukkan Nama Level User" value="{{ $level->level_nama }}">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
