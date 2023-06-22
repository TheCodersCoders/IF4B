<?php

use App\Http\Controllers\API\AirController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\IkanController;
use App\Http\Controllers\API\MakananController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
// ikan
Route::middleware('auth:sanctum')->get('/ikan', [IkanController::class, 'index']);
Route::middleware('auth:sanctum')->post('/ikan/store', [IkanController::class, 'store']);
Route::middleware('auth:sanctum')->post('/ikan/update/{id}', [IkanController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/ikan/delete/{id}', [IkanController::class, 'delete']);
// air
Route::middleware('auth:sanctum')->get('/air', [AirController::class, 'index']);
Route::middleware('auth:sanctum')->post('/air/store', [AirController::class, 'store']);
Route::middleware('auth:sanctum')->post('/air/update/{id}', [AirController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/air/delete/{id}', [AirController::class, 'delete']);
// makanan
Route::middleware('auth:sanctum')->get('/makanan', [MakananController::class, 'index']);
Route::middleware('auth:sanctum')->post('/makanan/store', [MakananController::class, 'store']);
Route::middleware('auth:sanctum')->post('/makanan/update/{id}', [MakananController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/makanan/update/{id}', [MakananController::class, 'delete']);

