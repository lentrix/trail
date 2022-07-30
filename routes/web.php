<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'landing']);
Route::get('/guidelines', [SiteController::class, 'guidelines']);
Route::get('/prizes', [SiteController::class, 'prizes']);
Route::get('/registration', [SiteController::class, 'registration']);
Route::get('/participation', [SiteController::class, 'participation']);
