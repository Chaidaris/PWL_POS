<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::with('level')->get(); 
        return view('user', ['data' => $user]);
    }

    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id,
        ]);
        return redirect('/user');
    }

    public function ubah($id)
    {
        $data = UserModel::find($id);
        return view('user_ubah', ['data' => $data]);
    }

    public function ubah_simpan($id, Request $request)
    {
        $data = UserModel::find($id);
        $data->username = $request->username;
        $data->nama = $request->nama;
        $data->password = Hash::make('$request->password');
        $data->level_id = $request->level_id;
        $data->save();
        return redirect('/user');
    }

    public function hapus($id)
    {
        $data = UserModel::find($id);
        $data->delete();
        return redirect('/user');
    }



}
