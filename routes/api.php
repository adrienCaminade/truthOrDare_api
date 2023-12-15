<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dare_classicController;
use App\Http\Controllers\Dare_spicyController;
use App\Http\Controllers\Truth_classicController;
use App\Http\Controllers\Truth_spicyController;

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

// commande pour générer le swagger :  php artisan l5-swagger:generate


Route::get('/api/dareClassic', [Dare_classicController::class, 'index']);
Route::get('/api/truthClassic', [Truth_classicController::class, 'index']);
Route::get('/api/dareSpicy', [Dare_spicyController::class, 'index']);
Route::get('/api/truthSpicy', [Truth_spicyController::class, 'index']);
