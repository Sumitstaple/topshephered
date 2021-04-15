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

//Portal API's
Route::get('/portal/users', [App\Http\Controllers\PortalApiController::class, 'index']);
Route::get('/portal/users/{id}', [App\Http\Controllers\PortalApiController::class, 'show']);
Route::put('/portal/users/{id}', [App\Http\Controllers\PortalApiController::class, 'update']);
Route::get('/portal/users/{id}/edit', [App\Http\Controllers\PortalApiController::class, 'edit']);
Route::delete('/portal/users/{id}', [App\Http\Controllers\PortalApiController::class, 'destroy']);
Route::post('/portal/createusers', [App\Http\Controllers\PortalApiController::class, 'store']);
Route::get('/portal/users/search/{email}', [App\Http\Controllers\PortalApiController::class, 'search']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
