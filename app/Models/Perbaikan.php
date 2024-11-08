<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perbaikan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_barang',
        'nama_pengajuan',
        'kode_barang_plat',
        'harga',
        'tanggal',
        'keterangan_kerusakan',
    ];
}
