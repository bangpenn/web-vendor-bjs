<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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


Route::get('/catalog2', function () {
    return view('frontend.catalog2');
});

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

    Route::get('/catalog2', function () {
        return view('frontend.catalog2');
    })->name('frontend.catalog2');

    Route::get('/catalog3', function () {
        return view('frontend.catalog3');
    })->name('frontend.catalog3');

    Route::get('/catDetail2', function () {
        return view('frontend.catDetail2');
    })->name('frontend.catDetail2');

    Route::get('/catDetail3', function () {
        return view('frontend.catDetail3');
    })->name('frontend.catDetail2');

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

// Grouping admin routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::prefix('dashboard/vendor')->group(function () {
        Route::get('/', function () {
            return view('admin.vendor');
        })->name('admin.vendor');

        Route::get('/profile', function () {
            return view('admin.vendor_profile');
        })->name('admin.vendor.profile');
    });
});

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
// admin.vendor_profile
Route::get('/admin/vendor_profile/{id}', [VendorController::class, 'showProfile'])->name('admin.vendor_profile');


// Formulir
// Route::get('/frontend/form', function () {
//     return view('/frontend/form');
// })->name('form');
Route::get('/frontend/form', [FormDataController::class, 'form']);
Route::post('/frontend/form', [FormDataController::class, 'store'])->name('store');
Route::get('/frontend/form', [FormController::class, 'index'])->name('form');
// Login
Auth::routes(['login' => false, 'register' => false, 'verify' => true]);

route::middleware('guest')->group(function(){
    Route::get('/login',Login::class)->name('login');
    Route::get('/register',Register::class)->name('register');
});

Route::get('/frontend/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
