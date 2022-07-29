<?php

use App\Http\Controllers\apiController;
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
Route::get("/news/create", [apiController::class, "CreateNews"]);
Route::get("/news/show", [apiController::class, "ShowNews"]);
Route::get("/news/update/{id}", [apiController::class, "UpdateNews"]);
Route::get("/news/delete", [apiController::class, "DeleteNews"]);
Route::get("/news/search/{id}", [apiController::class, "SearchById"]);
Route::get("/news/search/{type}", [apiController::class, "SeachByType"]);
Route::get("/news/search/{date}", [apiController::class, "SearchByDate"]);
Route::get("/news/{date}/{type}", [apiController::class, "SearchByDateType"]);
