<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormDataController extends Controller
{

    public function form()
    {
        return view('frontend/form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_distributor' => 'required',
            'nama_umkm' => 'required',
            'no_handphone' => 'required',
            'email_distributor' => 'required',
            'image_path' => 'required|mimes:jpeg,png|max:2048',
            'video_path' => 'required|mimes:mp4,mov,avi|max:102400',
            'file_path' => 'required|file|mimes:pdf,xlsx,xls,doc,docx|max:20480' // maks 2MB

        ]);

        try {
            $data = new Data();
            $data->nama_distributor = $request->input('nama_distributor');
            $data->nama_umkm = $request->input('nama_umkm');
            $data->alamat_distributor = $request->input('alamat_distributor');
            $data->kota = $request->input('kota');
            $data->provinsi = $request->input('provinsi');
            $data->kode_pos = $request->input('kode_pos');
            $data->no_handphone = $request->input('no_handphone');
            $data->email_distributor = $request->input('email_distributor');
            $data->jenis_vendor = $request->input('jenis_vendor');
            $data->kategori_vendor = $request->input('kategori_vendor');
            $data->jumlah_stock = $request->input('jumlah_stock');
            $data->harga_pricelist = $request->input('harga_pricelist');

            // Penanganan unggahan file
            if ($request->hasFile('image_path')) {
                $file = $request->file('image_path');
                $image_path = $file->store('public/img');
                $data->image_path = $image_path;
                if (!$image_path) {
                    return redirect()->back()->with('error', 'Gagal Menyimpan gambar produk');
                }
            }

            if ($request->hasFile('video_path')) {
                $file = $request->file('video_path');
                $video_path = $file->store('public/video');
                $data->video_path = $video_path;
                if (!$video_path) {
                    return redirect()->back()->with('error', 'Gagal Menyimpan video');
                }
            }
            if ($request->hasFile('file_path')) {
                $file = $request->file('file_path');
                $file_path = $file->store('public/file');
                $data->file_path = $file_path;
                if (!$file_path) {
                    return redirect()->back()->with('error', 'Gagal Menyimpan file');
                }
            }

            $data->save();

            return redirect()->route('form')
                             ->with('imagePath', $data->image_path)
                             ->with('videoPath', $data->video_path)
                             ->with('videoPath', $data->file_path)
                             ->with('success','Data sukses tersimpan.');
        } catch (\Exception $e) {
            // Penanganan kesalahan jika penyimpanan data gagal
            if (isset($image_path)) {
                Storage::delete($image_path); // Hapus gambar produk jika penyimpanan data gagal
            }
            if (isset($video_path)) {
                Storage::delete($video_path); // Hapus video jika penyimpanan data gagal
            }
            if (isset($file_path)) {
                Storage::delete($file_path); // Hapus file jika penyimpanan data gagal
            }
            return redirect()->back()->withInput()->withErrors(['error' => 'Gagal menyimpan data.']);
        }

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
