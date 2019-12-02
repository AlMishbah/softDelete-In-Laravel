<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/trash/tampil_hapus', 'TrashController@tampil_hapus')->name('trash.tampil_hapus');
Route::get('/trash/restore/{id}', 'TrashController@restore')->name('trash.restore');
Route::delete('/trash/hapus_permanent/{id}', 'TrashController@hapus_permanent')->name('trash.hapus_permanent');
Route::resource('trash', 'TrashController');
