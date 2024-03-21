@extends('layouts.app')

@section('subtitle', 'User')
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Edit')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit User</h3>
        </div>

        <form method="post" action="{{ url('/user/' . $user->user_id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="card-body">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username"
                        placeholder="Masukkan Username" value="{{ $user->user_username }}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama User</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama User"
                        value="{{ $user->user_nama }}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password User"
                        value="{{ $user->user_password }}">
                </div>
                <div class="form-group">
                    <label for="levelId">Level ID</label>
                    <input type="number" class="form-control" id="levelId" name="levelId" placeholder="Masukkan Level ID"
                        value="{{ $user->user_level_id }}">
                </div>  
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
