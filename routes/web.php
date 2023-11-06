<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DogController;

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

Route::get('/', [DogController::class, 'index'])->name('name');

Route::get('/register', [DogController::class, 'register'])->name('register');

Route::get('/dogprofile', [DogController::class, 'dogprofile'])->name('dogprofile');

Route::get('/dogdetails/{area_id}', [DogController::class, 'dogdetails'])->name('dogdetails');

Route::get('/test', [DogController::class, 'test'])->name('test');

Route::get('/inquiry', [DogController::class, 'inquiry'])->name('inquiry');