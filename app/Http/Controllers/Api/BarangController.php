<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Http\Resources\BarangResource;

class BarangController extends Controller
{
    public function index(){
        $data = Barang::all();

        return response()->json([
            // 'data' => BarangResource::collection($data)
            'data' => $data
        ]);
    }

    public function barangById($id){
        $data = Barang::find($id);

        return response()->json([
            'data' => $data
        ]);
    }

    public function simpan(Request $request){
        $validatedData = $request->validate([
            'corpu_area' => 'required|string',
            // 'kode_barang' => 'required|string|unique:barangs,kode_barang',
            'name_model' => 'required|string',
            'type_model' => 'required|string',
            'manufacture' => 'nullable|string',
            'group' => 'required|string',
            'sub_group' => 'nullable|string',
            'condition' => 'required|string',
            'serial_number' => 'nullable|string',
            'deskripsi' => 'nullable|string',
        ]);

        $lastBarang = Barang::where('kode_barang', 'LIKE', 'TJG%')->orderBy('kode_barang', 'desc')->first();
    
        if ($lastBarang) {
            $lastNumber = intval(substr($lastBarang->kode_barang, 3));
            $newNumber = $lastNumber + 1; 
        } else {
            $newNumber = 1; 
        }
    
        $newKodeBarang = 'TJG' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);
    
        $validatedData['kode_barang'] = $newKodeBarang;

        // dd($validatedData);

        $barang = Barang::create($validatedData);
    
        return response()->json([
            'message' => 'Data berhasil disimpan.',
            'data' => $barang
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'corpu_area' => 'required|string',
            'name_model' => 'required|string',
            'type_model' => 'required|string',
            'manufacture' => 'required|string',
            'group' => 'required|string',
            'sub_group' => 'sometimes|required|string',
            'condition' => 'required|string',
            'serial_number' => 'nullable|string',
            'deskripsi' => 'nullable|string',
        ]);
        
        // dd($validatedData);
        $barang = Barang::findOrFail($id);

        $barang->update($validatedData);

        return response()->json([
            'message' => 'Data berhasil diperbarui.',
            'data' => $barang
        ], 200);
    }

    public function destroy($id){
        $barang = Barang::find($id);

        if ($barang) {
            $barang->delete();

            return response()->json([
                'message' => 'Barang berhasil dihapus.',
                'data' => $barang
            ], 200);
        }

        return response()->json([
            'message' => 'Barang tidak ditemukan.',
        ], 404);
    }

}
