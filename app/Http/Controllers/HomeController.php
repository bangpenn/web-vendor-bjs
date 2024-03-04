<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ProductDetail;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user(); // Mendapatkan informasi pengguna yang saat ini masuk
        return view('frontend.home', compact('user')); // Mengirim informasi pengguna ke view
    }

    public function showCategory($categoryId)
    {
        $categoryProducts = Product::where('categories_id', $categoryId)->get();
        $category = Category::findOrFail($categoryId);

        // Misalnya, ambil detail produk pertama dari kategori
        $productDetail = $categoryProducts->firstOrFail()->productDetail;

        // dd($productDetail);

        return view('frontend.catalog', compact('categoryProducts', 'category', 'productDetail'));
    }

    public function showProductDetail($productId, $productDetailId)
    {
        // Mengambil data produk berdasarkan productId
        $product = Product::findOrFail($productId);

        // Mengambil data detail produk berdasarkan productDetailId
        $productDetail = ProductDetail::findOrFail($productDetailId);

        // Kemudian, Anda bisa mengirimkan data ke view atau melakukan operasi lain sesuai kebutuhan Anda
        return view('frontend.catDetail2', compact('product', 'productDetail'));
    }


}
