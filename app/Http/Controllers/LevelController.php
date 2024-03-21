<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LevelModel;
use App\DataTables\LevelDataTable;

class LevelController extends Controller
{
    public function index(LevelDataTable $dataTable)
    {
        return $dataTable->render('level.index');
    }

    public function create()
    {
        return view('level.create');
    }

    public function store(Request $request)
    {
        LevelModel::create([
            'level_kode' => $request->kodeLevel,
            'level_nama' => $request->namaLevel,
        ]);
        return redirect('/level');
    }

    public function ubah($id)
    {
        $level = LevelModel::find($id);
        return view('level.ubah', compact('level'));
    }

    public function ubah_simpan($id, Request $request)
    {
        $level = LevelModel::find($id);
        $level->level_kode = $request->kodeLevel;
        $level->level_nama = $request->namaLevel;
        $level->save();
        return redirect('/level');
    }

    public function hapus($id)
    {
        $level = LevelModel::find($id);
        $level->delete();
        return redirect('/level');
    }
}
