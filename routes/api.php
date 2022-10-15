<?php

use App\Http\Controllers\ProjectController;
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

// projects
Route::get('project/all', [ProjectController::class, 'index']);
Route::get('project/country/{country_name}', [ProjectController::class, 'projectsByCountry']);
Route::get('project/status/{status}', [ProjectController::class, 'projetsByStatus']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
