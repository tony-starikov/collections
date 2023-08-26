<?php

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

Route::post('/collections/search', [SearchController::class, 'search']);

Route::apiResource('collections', CollectionController::class);
Route::apiResource('contributors', ContributorController::class);
