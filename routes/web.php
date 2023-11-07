<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DogController;

Route::get('/', [DogController::class, 'index'])->name('index');

Route::get('/dogprofile', [DogController::class, 'dogprofile'])->name('dogprofile');

Route::get('/dogdetails/{area_id}', [DogController::class, 'dogdetails'])->name('dogdetails');

Route::get('/test', [DogController::class, 'test'])->name('test');

Route::get('/inquiry', [DogController::class, 'inquiry'])->name('inquiry');