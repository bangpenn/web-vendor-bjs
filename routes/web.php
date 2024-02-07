<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/catalog2', function () {
    return view('frontend.catalog2');
});

Route::get('/catalog3', function () {
    return view('frontend.catalog3');
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


// formulir

Route::post('/simpan-data', [FormController::class, 'simpanData'])->name('simpan-data');

