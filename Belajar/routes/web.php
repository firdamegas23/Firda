<?php

use App\Http\Controllers\InputController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index_input');
});

Route::get('/login', [loginController::class, 'index_login'])->name('login');#->middleware(('guest'));
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/add_register', [LoginController::class, 'add_register'])->name('add_register');

Route::get('Profil Perusahaan', function () {
    return view('profil_perusahaan');
});

Route::get('Struktur Organisasi', function () {
    return view('struktur_organisasi');
});

Route::get('Daftar Karyawan', function () {
    return view('daftar_karyawan');
});

Route::get('/index_input', [InputController::class, 'index_input'])->name('index_input');

Route::get('/add_input', [InputController::class, 'add_input']);
Route::get('/get-nama', [InputController::class, 'getNama'])->name('get-nama');

Route::post('/insert_input', [InputController::class, 'insert_input'])->name('insert_input');

Route::get('/edit_input/{Program_Code}', [InputController::class, 'edit_input']);

Route::post('/update_input', [InputController::class, 'update_input'])->name('update_input');

Route::get('/delete_input/{Program_Code}', [InputController::class, 'delete_input']);
