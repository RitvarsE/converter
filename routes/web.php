<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadCurrencyController;
use Illuminate\Support\Facades\Route;

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

Route::get('/upload', [UploadCurrencyController::class, 'upload']);
Route::get('/', [HomeController::class, 'home']);
Route::post('/', [HomeController::class, 'convert']);
