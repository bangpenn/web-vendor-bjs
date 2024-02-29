<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;


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
    public function __construct()
    {
        $this->middleware('auth');
    }

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

        $category = Category::where('id', $categoryId)->first();

        return view('frontend.catalog', compact('categoryProducts', 'category'));
    }

    public function showProductDetail($productId, $productDetailId)
    {
        // Mengambil data produk berdasarkan productId
        $product = Product::findOrFail($productId);

        // Mengambil data detail produk berdasarkan productDetailId
        $productDetail = ProductDetail::findOrFail($productDetailId);

        // Jika perlu, Anda dapat mengakses properti detail produk
        // Misal: $spesifikasi = $productDetail->spesifikasi;

        // Kemudian, Anda bisa mengirimkan data ke view atau melakukan operasi lain sesuai kebutuhan Anda
        return view('frontend.catDetail2', compact('product', 'productDetail'));
    }


    // public function showProductDetail($categoryId, $productDetailId)
    // {
    //     // Mengambil data product detail berdasarkan ID yang diberikan
    //     $productDetail = ProductDetail::findOrFail($productDetailId);

    //     // Kemudian, Anda bisa mengakses produk yang terkait dengan detail produk tersebut
    //     $product = $productDetail->product;

    //     dd($product);

    //     return view('frontend.catDetail2', compact('product'));
    // }


    // public function showProductDetail($categoryId, $productDetailId)
    // {
    //     $product = Product::findOrFail($productDetailId);
    //     return view('frontend.catDetail2', compact('product'));
    // }




//     public function showCatalog($categoryId)
//     {
//         $products = Category::where('categories_id', $categoryId)->get();

//         return view('frontend.catalog2', compact('products'));
//     }

//     public function showKonveksi()
//     {
//         // Mengambil produk dengan kategori konveksi (ID 1)
//         $konveksiProducts = Product::where('categories_id', 1)->get();

//         // Mengirimkan variabel $konveksiProducts ke tampilan
//         return view('frontend.catalog2', compact('konveksiProducts'));
//     }

//     public function showSouvenir()
//     {
//         // Mengambil produk dengan kategori souvenir (ID 4)
//         $souvenirProducts = Product::where('categories_id', 4)->get();

//         // Mengirimkan variabel $souvenirProducts ke tampilan
//         return view('frontend.catalo2', compact('souvenirProducts'));
//     }
}
