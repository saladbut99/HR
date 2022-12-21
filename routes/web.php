<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HrController;

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

Route::get('/', [HrController::class, 'index']);


// Route::prefix('hr')->group(function () {
//     Route::get('/users',[HrController::class, 'users']);
//     Route::get('/user/{id}',[HrController::class, 'user']);
// });


Route::get('/users',[HrController::class, 'users']);

Route::post('/register',[HrController::class, 'register']);

Route::prefix('user')->group(function () {
    Route::get('/{id}',[HrController::class, 'user']);
    Route::get('/payslip/{id}',[HrController::class, 'payslip']);
});


