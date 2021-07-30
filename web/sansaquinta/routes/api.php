<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LecturaController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("lecturas/get", [LecturaController::class, "getLecturas"]);
Route::post("lecturas/delete", [LecturaController::class, "eliminarLectura"]);
Route::post("lecturas/post", [LecturaController::class, "crearLectura"]);