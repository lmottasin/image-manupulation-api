<?php


use App\Http\Controllers\V1\AlbumController;
use App\Http\Controllers\V1\ImageManupulationController;
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
Route::group(['prefix'=>'V1'], function(){

    Route::apiResource('album', AlbumController::class);
    Route::get('image',[ImageManupulationController::class, 'index']);
    Route::get('image/by-album/{album}',[ImageManupulationController::class, 'byAlbum']);
    Route::get('image/{image}',[ImageManupulationController::class, 'show']);
    Route::post('image/resize',[ImageManupulationController::class, 'resize']);
    Route::delete('image/{image}',[ImageManupulationController::class, 'destroy']);
});

