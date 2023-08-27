<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContributorController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;

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

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/collections/search', [SearchController::class, 'search']);
    Route::get('/collections/filter-less', [SearchController::class, 'filterFromLess']);
    Route::get('/collections/filter-more', [SearchController::class, 'filterFromMore']);

    Route::apiResource('collections', CollectionController::class);
    Route::apiResource('contributors', ContributorController::class);

    Route::post('logout', 'logout');
});
