<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Http\Resources\TicketResource;

class TicketController extends Controller
{
    public function index(){
        $data = Ticket::orderByRaw("FIELD(kategori, 'kritis', 'tinggi', 'sedang', 'rendah')")
              ->orderBy('keterangan', 'asc')
              ->get();

        return response()->json([
            'data' => TicketResource::collection($data)
        ]);
    }

    public function countAll(){
        $count = Ticket::count();
        $open = Ticket::where('keterangan', 'open')->count();
        $closed = Ticket::where('keterangan', 'closed')->count();
        return response()->json([
            'total' => $count,
            'open' => $open,
            'closed' => $closed
        ]);
    }

    public function ticketById($id){
        $ticket = Ticket::where('id', $id)->first();

        if (!$ticket) {
            return response()->json([
                'message' => 'Keluhan tidak ditemukan'
            ], 404);
        }

        return new TicketResource($ticket);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama_pelapor' => 'required|string|max:50',
            'email_pelapor' => 'required|email',
            'sektor' => 'required|string|max:50',
            'keluhan' => 'required',
            'kategori',
        ]);

        $validatedData['kategori'] = $this->determineKategori($validatedData['keluhan']);
        // dd($validatedData);
        
        Ticket::create($validatedData);
        return response()->json([
            'message' => 'Laporan berhasil disimpan',
        ], 201);   
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_pelapor' => 'sometimes|required|string|max:255',
            'email_pelapor' => 'sometimes|required|email|max:255',
            'sektor' => 'sometimes|required|string|max:255',
            'keluhan' => 'sometimes|required|string|max:255',
            'keterangan' => 'sometimes|required|string|max:255',
        ]);

        $keluhan = Ticket::find($id);

        if (!$keluhan) {
            return response()->json([
                'message' => 'Keluhan tidak ditemukan'
            ], 404);
        }

        $keluhan->update($request->all());

        return response()->json([
            'message' => 'Keluhan berhasil diperbarui',
            'keluhan' => $keluhan
        ], 200);
    }

    public function destroy($id){
        $data = Ticket::find($id);

        if (!$data) {
            return response()->json([
                'message' => 'Keluhan tidak ditemukan'
            ], 404);
        }

        $data->delete();

        return response()->json([
            'message' => 'Keluhan berhasil dihapus'
        ], 200);
    }

    private function determineKategori($keluhan)
    {
        $keluhan = strtolower($keluhan);

        if (strpos($keluhan, 'server down') !== false || strpos($keluhan, 'server mati') !== false || strpos($keluhan, 'listrik mati') !== false || strpos($keluhan, 'listrik padam') !== false || strpos($keluhan, 'database utama rusak') !== false || strpos($keluhan, 'kebocoran data') !== false || strpos($keluhan, 'gangguan wi-fi') !== false || strpos($keluhan, 'jaringan mati') !== false) {
            return 'kritis';
        } elseif (strpos($keluhan, 'internet lambat') !== false || strpos($keluhan, 'email delay') !== false || strpos($keluhan, 'aplikasi crash') !== false) {
            return 'tinggi';
        } elseif (strpos($keluhan, 'komputer mati') !== false || strpos($keluhan, 'laptop mati') !== false || strpos($keluhan, 'proyektor') !== false || strpos($keluhan, 'layar monitor') !== false || strpos($keluhan, 'keyboard rusak') !== false || strpos($keluhan, 'printer tidak berfungsi') !== false) {
            return 'sedang';
        } else {
            return 'rendah';
        }
    }
}
