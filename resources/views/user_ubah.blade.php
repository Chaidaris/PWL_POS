<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ubah User</title>
    </head>
    <body>
    <form method="POST" action="/user/ubah_simpan/{{$data->user_id}}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <label>Username</label>
        <input type="text" name="username" placeholder= "Masukkan Username" value="{{ $data->username }}">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama" value="{{ $data->nama }}">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan Password">
        <br>
        <label>Level ID</label>
        <input type="text" name="level_id" placeholder="Masukkan ID Level Pengguna" value="{{ $data->level_id }}">
        <br><br>
        <input type="submit" class="btn btn-success" value="Ubah">
    </form>
    </body>