<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SouvenirController extends Controller
{
    public function showSouvenir()
    {
        // Mengambil produk dengan kategori souvenir (ID 4)
        $souvenirProducts = Product::where('categories_id', 4)->get();

        // Mengirimkan variabel $konveksiProducts ke tampilan
        return view('frontend.catalog3', compact('souvenirProducts'));
    }
}
