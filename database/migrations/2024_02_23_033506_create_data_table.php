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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('nama_distributor');
            $table->string('nama_umkm');
            $table->string('alamat_distributor');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->string('no_handphone');
            $table->string('email_distributor');
            $table->string('jenis_vendor');
            $table->string('kategori_vendor')->nullable();
            $table->integer('jumlah_stock');
            $table->decimal('harga_pricelist', 8, 2);
            $table->longText('file_path')->nullable();
            $table->longText('video_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
