<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleSheetController;

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

Route::get('/google-sheet',[GoogleSheetController::class,'fetchSheetDat']);
Route::post('/google-sheets/data-filter', [GoogleSheetController::class, 'fetchDataByFilter']);



Route::get('/generate-jwt', [GoogleSheetController::class, 'generateJwt']);
