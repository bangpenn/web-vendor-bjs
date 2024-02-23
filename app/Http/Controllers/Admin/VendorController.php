<?php

namespace App\Http\Controllers\Admin;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class VendorController extends Controller
{
    public function showProfile($id)
    {
    // Cari data vendor berdasarkan ID
    $vendor = Data::find($id);

    // // dd($vendor);

    //     if ($vendor !== null) {
    //         // Jika ditemukan, tampilkan view dengan data vendor
    //         return view('admin.vendor_profile', compact('vendor'));
    //     } else {
    //         // Jika tidak ditemukan, redirect kembali dengan pesan error
    //         return redirect()->back()->with('error', 'Data not found.');
    //     }

    $imagePath = $vendor->image;
    $videoPath = $vendor->video;
    return view('admin.vendor_profile', compact('vendor', 'imagePath', 'videoPath'));
    }


}

