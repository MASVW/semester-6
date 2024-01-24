<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\Barangs;
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
Route::get('/', [BarangController::class, 'index'])->name('home');
Route::controller(BarangController::class)->prefix('/barang')->group(function(){
   Route::get('/form', 'form')->name('view.form');
   Route::post('/form', 'create')->name('filling.form');

   Route::get('/{barang:id}', 'show')->name('viewing.item');
   Route::get('/{barang:id}/edit', 'edit')->name('edit.item');
   Route::put('/{barang:id}', 'update')->name('update.item');
   Route::delete('/{barang:id}/delete', 'delete')->name('delete.item');
});