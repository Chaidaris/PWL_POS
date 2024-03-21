@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'User')
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Create')

{{-- Content body: main page content --}}
@section('content_body')
    <div class="container">
        <div class="card">
            <div class="card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat User Baru</h3>
            </div>
            <form method="POST" action="../user">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama User</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama User">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password User">
                    </div>
                    <div class="form-group">
                        <label for="levelId">Level ID</label>
                        <input type="number" class="form-control" id="levelId" name="levelId" placeholder="Masukkan Level ID">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection