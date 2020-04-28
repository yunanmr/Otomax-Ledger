<?php

use Illuminate\Support\Facades\Route;

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

Route::livewire('/','dasbor')->name('dasbor');
Route::livewire('/rugi-laba','rugi-laba')->name('rugi.laba');
Route::livewire('/transaksi-reseller','transaksi-reseller')->name('transaksi.reseller');