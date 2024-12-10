<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorPageController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApotekerController;
use App\Http\Controllers\PatienController;
use App\Http\Controllers\RegisterPatienController;
use App\Http\Controllers\ApotekerPageController;
use App\Http\Controllers\HomepageController;
use App\Models\Poly;
use App\Models\Doctor;
use App\Models\Apoteker;
use App\Models\Patien;
use Illuminate\Support\Facades\Http;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::group(['prefix' => 'pasien'], function(){
        Route::get('/index', [PatienController::class, 'index'])->name('pasien.index');
        Route::get('/detail/{id}', [PatienController::class, 'detail'])->name('pasien.detail');
        Route::get('detail/pemeriksaan/{id}', [PatienController::class, 'pemeriksaan']);
        Route::get('send-email', [PatienController::class, 'SendEmail']);
        Route::post('detail/pemeriksaan/{id}/post', [PatienController::class, 'store_pemeriksaan'])->name('pemeriksaan');
        Route::get('search', [PatienController::class, 'search'])->name('patien.search');
    });
    Route::group(['prefix' => 'doctor'], function(){
        Route::get('/index', [DoctorController::class, 'index'])->name('dokter.index');
        Route::get('/create', [DoctorController::class, 'create'])->name('dokter.create');
        Route::post('/store-create', [DoctorController::class, 'store'])->name('dokter.post');
        Route::get('/edit/{id}', [DoctorController::class, 'edit'])->name('dokter.edit');
        Route::patch('/update/{id}', [DoctorController::class, 'update'])->name('dokter.patch');
        Route::delete('/delete/{id}', [DoctorController::class, 'delete'])->name('dokter.delete');
    });
    Route::group(['prefix' => 'poli'], function(){
        Route::get('/', [PoliController::class, 'index'])->name('poli.index');
        Route::get('/create', [PoliController::class, 'create'])->name('poli.create');
        Route::post('/store-create', [PoliController::class, 'store'])->name('poli.post');
        Route::get('/edit/{id}', [PoliController::class, 'edit'])->name('poli.edit');
        Route::patch('/update/{id}', [PoliController::class, 'update'])->name('poli.patch');
        Route::delete('/delete/{id}', [PoliController::class, 'delete'])->name('poli.delete');
    });
    Route::group(['prefix' => 'apoteker'], function(){
        Route::get('/index', [ApotekerController::class, "index"])->name('apoteker.index');
        });
        Route::get('/create', function(){
            return view('admin.apoteker.create');
        })->name('apoteker.create');
        Route::post('/store-create', [ApotekerController::class, 'store']);
        Route::get('/edit/{id}', [ApotekerController::class, 'edit']);
        Route::patch('/update/{id}', [ApotekerController::class, 'update']);
        Route::delete('/delete/{id}', [ApotekerController::class, 'delete']);
    });
    Route::group(['middleware' => 'guest'], function(){
        Route::get('/register', [AuthController::class, 'register'])->name('register');
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::post('signup', [AuthController::class, 'signup'])->name('signup');
        Route::post('signin', [AuthController::class, 'signin'])->name('signin');
    });

Route::get('logout', [AuthController::class, 'signout'])->name('logout');


Route::get('/nusantara-hospital/register', function(){
    return view('pasien.register');
});
Route::post('/nusantara-hospital-post', [RegisterPatienController::class, 'store']);

Route::get('/nusantara-hospital', [HomepageController::class, 'index']);
