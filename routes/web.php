<?php

use App\Http\Controllers\AdministratorVillageController;
use App\Http\Controllers\AdministratorRegistrationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardExportController;
use App\Http\Controllers\DashboardLaporanController;
use App\Http\Controllers\DashboardReceivePaymentController;
use App\Http\Controllers\DashboardSpptController;
use App\Http\Controllers\SpptController;
use App\Http\Controllers\TaxCheckController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/contact',[ContactController::class, 'index']);

Route::get('/about', function () {
    return view('about',[
        "title" => "About"
    ]);
});
Route::get('/taxcheck',[TaxCheckController::class, 'index']);

// <<-- sppt -->>
//      <<-- Import -->>
Route::get('/dashboard/sppt/import',[SpptController::class, 'import'])->middleware('auth');
Route::post('/dashboard/sppt/import',[SpptController::class, 'store'])->middleware('auth');
//      <<-- Akhir Import -->>
//      <<-- Export -->>
Route::get('/dashboard/report',[SpptController::class, 'exportview'])->middleware('auth');
Route::get('/dashboard/report/export',[SpptController::class, 'export'])->middleware('auth');

Route::get('exportSetorLaporan',[DashboardExportController::class, 'setor'])->name('exportSetorLaporan')->middleware('auth');
Route::get('exportLaporanTerhutang',[DashboardExportController::class, 'terhutang'])->name('exportLaporanTerhutang')->middleware('auth');
Route::get('exportLaporanLunas',[DashboardExportController::class, 'lunas'])->name('exportLaporanLunas')->middleware('auth');
//      <<-- Akhir Export-->>
// <<-- akhir sppt -->>

// <<-- Login -->>
Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);
// <<-- Akhir Login -->>

// <<-- Registration -->>
Route::get('/registration',[RegistrationController::class, 'index'])->middleware('guest');
Route::post('/registration',[RegistrationController::class, 'store'])->middleware('guest');
// <<-- Akhir Registration -->>

// <<-- Dashboard -->>

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// <<-- Dashboard sppt -->>
Route::resource('/dashboard/sppt', DashboardSpptController::class)->middleware('auth');
// <<-- Akhir Dashboard sppt -->>

// <<-- ReceivePayment -->>
Route::get('/dashboard/receivepayment/', [DashboardReceivePaymentController::class, 'index']);
Route::get('/dashboard/receivepayment/{sppt:nop}', [DashboardReceivePaymentController::class, 'update']);
Route::put('/dashboard/receivepayment/{sppt:nop}/edit', [DashboardReceivePaymentController::class, 'edit']);
// <<-- Akhir ReceivePayment -->>

//      <<-- administratorRegistration -->>
Route::resource('/dashboard/officers', AdministratorRegistrationController::class);
Route::resource('/dashboard/village', AdministratorVillageController::class)->middleware('admin');
//      <<-- akhir administratorRegistration -->>

Route::get('/dashboard/terhutang',[DashboardLaporanController::class, 'terhutang'])->middleware('auth');
Route::get('/dashboard/lunas',[DashboardLaporanController::class, 'lunas'])->middleware('auth');
Route::get('/dashboard/setor',[DashboardLaporanController::class, 'setor'])->middleware('auth');
Route::get('/dashboard/rekapitulasi',[DashboardLaporanController::class, 'rekapitulasi'])->middleware('auth');


// <<-- Akhir Dashboard -->>
