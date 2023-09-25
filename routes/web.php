<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reports', [\App\Http\Controllers\ReportController::class, 'index']);
Route::post('/reports', [\App\Http\Controllers\ReportController::class, 'store']);
Route::get('/reports/create', [\App\Http\Controllers\ReportController::class, 'create']);
Route::get('/reports/{id}/edit', [\App\Http\Controllers\ReportController::class, 'edit']);
Route::patch('/reports/{id}', [\App\Http\Controllers\ReportController::class, 'update']);
Route::delete('/reports/{id}', [\App\Http\Controllers\ReportController::class, 'delete']);
