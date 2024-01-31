<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('konveksi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_distributor');
            $table->string('nama_umkm');
            $table->text('alamat_distributor');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->string('no_handphone');
            $table->string('email');
            $table->string('jenis_vendor');
            $table->string('kategori_vendor');
            $table->integer('jumlah_stock');
            $table->decimal('harga_pricelist', 10, 2);
            $table->string('gambar_produk')->nullable();
            $table->string('video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konveksi');
    }
};
