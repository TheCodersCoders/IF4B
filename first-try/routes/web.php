<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/dosen', function() {
//     return view('dosen');
// });
// Route::get('/dosen/index', function() {
//     return view('dosen.index');
// });

Route::get('prodi', [ProdiController::class, 'index'])->name('prodi');
Route::resource('fakultas', FakultasController::class);
