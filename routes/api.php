<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HrController;

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


Route::get('/users',[HrController::class, 'users']);

Route::post('/register',[HrController::class, 'register']);

Route::prefix('user')->group(function () {
    Route::get('/{id}',[HrController::class, 'user']);
    Route::get('/payslip/{id}',[HrController::class, 'payslip']);
});


