<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\MapelController;
use Illuminate\Support\Facades\Route;


Route::resource('mapels', MapelController::class);
Route::resource('students', StudentController::class);
