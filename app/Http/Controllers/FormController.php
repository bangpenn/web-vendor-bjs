<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('frontend/form'); // Mengembalikan tampilan formulir
    }
    public function tampilkanForm()
    {
        return view('form');
    }

    public function simpanData(Request $request)
    {
        $validatedData = $request->validate([
            'nama-distributor' => 'required|string|max:255',
            'nama-umkm' => 'required|string|max:255',
            'alamat-distributor' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kode_pos' => 'required|string|max:255',
            'no-handphone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'jenis_vendor' => 'required|string|max:255',
            'kategori_vendor' => 'required|string|max:255',
            'jumlah_stock' => 'required|integer',
            'harga_pricelist' => 'required|numeric',
            'gambar_produk' => 'image|max:2048', // maks 2MB
            'video' => 'mimetypes:video/mp4/max:20480', // maks 20MB
            'file' => 'required|file|mimes:pdf,xlsx,xls,doc,docx|max:2048' // maks 2MB

        ]);

        // Simpan gambar produk
        if ($request->hasFile('gambar_produk')) {
            $gambar_produk = $request->file('gambar_produk')->store('public/gambar_produk');
        }

        // Simpan video
        if ($request->hasFile('video')) {
            $video = $request->file('video')->store('public/video');
        }

        // Simpan file
        if ($request->hasFile('file')) {
            $file = $request->file('file')->store('public/file');
        }

        // Simpan data ke dalam database
        Distributor::create([
            'nama_distributor' => $validatedData['nama-distributor'],
            'nama_umkm' => $validatedData['nama-umkm'],
            'alamat_distributor' => $validatedData['alamat-distributor'],
            'kota' => $validatedData['kota'],
            'provinsi' => $validatedData['provinsi'],
            'kode_pos' => $validatedData['kode_pos'],
            'no_handphone' => $validatedData['no-handphone'],
            'email' => $validatedData['email'],
            'jenis_vendor' => $validatedData['jenis_vendor'],
            'kategori_vendor' => $validatedData['kategori_vendor'],
            'jumlah_stock' => $validatedData['jumlah_stock'],
            'harga_pricelist' => $validatedData['harga_pricelist'],
            'gambar_produk' => $gambar_produk ?? null,
            'video' => $video ?? null,
            'file' => $file ?? null
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

    public function showCategory($categoryId)
    {
        $categoryProducts = Product::where('categories_id', $categoryId)->get();
        $category = Category::findOrFail($categoryId);

        // Kirim variabel $category ke tampilan blade
        return view('frontend.form', compact('categoryProducts', 'category'));
    }


}
