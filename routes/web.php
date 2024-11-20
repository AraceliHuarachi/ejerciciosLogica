<?php

use App\Http\Controllers\ExercisesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/changeValues', [ExercisesController::class, 'changeValues']);
Route::get('/dosNum', [ExercisesController::class, 'dosNum']);
