<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

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
            'file_path' => 'required|mimes:jpeg,png|max:2048',
            'video_path' => 'required|mimes:mp4,mov,avi|max:102400'

        ]);

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
        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $filePath = $file->store('public/img');
            $data->file_path = $filePath;
        }

        if ($request->hasFile('video_path')) {
            $file = $request->file('video_path');
            $video_path = $file->store('public/video');
            $data->video_path = $video_path;
        }

        $data->save();

        Data::create($request->all());

        return redirect()->route('form')
                         ->with('imagePath', $data->file_path)
                         ->with('videoPath', $data->video_path)
                         ->with('success','Data sukses tersimpan.');

    }
}
