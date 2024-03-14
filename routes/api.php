<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->name('api.')->group(function () {
    Route::get('/documents', [App\Http\Controllers\Admin\DocumentController::class, 'index'])->name('documents.index');
    Route::post('/documents', [App\Http\Controllers\Admin\DocumentController::class, 'store'])->name('documents.store');
    Route::get('/documents/{model}', [App\Http\Controllers\Admin\DocumentController::class, 'show'])->name('documents.show');
    Route::post('/documents/{model}', [App\Http\Controllers\Admin\DocumentController::class, 'update'])->name('documents.update');
    Route::delete('/documents/{model}', [App\Http\Controllers\Admin\DocumentController::class, 'destroy'])->name('documents.destroy');
});

Route::middleware(['auth:sanctum'])->name('api.')->group(function () {
    Route::get('/mantenedor', [App\Http\Controllers\Admin\MantenedorController::class, 'index'])->name('mantenedor.index');
    Route::post('/mantenedor', [App\Http\Controllers\Admin\MantenedorController::class, 'store'])->name('mantenedor.store');
    Route::get('/mantenedor/{model}', [App\Http\Controllers\Admin\MantenedorController::class, 'show'])->name('mantenedor.show');
    Route::post('/mantenedor/{model}', [App\Http\Controllers\Admin\MantenedorController::class, 'update'])->name('mantenedor.update');
    Route::delete('/mantenedor/{model}', [App\Http\Controllers\Admin\MantenedorController::class, 'destroy'])->name('mantenedor.destroy');
});
