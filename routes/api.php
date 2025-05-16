
<?php

use App\Http\Controllers\Api\IndustriController;
use App\Http\Controllers\Api\PKLController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\GuruController;
use App\Http\Controllers\Api\SiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('siswa', SiswaController::class);
    Route::apiResource('guru', GuruController::class);
    Route::apiResource('industri', IndustriController::class);
    Route::apiResource('pkl', PKLController::class);
    Route::post('/logout', [AuthController::class, 'logout']);
});