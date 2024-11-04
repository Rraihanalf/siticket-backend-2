<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_peminjam',
        'email_peminjam',
        'kode_barang',
        'tanggal_pinjam',
        'tanggal_kembali',
        'quantity',
        'status_pinjam'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'kode_barang', 'kode_barang');
    }
}
