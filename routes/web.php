<?php
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\DataKarirController;
use App\Http\Controllers\DataAlternatifController;
use App\Http\Controllers\DataKriteriaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'account'],function() {

    //Guest Middleware
    Route::group(['middleware' => 'guest'],function(){
        Route::get('login',[LoginController::class,'index'])->name('account.login');
        Route::get('register',[LoginController::class,'register'])->name('account.register');
        Route::post('process-register',[LoginController::class,'processRegister'])->name('account.processRegister');
        Route::post('authenticate',[LoginController::class,'authenticate'])->name('account.authenticate');

        
    });

    // Authenticate Middleware
    Route::group(['middleware' => 'auth'],function(){
        Route::get('logout',[LoginController::class,'logout'])->name('account.logout');
        Route::get('dashboard',[DashboardController::class,'index'])->name('account.dashboard');
        Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi');
    });   
});

// Route untuk dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Rute untuk Data dan Perhitungan
Route::group(['middleware' => 'auth'], function() {
    Route::get('/data', function () {
        return redirect()->route('data.alternatif'); // Redirect to default submenu (optional)
    })->name('data.index');

    Route::resource('alternatif', DataAlternatifController::class);
    Route::get('/data/alternatif', [DataAlternatifController::class, 'index'])->name('data.alternatif');

    Route::resource('kriteria', DataKriteriaController::class);
    Route::get('/data/kriteria', [DataKriteriaController::class, 'index'])->name('data.kriteria');
});
Route::group(['middleware' => 'auth'], function() {
    Route::get('/perhitungan/hasil', [PerhitunganController::class, 'hitungWP'])->name('perhitungan.hasil');
});
