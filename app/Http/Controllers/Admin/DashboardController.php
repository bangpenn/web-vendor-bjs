<?php

namespace App\Http\Controllers\Admin;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Mendapatkan informasi pengguna yang saat ini masuk
        $data = Data::all();
        $totalVendors = Data::count();

        return view('admin.dashboard', compact('user', 'data', 'totalVendors'));
    }


    public function dashboard()
    {
        $data = Data::all();
        $totalVendors = Data::count();
        return view('admin.dashboard', compact('data', 'totalVendors'));

    }

    // public function search(Request $request)
    // {
    //     $query = $request->input('query');

    //     // Lakukan logika pencarian sesuai dengan kebutuhan aplikasi Anda
    //     $results = Data::where(function($queryBuilder) use ($query) {
    //         $queryBuilder->where('nama_distributor', 'like', '%'.$query.'%')
    //                     ->orWhere('nama_umkm', 'like', '%'.$query.'%')
    //                     ->orWhere('jenis_vendor', 'like', '%'.$query.'%')
    //                     ->orWhere('kategori_vendor', 'like', '%'.$query.'%');
    //     })->get();

    //     return view('admin.dashboard', compact('results'));
    // }

}
