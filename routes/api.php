<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Response;

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

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show'])->missing(function (Request $request) {
    return response()->json(['message' => "Record not found ($request->user)"]);
});
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{user}', [UserController::class, 'update'])->missing(function (Request $request) {
    return response()->json(['message' => "Record not found ($request->user)"]);
});
