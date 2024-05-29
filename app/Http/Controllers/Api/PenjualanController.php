<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetailModel; // Add missing import statement
use Illuminate\Support\Facades\Validator;

class PenjualanController extends Controller
{
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jumlah' => 'required',
            'harga' => 'required',
            'barang_id' => 'required',
            'penjualan_id' => 'required'
            
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create penjualan
        $penjualan = DetailModel::create([
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'barang_id' => $request->barang_id,
            'penjualan_id' => $request->penjualan_id,
            'image' => $request->image->hashName()
        ]);

        if($penjualan) {
            return response()->json([
                'success' => true,
                'message' => 'Penjualan created successfully',
                'penjualan' => $penjualan
            ], 201);
        }

        return response()->json([
            'success' => false,
            'message' => 'Penjualan creation failed'
        ], 409);
    }
}
