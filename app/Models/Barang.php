<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peminjam;

class Barang extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'kode_barang',
    //     'nama_barang',
    //     'status_barang',
    // ];
    protected $fillable = [
        'corpu_area', 
        'kode_barang', 
        'name_model', 
        'type_model', 
        'manufacture', 
        'group', 
        'sub_group', 
        'condition', 
        'serial_number', 
        'deskripsi',
        'quantity',
        'status_barang'
    ];

    public function peminjamans()
    {
        return $this->hasMany(Peminjam::class, 'kode_barang', 'kode_barang');
    }
}
