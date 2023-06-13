<?php

use App\Http\Controllers\AirController;
use App\Http\Controllers\IkanController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\PilihanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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

Route::resource('pilihan', PilihanController::class);
Route::resource('ikan', IkanController::class);
Route::resource('air', AirController::class);
Route::resource('makanan', MakananController::class );

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('layout.main');
});

Route::get('/dashboard', function () {
    return view('layout.main');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });




require __DIR__.'/auth.php';
