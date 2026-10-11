<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/{nama}/{npm}/{kelas}', [ProfileController::class,'profile']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah', [MatakuliahController::class, 'store'])->name('matakuliah.store');

Route::get('/matakuliah/{id}/edit', [MatakuliahController::class, 'edit'])->name('matakuliah.edit');
Route::put('/matakuliah/{id}', [MatakuliahController::class, 'update'])->name('matakuliah.update');
Route::delete('/matakuliah/{id}', [ MatakuliahController::class, 'destroy'])->name('matakuliah.destroy');  

