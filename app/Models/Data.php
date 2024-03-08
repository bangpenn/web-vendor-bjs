<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'data';

    public $uploads = 'public/img';

    protected $fillable = [
        'nama_distributor',
        'nama_umkm',
        'alamat_distributor',
        'kota',
        'provinsi',
        'kode_pos',
        'no_handphone',
        'email_distributor',
        'jenis_vendor',
        'kategori_vendor',
        'jumlah_stock',
        'harga_pricelist',
        'image_path',
        'video_path',
        'file_path'
    ];

    // Method untuk mendapatkan path lengkap gambar
    public function getImageAttribute()
    {
        return $this->file_path ? asset('storage/' . $this->file_path) : null;
    }

}
