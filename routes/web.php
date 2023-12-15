<?php

use App\Http\Controllers\Dare_classicController;
use App\Http\Controllers\Dare_spicyController;
use App\Http\Controllers\Truth_classicController;
use App\Http\Controllers\Truth_spicyController;
use Illuminate\Support\Facades\Route;
use L5Swagger\L5Swagger;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*

Route::get('/', function () {
    return view('vendor.l5-swagger.index');
});

*/







/*** API PART ***/



Route::get('/api/dareClassic', [Dare_classicController::class, 'index']);
Route::get('/api/truthClassic', [Truth_classicController::class, 'index']);
Route::get('/api/dareSpicy', [Dare_spicyController::class, 'index']);
Route::get('/api/truthSpicy', [Truth_spicyController::class, 'index']);


