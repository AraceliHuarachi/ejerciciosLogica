<?php

use App\Http\Controllers\Exercises2Controller;
use App\Http\Controllers\ExercisesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/changeValues', [ExercisesController::class, 'changeValues']);
Route::get('/tresNum', [ExercisesController::class, 'tresNum']);
Route::get('/chngValues', [ExercisesController::class, 'chngValues']);
Route::get('/dosNum', [ExercisesController::class, 'dosNum']);
Route::get('/concat', [ExercisesController::class, 'concat']);

Route::get('/for1', [Exercises2Controller::class, 'for1']);
