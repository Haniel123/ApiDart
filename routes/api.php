<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\DiaDanhController;
use  App\Http\Controllers\ShareController;
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

Route::get('DiaDanh',[DiaDanhController::class,'LayDiaDanh']);

Route::post('TimKiem',[DiaDanhController::class,'TimKiem']);

Route::post('LayHinhAnhTheoDiaDanh', [DiaDanhController::class,'LayHinhAnhTheoDiaDanh']);

Route::post('LayDiaDanhTheoId', [ShareController::class,'LayDiaDanhTheoId']);

Route::post('LayDiaDanhHotNhat', [ShareController::class,'LayDiaDanhHotNhat']);


