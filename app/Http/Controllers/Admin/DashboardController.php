<?php

namespace App\Http\Controllers\Admin;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Data::all();
        $totalVendors = Data::count();

        // return view('admin.dashboard', compact('data'));
        // return view('admin.dashboard', ['totalVendors' => $totalVendors]);
        return view('admin.dashboard', compact('data', 'totalVendors'));

    }





}
