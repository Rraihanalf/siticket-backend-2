<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PeminjamResource;
use App\Models\Barang;
use App\Models\Peminjam;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function index(){
        $data = Peminjam::with('barang')->get();

        return response()->json([
            'data' => $data
        ]);
    }

    public function approved($id){
        $peminjaman = Peminjam::with('barang')->findOrFail($id);

        if ($peminjaman->status_pinjam == 'waiting') {
            
            $peminjaman->status_pinjam = 'approved';
            $peminjaman->save();

            $barang = Barang::where('kode_barang', $peminjaman->kode_barang)->first();

            if ($barang) {
                $barang->quantity -= $peminjaman->quantity;
                
                if ($barang->quantity <= 0) {
                    $barang->quantity = 0; // Pastikan quantity tidak negatif
                    $barang->status_barang = 'closed'; // Update status barang menjadi closed
                }
                
                $barang->save();
            }

            $data = Peminjam::with('barang')->findOrFail($id);

            return response()->json([
                'message' => 'Peminjaman telah disetujui.',
                'data' => $data
            ], 200);
        }

        return response()->json([
            'message' => 'Peminjaman tidak dalam status waiting.',
        ], 400);           
    }

    public function returned($id){
        $peminjaman = Peminjam::with('barang')->findOrFail($id);

        if ($peminjaman->status_pinjam == 'approved') {
            $peminjaman->status_pinjam = 'returned';
            $peminjaman->save();

            $barang = Barang::where('kode_barang', $peminjaman->kode_barang)->first();

            if ($barang) {
                $barang->quantity += $peminjaman->quantity;

                if ($barang->quantity > 0) {
                    $barang->status_barang = 'open';
                }
                
                $barang->save();
            }

            $data = Peminjam::with('barang')->findOrFail($id);

            return response()->json([
                'message' => 'Barang telah dikembalikan.',
                'data' => $data
            ], 200);
        }

        return response()->json([
            'message' => 'Barang belum disetujui untuk dipinjam.',
        ], 400);
    }

    public function store(Request $request){
        $request->validate([
            'nama_peminjam' => 'required',
            'email_peminjam' => 'required|email',
            'kode_barang' => 'required|exists:barangs,kode_barang',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'quantity' => 'required|integer',
        ]);

        // dd($request->all());

        $peminjam = Peminjam::create([
            'nama_peminjam' => $request->nama_peminjam,
            'email_peminjam' => $request->email_peminjam,
            'kode_barang' => $request->kode_barang,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'quantity' => $request->quantity,
            'status' => 'waiting',
        ]);

        return response()->json([
            'message' => 'Data berhasil disimpan.',
            'data' => $peminjam
        ], 201);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_peminjam' => 'required',
            'email_peminjam' => 'required|email',
            'kode_barang' => 'required|exists:barangs,kode_barang',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'quantity' => 'required|integer',
        ]);

        $peminjam = Peminjam::findOrFail($id);

        if ($peminjam->status_pinjam == 'approved') {
            $peminjam->status_pinjam = 'waiting';
        }

        $peminjam->update([
            'nama_peminjam' => $request->nama_peminjam,
            'email_peminjam' => $request->email_peminjam,
            'kode_barang' => $request->kode_barang,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'quantity' => $request->quantity,
        ]);

        return response()->json([
            'message' => 'Data berhasil diperbarui.',
            'data' => $peminjam
        ], 200);
    }

    public function destroy($id){
        $pinjam = Peminjam::find($id);

        if ($pinjam) {
            $pinjam->delete();

            return response()->json([
                'message' => 'Peminjam berhasil dihapus.',
                'data' => $pinjam
            ], 200);
        }

        return response()->json([
            'message' => 'Peminjam tidak ditemukan.',
        ], 404);
    }
}
