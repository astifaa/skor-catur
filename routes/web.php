<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\JobdesController;
use App\Http\Controllers\PertandinganController;

Route::get('/', [App\Http\Controllers\PesertaController::class, 'beranda'])->name('/');

Auth::routes();

Route::get('employee/home', [HomeController::class, 'employeeHome'])->name('employee.home')->middleware('is_employee');
Route::get('/home', [App\Http\Controllers\PesertaController::class, 'index'])->name('home');
Route::get('/d_jobdes', [App\Http\Controllers\JobdesController::class, 'index'])->name('d_jobdes');
Route::get('/d_pertandingan', [App\Http\Controllers\PertandinganController::class, 'index'])->name('d_pertandingan');
Route::get('/d_skor', [App\Http\Controllers\PertandinganController::class, 'skor'])->name('d_skor');


Route::resource('Peserta', PesertaController::class);
Route::resource('Jobdes', JobdesController::class);
Route::resource('Pertandingan', PertandinganController::class);