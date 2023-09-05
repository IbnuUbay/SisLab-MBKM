<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestInputController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    return view('test');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test-controller/{param1}', [TestController::class, 'index']);

Route::get('/artikel/{slug}', [ArtikelController::class, 'view']);

Route::get('/table', [TableController::class, 'view']);

Route::get('/learning/template', function(){
    return view('learning.crud_user');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/penjaga', [AdminController::class, 'admin'])->name('penjaga.index');
Route::get('/penjaga-input', [AdminController::class, 'penjaga_add'])->name('addpenjaga.get');
Route::get('/penjaga-form-add', [AdminController::class, 'form_add_admin']);
Route::delete('/penjaga/{id}', [AdminController::class, 'destroy'])->name('penjaga.destroy');

Route::get('/super-admin', [AdminController::class, 'super_admin']);
Route::get('/super-admin-input', [AdminController::class, 'super_admin_add'])->name('addSuperAdmin.get');
Route::get('/super-admin-form-add', [AdminController::class, 'form_add_super_admin']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa-input', [MahasiswaController::class, 'mahasiswa_add'])->name('addMahasiswa.get');
Route::get('/mahasiswa-form-add', [MahasiswaController::class, 'form_add']);
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang-input', [BarangController::class, 'store'])->name('addBarang.get');
Route::get('/barang-form-add', [BarangController::class, 'create']);
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::patch('/barang/{id}/update', [BarangController::class, 'update'])->name('barang.update');

Route::get('/peminjaman', [TransaksiController::class, 'peminjaman_view'])->name('peminjaman.index');
Route::delete('/peminjaman/{id}', [TransaksiController::class, 'destroy_applicant'])->name('peminjaman.destroy');
Route::get('/pengembalian', [TransaksiController::class, 'pengembalian_view']);



Route::get('/forget-password', [AuthController::class, 'forget_password'])->name('forget.password');
Route::get('/user', [AdminController::class, 'user'])->name('user');
Route::get('/testing-input-dummy', [TestInputController::class, 'index']);
Route::get('/testing-input', [TestInputController::class, 'test_input'])->name('input.get');
Route::get('/testing-form', [TestInputController::class, 'form']);
Route::get('/testing-view', [TestInputController::class, 'table']);




