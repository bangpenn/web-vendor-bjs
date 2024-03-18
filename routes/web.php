<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormDataController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/catalog2', function () {
//     return view('frontend.catalog2');
// });

Route::get('/catalog3', function () {
    return view('frontend.catalog3');
});

// Auth
Route::prefix('auth')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    });
    Route::get('/register', function () {
        return view('auth.register');
    });

});


// Grouping frontend routes
Route::prefix('frontend')->group(function () {
    Route::get('/main', function () {
        return view('frontend.layouts.main');
    });

    Route::get('/home', function () {
        return view('frontend.home');
    });

    // Route::get('/catalog2', function () {
    //     return view('frontend.catalog2');
    // })->name('frontend.catalog2');

    // // Route::get('/frontend/catalog2', 'HomeController@showKonveksi')->name('frontend.catalog2');
    // Route::get('/frontend/catalog2', [App\Http\Controllers\HomeController::class, 'showCatalog'])->name('catalog2');



    // Route::get('/frontend/catalog2', [App\Http\Controllers\HomeController::class, 'showKonveksi'])->name('catalog2');

    // Route::get('/frontend/catalog2', [App\Http\Controllers\HomeController::class, 'showSouvenir'])->name('catalog2');

    // Route::get('/frontend/catalog2', [App\Http\Controllers\SouvenirController::class, 'showSouvenir'])->name('catalog2');





    Route::get('/catalog3', function () {
        return view('frontend.catalog3');
    })->name('frontend.catalog3');

    Route::get('/catDetail2', function () {
        return view('frontend.catDetail2');
    })->name('frontend.catDetail2');

    Route::get('/catDetail3', function () {
        return view('frontend.catDetail3');
    })->name('frontend.catDetail3');

    Route::get('/catalog', function () {
        return view('frontend.catalog');
    });

    Route::get('/form', function () {
        return view('frontend.form');
    })->name('frontend.form');

    Route::get('/form2', function () {
        return view('frontend.form2');
    })->name('frontend.form2');

    Route::get('/upload', function () {
        return view('frontend.upload');
    })->name('frontend.upload');
});

// Route::get('/frontend/catalog2', [App\Http\Controllers\SouvenirController::class, 'showSouvenir'])->name('catalog2');
Route::get('/frontend/catalog/{categoryId}', [App\Http\Controllers\HomeController::class, 'showCategory'])->name('catalog.category');


Route::get('/frontend/form/{categoryId}', [App\Http\Controllers\FormController::class, 'showCategory'])->name('frontend.form');

Route::get('/frontend/catalog/{productId}/productDetail/{productDetailId}', [App\Http\Controllers\HomeController::class, 'showProductDetail'])->name('catalog.product.detail');

// Route::get('/frontend/catalog/{categoryId}', [App\Http\Controllers\HomeController::class, 'showCategory'])->name('catalog.category');
// Route::get('/frontend/catalog/{productId}/productDetail/{productDetailId}', [App\Http\Controllers\HomeController::class, 'showProductDetail'])->name('catalog.product.detail');




Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::prefix('vendor_profile/')->group(function () {
        Route::get('/', function () {
            return view('admin.vendor');
        })->name('admin.vendor');


    });

    Route::get('/vendor_profile/{id}', [VendorController::class, 'showProfile'])->name('admin.vendor_profile');

});

Route::get('/admin/search', [DashboardController::class, 'search'])->name('admin.search');





// Formulir
// Route::get('/frontend/form', function () {
//     return view('/frontend/form');
// })->name('form');
// Rute untuk menampilkan formulir
Route::get('/frontend/form', [FormDataController::class, 'form'])->name('form');

// Rute untuk memproses data formulir yang disubmit
Route::post('/frontend/form/store', [FormDataController::class, 'store'])->name('store');

Route::post('/frontend/form/store/img', [FormDataController::class, 'storeImage'])->name('store.image');
Route::post('/frontend/form/store/video', [FormDataController::class, 'storeVideo'])->name('store.video');
Route::post('/frontend/form/store/file', [FormDataController::class, 'storeFile'])->name('store.file');


// Login
Auth::routes(['login' => false, 'register' => false, 'verify' => true]);

route::middleware('guest')->group(function(){
    Route::get('/login',Login::class)->name('login');
    Route::get('/register',Register::class)->name('register');
});

Route::get('/frontend/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');
