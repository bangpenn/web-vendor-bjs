<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Distributor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_distributor',
        'nama_umkm',
        'alamat_distributor',
        'kota',
        'provinsi',
        'kode_pos',
        'no_handphone',
        'email',
        'jenis_vendor',
        'kategori_vendor',
        'jumlah_stock',
        'harga_pricelist',
        'gambar_produk',
        'video'
    ];
}

