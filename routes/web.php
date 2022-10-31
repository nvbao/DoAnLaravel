<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NguoiDungController;
use App\Http\Controllers\TrangChuController;

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


Route::get('nguoi-dung',[NguoiDungController::class, 'index'])->name('danh-sach-nguoi-dung');
Route::get('nguoi-dung/them-moi',[NguoiDungController::class, 'create'])->name('form-them-moi-nguoi-dung');
Route::post('nguoi-dung/them-moi-2',[NguoiDungController::class, 'store'])->name('them-moi-nguoi-dung');

Route::get('trang-chu',[TrangChuController::class, 'index']);
Route::get('trang-chu/trang-chu',[TrangChuController::class, 'create']);
